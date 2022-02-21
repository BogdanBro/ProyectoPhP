<?php

namespace App\Controller;

use App\Entity\Productos;
use App\Repository\ProductosRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/", name="page")
     */
    public function index(ManagerRegistry $doctrine): Response
    {

        $repositorio= $doctrine->getRepository(Productos::class);
        


        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }


       
}
