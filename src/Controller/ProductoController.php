<?php

namespace App\Controller;
use App\Entity\Productos;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class ProductoController extends AbstractController
{

    private $productos = [

        1 => ["id" => "1", "nombre" => "Alitas KFC", "precio" => "10", "foto" => "pollo1.jpg", "carrusel" => "pollo1.jpg"],

        2 => ["id" => "2", "nombre" => "Alitas Popeyes", "precio" => "7", "foto" => "pollo2.jpg", "carrusel" => "pollo2.jpg"],

        3 => ["id" => "3", "nombre" => "Alitas Pollo Feliz", "precio" => "5", "foto" => "pollo3.jpg", "carrusel" => "pollo3.jpg"],

        4 => ["id" => "4", "nombre" => "Tiras de pollo KFC", "precio" => "8", "foto" => "pollo1.jpg", "carrusel" => "pollo4.jpg"],

        5 => ["id" => "5", "nombre" => "Tiras de pollo Popeyes", "precio" => "7", "foto" => "pollo2.jpg", "carrusel" => "pollo5.jpg"],

        6 => ["id" => "6", "nombre" => "Tiras de pollo Pollo Feliz", "precio" => "7", "foto" => "pollo3.jpg", "carrusel" => "pollo6.jpg"]
    
    ];  
      
    /**
     * @Route("/producto/insertar", name="insertar_contacto")
     */
    public function insetarProducto(ManagerRegistry $doctrine) {

        $entityManager = $doctrine-> getManager();
        foreach ($this->productos as $p){
            $producto= new Productos();
            
            $producto -> setId($p["id"]);
            $producto -> setNombre($p["nombre"]);
            $producto -> setPrecio($p["precio"]);
            $producto -> setFoto($p["foto"]);
            $entityManager->persist($producto);
        }

        try
         {
            $entityManager -> flush();
            return new Response("Contactos insertados");

         }catch(\Exception $e){
             return new Response("Error insertando objetos");
         }

    }

    /**
     * @Route("/productos", name="mostrar_products")
     */
    public function productos(ManagerRegistry $doctrine) {

        $repositorio = $doctrine->getRepository(Productos::class);

        $prods = $repositorio->findAll();
        

        return $this->render('productos.html.twig',[
            'productos'=> $prods
        ]);

    }

}
