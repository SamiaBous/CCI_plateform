<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Flex\Response;


class ContactController extends Controller
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        /*return new Response("contact");*/
        return $this->render('contact.html.twig');
    }

}

?>