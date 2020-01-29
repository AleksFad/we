<?php

namespace App\Controller;

use App\Entity\News;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\News\NewsForm;

class AdminNewsController extends AbstractController
{

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * Default admin route
     * @Route("/admin/", name="main_view")
     * @return Response
     */
    public function showAdmin()
    {
        return $this->render(
            'admin/index.html.twig'
        );
    }


    /**
     * Create a new news
     * @Route("/admin/news/create", name="news_create")
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function createNews(Request $request)
    {
        $news = new News();
        $form = $this->createForm(NewsForm::class, $news);
        //$categories = $this->getDoctrine()->getRepository('App\Entity\Category')->findAll();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('image')->getData();

            if ($image) {
                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                //$safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$image->guessExtension();
                try {
                    $image->move(
                        $this->getParameter('image_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // some exception
                }
                $news->setImage('/uploads/images/'.$newFilename);
            }

            $data = $form->getData();
            $this->entityManager->persist($data);
            $this->entityManager->flush();

            return $this->redirect('/admin/news/' . $data->getId());
        }

        return $this->render(
            'admin/news/create_news.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
     * Show all news
     * @Route("/admin/news/", name="all_news_view")
     * @return Response
     */
    public function showAllNews()
    {
        $news = $this->getDoctrine()
            ->getRepository('App\Entity\News')
            ->findAll();

        return $this->render(
            'admin/news/show_all_news.html.twig',
            array('news' => $news)
        );
    }

    /**
     * Delete news by id
     * @Route("/admin/news/delete/{id}", name="delete_news")
     * @param $id
     * @return RedirectResponse
     */
    public function deleteNews($id)
    {
        $this->entityManager = $this->getDoctrine()->getManager();
        $news = $this->entityManager->getRepository('App\Entity\News')->find($id);

        if (!$news) {
            throw $this->createNotFoundException(
                'No news with such ID: ' . $id
            );
        }

        $this->entityManager->remove($news);
        $this->entityManager->flush();

        return $this->redirectToRoute('all_news_view');
    }

    /**
     * Update news by ID
     * @Route("/admin/news/update/{id}", name="update_news")
     * @param Request $request
     * @param $id
     * @return RedirectResponse|Response
     */
    public function updateNews(Request $request, $id)
    {
        $this->entityManager = $this->getDoctrine()->getManager();
        $news = $this->entityManager->getRepository('App\Entity\News')->find($id);

        if (!$news) {
            throw $this->createNotFoundException(
                'No news with such ID: ' . $id
            );
        }

        $form = $this->createForm(NewsForm::class, $news);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $image = $form->get('image')->getData();

            if ($image) {
                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$image->guessExtension();
                try {
                    $image->move(
                        $this->getParameter('image_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // some exception
                }
                $news->setImage('/uploads/images/'.$newFilename);
            }

            $data = $form->getData();
            $this->entityManager->flush();
            return $this->redirect('/admin/news/' . $id);
        }

        return $this->render(
            'admin/news/edit_news.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
     * View news by ID
     * @Route("/admin/news/{id}", name="news_view")
     * @param $id
     * @return Response
     */
    public function viewNews($id)
    {
        $news = $this->getDoctrine()
            ->getRepository('App\Entity\News')
            ->find($id);

        //Increase count views
//        $views = $news->getViews();
//        $news->setViews($views+1);
//        $this->entityManager->persist($news);
//        $this->entityManager->flush();


        //$comments = $commentsRepository->findBy(['news' => $news]);
        $comments = $news->getComments();
        $this->entityManager = $this->getDoctrine()->getManager();
        $categories = $this->entityManager->getRepository('App\Entity\Category')->find($id);

        if (!$news) {
            throw $this->createNotFoundException(
                'No news with such ID: ' . $id
            );
        }

        return $this->render(
            'admin/news/view-news.html.twig',
            array('news' => $news, 'comments' => $comments,'categories' => $categories)
        );
    }


}
