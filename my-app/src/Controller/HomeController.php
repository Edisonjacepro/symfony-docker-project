<?php

namespace App\Controller;

use App\Entity\Test;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $test = new Test();
        $test->setName('Exemple de Test');
        $test->setCreatedAt(new \DateTimeImmutable());

        $entityManager->persist($test);
        $entityManager->flush();

        return new Response('Donnée ajoutée avec succès !');
    }
}
