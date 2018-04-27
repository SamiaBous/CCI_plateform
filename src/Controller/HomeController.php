<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Flex\Response;


class HomeController extends Controller
{
    /**
     * @Route("/home", name="home")
     */
    public function home()
    {
        /*return new Response("home");*/
        return $this->render('accueil.html.twig');
    }

}

?>