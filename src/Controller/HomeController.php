<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="welcome")
     */
    public function home(){
        return $this->render( 'main/home.html.twig' );
    }
} 