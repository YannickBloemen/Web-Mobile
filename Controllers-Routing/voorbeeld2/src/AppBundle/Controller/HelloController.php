<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
    public function HelloAction()
    {
        return $this->render('AppBundle:Hello:hello.html.twig', array());
    }

}
