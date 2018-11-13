<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('page/home.html.twig');
    }

    /**
    * @Route("/fiestas", name="fiestas")
    */
    public function fiestas()
    {
        return $this->render('page/fiestas.html.twig');
    }

    /**
    * @Route("/conciertos", name="conciertos")
    */
    public function conciertos()
    {
        return $this->render('page/conciertos.html.twig');
    }

    /**
    * @Route("/contacto", name="contacto")
    */
    public function contacto()
    {
        return $this->render('page/contacto.html.twig');
    }
}
