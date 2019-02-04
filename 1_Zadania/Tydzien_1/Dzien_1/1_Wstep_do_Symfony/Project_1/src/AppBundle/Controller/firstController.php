<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class firstController extends Controller
{
    /**
    * @Route("/hello/world/{id}/{name}", name="helloWorld")
    * @Method("GET")
    */
    public function helloWordGetAction( $id)
    {
        return new Response("<h2>Hello WORD GET</h2>$id ");
    }

    /**
    * @Route("/hello/world/{id}/{name}", name="helloWorldPost")
    * @Method("POST")
    */
    public function helloWordPostAction($id)
    {
        return new Response("<h2>Hello WORD</h2>$id ");
    }

    /**
    * @Route("goodbye/{username}")
    */
    public function userNameGoodBayAction($username){
        return new Response("Goodbay $username");
    }

    /**
    * @Route("welcome/{name}/{surname}" , defaults={"name"="Twoje", "surname"="Nazwisko"})
    */
    public function welcomeAction($name, $surname){
        return new Response("Welcome $name $surname");
    }

    /**
    * @Route("showPost/{id}", requirements={"id" = "\d+" })
    */
    public function showPostAction($id){
        return new Response("Show Post $id");
    }

}
