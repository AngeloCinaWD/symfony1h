<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProductController extends AbstractController
{
//    #[Route('/product', name: 'app_product')]
    #[Route('/product', name: 'product_index')]
    public function index(): Response
    {
//        secondo parametro del metodo render() è un array associativo con indici i nomi delle proprietà che passiamo al template
//        le proprietà nel template vengono richiamate per nome in {{ nome_proprietà }}
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
}
