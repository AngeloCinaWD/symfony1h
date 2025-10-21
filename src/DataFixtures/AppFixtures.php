<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product = new Product();
        $product->setName("Product one")->setDescription('This is the first product')->setSize(100);
        $manager->persist($product);

        $product2 = new Product();
        $product2->setName("Product two")->setDescription('This is the second product')->setSize(200);
        $manager->persist($product2);

        $manager->flush();
    }
}
