<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Cookie;

class OefeningController extends Controller
{
    /**
     * @Route("/ingave")
     */
    public function ingaveAction(Request $request)
    {
        $response = new Response("done");
        $response->headers->setCookie(
            new Cookie('name', $request->query->get("naam")));
        $response->send();
        return $this->redirectToRoute("done");

    }

    /**
     * @Route("/done", name="done")
     */
    public function doneAction()
    {
        return $this->render('AppBundle:Oefening:done.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/toon")
     */
    public function toonAction(Request $request)
    {
        return $this->render('AppBundle:Oefening:toon.html.twig', array(
            // ...
        ));
    }

}
