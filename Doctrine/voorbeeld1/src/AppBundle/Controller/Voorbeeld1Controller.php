<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class Voorbeeld1Controller extends Controller
{
    /**
     * @Route("/add")
     */
    public function addAction()
    {
        return $this->render('AppBundle:Voorbeeld1:add.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/find")
     */
    public function findAction()
    {
        return $this->render('AppBundle:Voorbeeld1:find.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/all")
     */
    public function allAction()
    {
        return $this->render('AppBundle:Voorbeeld1:all.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/remove")
     */
    public function removeAction()
    {
        return $this->render('AppBundle:Voorbeeld1:remove.html.twig', array(
            // ...
        ));
    }

}
