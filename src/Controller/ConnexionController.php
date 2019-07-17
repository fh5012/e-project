<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
class ConnexionController extends AbstractController
{
    /**
     * @Route("/login", name="main_home")
     */
    public function home(){
        return $this->render( 'main/login.html.twig' );
    }
} 