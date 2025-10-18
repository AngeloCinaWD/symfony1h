<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/')]
    public function index(): Response
    {
//        echo "Hello from a controller!!";

        // la path qui inserita è relativa alla cartella templates
        $contents = $this->renderView('home/index.html.twig');

//        return new Response("Hello from a controller!!");
        return new Response($contents);
    }
}
