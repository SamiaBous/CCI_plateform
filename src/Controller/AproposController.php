<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Flex\Response;


class AproposController extends Controller
{
    /**
     * @Route("/apropos", name="Apropos")
     */
    public function Apropos()
    {
        /*return new Response("Apropos");*/
        return $this->render('apropos.html.twig');
    }

}

?>