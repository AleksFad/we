<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Comments;
use App\Entity\News;
use App\News\CategoryForm;
use App\News\CommentsForm;
use App\News\NewsForm;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminCategoryController extends AbstractController
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
     * @Route("/admin/category/create", name="category_create")
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function createCategory(Request $request)
    {
        $category = new Category();
        $form = $this->createForm(CategoryForm::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $this->entityManager->persist($data);
            $this->entityManager->flush();

            return $this->redirect('/admin/category/' . $data->getId());
        }

        return $this->render('admin/category/create_category.html.twig', array(
            'form' => $form->createView())
        );
    }

    /**
     * Show all category
     * @Route("/admin/category/", name="all_category_view")
     * @return Response
     */
    public function showAllCategory()
    {
        $category = $this->getDoctrine()
            ->getRepository('App\Entity\Category')
            ->findAll();

        return $this->render(
            'admin/category/show_all_category.html.twig',
            array('category' => $category)
        );
    }

    /**
     * Delete category by id
     * @Route("/admin/category/delete/{id}", name="delete_category")
     * @param $id
     * @return RedirectResponse
     */
    public function deleteCategory($id)
    {
        $this->entityManager = $this->getDoctrine()->getManager();
        $category = $this->entityManager->getRepository('App\Entity\Category')->find($id);

        if (!$category) {
            throw $this->createNotFoundException(
                'No category with such ID: ' . $id
            );
        }

        $this->entityManager->remove($category);
        $this->entityManager->flush();

        return $this->redirectToRoute('all_category_view');
    }

    /**
     * Update category by ID
     * @Route("/admin/category/update/{id}", name="update_category")
     * @param Request $request
     * @param $id
     * @return RedirectResponse|Response
     */
    public function updateCategory(Request $request, $id)
    {
        $this->entityManager = $this->getDoctrine()->getManager();
        $category = $this->entityManager->getRepository('App\Entity\Category')->find($id);

        if (!$category) {
            throw $this->createNotFoundException(
                'No news with such ID: ' . $id
            );
        }

        $form = $this->createForm(CategoryForm::class, $category);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $data = $form->getData();
            $this->entityManager->flush();
            return $this->redirect('/admin/category/' . $id);
        }

        return $this->render(
            'admin/category/edit_category.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
     * View category by id
     * @Route("/admin/category/{id}", name="category_view")
     * @param $id
     * @return RedirectResponse|Response
     */
    public function viewCategory($id)
    {
        $category = $this->getDoctrine()
            ->getRepository('App\Entity\Category')
            ->find($id);

        if (!$category) {
            throw $this->createNotFoundException(
                'No category with such ID: ' . $id
            );
        }

        return $this->render(
            'admin/category/view_category.html.twig',
            array('category' => $category)
        );
    }

    protected function getCategory($category_id)
    {
        $em = $this->getDoctrine()
            ->getManager();

        $category = $em->getRepository('App\Entity\Category')->find($category_id);

        if (!$category) {
            throw $this->createNotFoundException('Unable to find Categories.');
        }

        return $category;
    }

    /**
     * Add a category to news
     * @Route("/admin/news/{id}/category/create", name="category_to_news")
     * @param News $news
     * @param Request $request
     * @param $id
     * @return RedirectResponse|Response
     */
    public function addCategory(News $news, Request $request, $id)
    {
        //$news = $this->getNews($id);
        $category = new Category();
        $category->addNews($news);

        $form = $this->createForm(CategoryForm::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $this->entityManager->persist($data);
            $this->entityManager->flush();

            return $this->redirect('/admin/news/' . $id);
        }

        return $this->render(
            'admin/category/create_category.html.twig',
            array('categories' => $category, 'form' => $form->createView())
        );
    }
}
