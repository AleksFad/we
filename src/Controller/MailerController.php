<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class MailerController extends AbstractController
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;
    /**
     * @var MailerInterface
     */
    private $mailer;

    public function __construct(MailerInterface $mailer, EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
        $this->mailer=$mailer;
    }
    /**
     * @Route("/mailer", name="mailer")
     */
    public function index()
    {
        return $this->render('mailer/index.html.twig', [
            'controller_name' => 'MailerController',
        ]);
    }

    /**
     * @Route("/email")
     * @param MailerInterface $mailer
     * @throws TransportExceptionInterface
     */
    public function sendEmail(MailerInterface $mailer)
    {
        $email = (new Email())
            ->from('we@we.ee')
            ->to('aleksander.fadejev@gmail.com')
            ->subject('Statistics')
            ->text('Top 10 statistics')
            ->html('<p>test!</p>');

         $this->mailer->send($email);

    }
}

