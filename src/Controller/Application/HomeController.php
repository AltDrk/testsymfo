<?php


namespace App\Controller\Application;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    public function index(){

        return new Response(
            $this->renderView('Application/home.html.twig', [
                'test' => 'Home'
            ]));
    }
}