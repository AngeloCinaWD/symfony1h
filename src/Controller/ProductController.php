<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProductController extends AbstractController
{
    #[Route('/product', name: 'product_index')]
    public function index(ProductRepository $productRepository): Response
    {
        $products = $productRepository->findAll();

//        dump($products);
//        dd($products[0]);

        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
}
