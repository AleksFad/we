<?php

namespace App\Controller;

use App\Entity\News;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PublicController extends AbstractController
{
    /**
     * news per page
     */
    const NEWS_PER_PAGE = 10;

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
     * @Route("/", name="home")
     */
    public function index()
    {
        /**
         * findAll uses custom function in news entity , as result it gets 3 last news
         * Expected result:
         * SELECT * FROM (SELECT * FROM news ORDER BY date DESC LIMIT 3) as news
         * INNER JOIN category on news.categories_id = category.id
         */
        $news = $this->entityManager->getRepository('App\Entity\News')->findAll();

        $categories = $this->entityManager->getRepository('App\Entity\Category')->findAll();



//        $query = $this->entityManager->createQuery(
//            'SELECT * FROM
//            (SELECT * FROM App\Entity\News ORDER BY date DESC LIMIT 3) n
//            INNER JOIN category c on n.categories_id = c.category_id'
//        );

//        $DM = $this->getDoctrine()->getManager();
//        $DM->createQueryBuilder('ar')
//            ->select('n')
//            ->from('App\Entity\News','n')
//            ->innerJoin('n.categories_id', 'c.category_id')
//            ->orderBy('n.date', 'DESC');

        // returns an array of Product objects
        //return $query->getResult();



        return $this->render('public/index.html.twig', [
            'controller_name' => 'PublicController', 'news' => $news, 'categories' => $categories
        ]);
    }


    /**
     * @Route("/{category}", name="category")
     * @param Request $request
     * @return Response
     */
    public function categoryView(Request $request)
    {
        $category = $request->attributes->get('_route');
        $pagination = new Pagination();

        $news = $this->getDoctrine()->getRepository('App\Entity\News')
            ->createQueryBuilder('n')->where('n.categories = :category')->setParameter('category',$category);

        $result = $pagination->paginate($news, 1, self::NEWS_PER_PAGE);

        return $this->render('public/category.html.twig', [
            'controller_name' => 'PublicController', 'news' => $news
        ]);
    }



}
