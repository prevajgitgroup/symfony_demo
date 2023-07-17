<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NavItemController extends AbstractController
{
    /**
     * @Route("/nav/item", name="app_nav_item")
     */
    public function index(): Response
    {
        return $this->render('nav_item/index.html.twig', [
            'controller_name' => 'NavItemController',
        ]);
    }
}
