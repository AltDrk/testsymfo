<?php


namespace App\Controller\Application;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class MenuController extends AbstractController
{
    public function index(){

        dump($_GET);

        return new Response(
            $this->renderView('Application/menu.html.twig', [
                'test' => 'Menu'
            ]));
    }
}