<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
    public function contacto(Request $request)
    {
        // 1) Build the form
        // $contact = new Contact();
        // $form = $this->createForm(ContactType::class, $contact);

        // 2) Handle the submit (will only happen on POST)
        // $form->handleRequest($request);

        // if ($form->isSubmitted && $form->isValid()) {
        //     return $this->render('page/fiestas.html.twig');
        // }

        // return $this->render(
        //     'page/contacto.html.twig',
        //     array('form' => $form->createView())
        // );

        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        return $this->render('page/contacto.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
