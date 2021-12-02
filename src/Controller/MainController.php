<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RredirectReponse;
use Symfony\Component\Routing\Annotation\Route;


#[Route('', name: 'main_')]
class MainController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    { return $this->render('main/index.html.twig');


    }   

     #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {return $this->render('main/contact.html.twig');
    }

    #[Route('/about', name: 'about')]
    public function a_propos(): Response
    {return new Response("A propos");
    }
}



        //redirection
        //return new RedirectReponse('https://google.com)');
        //return $this->redirect('https://google.com');

        //rediriger vers une route
        //return $this ->redirectToRoute('main_contact');

        // HTML/CSS
        // return $this->render('main/index.html.twig');

        //JSON
       // return new JsonResponse([
         //   'statut'=>true;
          //  'username'=>'Paul',
        //]);

        //JSON
        //return $this->json([
        //    'status'=>true,
        //    'username'=>'Paul',
        //]);
        //return $this->render('main/index.html.twig', [
         //   'controller_name' => 'MainController',
        //]);