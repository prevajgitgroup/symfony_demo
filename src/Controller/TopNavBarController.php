<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TopNavBarController extends AbstractController
{
    /**
     * @Route("/top/nav/bar", name="app_top_nav_bar")
     */
    public function index(): Response
    {
        return $this->render('top_nav_bar/index.html.twig', [
            'controller_name' => 'TopNavBarController',
        ]);
    }
}
