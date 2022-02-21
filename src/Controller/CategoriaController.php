<?php

namespace App\Controller;

use App\Entity\Categoria;
use App\Entity\Productos;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class CategoriaController extends AbstractController
{

    private $categorias = [

        1 => ["id" => "1","categoria" => "Alitas "],

        2 => ["id" => "2","categoria" => "Tiras de Pollo"]

    ]; 

    /**
     * @Route("/categoria/insertar", name="insertar_categoria")
     */
    public function insetarCategoria(ManagerRegistry $doctrine) {

        $entityManager = $doctrine-> getManager();
        foreach ($this->categorias as $c){
            $categoria= new Categoria();
            
            $categoria -> setCategoria($c["categoria"]);
            $entityManager->persist($categoria);
        }

        try
         {
            $entityManager -> flush();
            return new Response("Categorias insertadas");

         }catch(\Exception $e){
             return new Response("Error insertando objetos");
         }

    }

    /**
     * @Route("/productos/{nombre}/{id}", name="categora")
     */
    public function categoria($id, ManagerRegistry $doctrine) {

        $repositorio = $doctrine->getRepository(Productos::class);

        $prods = $repositorio->findBy(["relcion" => $id]);

        return $this->render('productos.html.twig',[
            'productos'=> $prods
        ]);

    }
    
}
