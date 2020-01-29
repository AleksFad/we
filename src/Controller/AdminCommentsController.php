<?php

namespace App\Controller;

use App\Entity\Comments;
use App\Entity\News;
use App\News\CommentsForm;
use App\News\NewsForm;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminCommentsController extends AbstractController
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
     * Create a new comment
     * @Route("/admin/news/{id}/comments/create", name="comments_create")
     * @param News $news
     * @param Request $request
     * @param $id
     * @return RedirectResponse|Response
     */
    public function createComments(News $news, Request $request, $id)
    {
        $news = $this->getNews($id);
        $comments = new Comments();
        $comments->setNews($news);
        $form = $this->createForm(CommentsForm::class, $comments);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $this->entityManager->persist($data);
            $this->entityManager->flush();

            return $this->redirect('/admin/news/' . $id);
        }

        return $this->render(
            'admin/comments/create_comments.html.twig',
            array('comments' => $comments, 'form' => $form->createView())
        );
    }

    /**
     * Delete comment by id
     * @Route("/admin/news/{id}/comments/delete", name="comments_delete")
     * @param $id
     * @return RedirectResponse
     */
    public function deleteComments($id)
    {
        $this->entityManager = $this->getDoctrine()->getManager();
        $comments = $this->entityManager->getRepository('App\Entity\Comments')->find($id);

        if (!$comments) {
            throw $this->createNotFoundException(
                'No comment with such ID: ' . $id
            );
        }

        $this->entityManager->remove($comments);
        $this->entityManager->flush();

        return $this->redirectToRoute('all_news_view');
    }

    protected function getNews($news_id)
    {
        $em = $this->getDoctrine()
            ->getManager();

        $news = $em->getRepository('App\Entity\News')->find($news_id);

        if (!$news) {
            throw $this->createNotFoundException('Unable to find News.');
        }

        return $news;
    }

}
