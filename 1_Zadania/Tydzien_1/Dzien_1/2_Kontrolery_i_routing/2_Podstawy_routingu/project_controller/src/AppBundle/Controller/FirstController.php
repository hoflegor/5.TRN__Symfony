<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class FirstController extends Controller
{
    /**
    * @Route("form")
    * @Method("GET")
    */

    public function formViewsssAction(){
          
       return $this->redirect($this->generateUrl("app_first_formviewsss"));

       // return $this->render("AppBundle:First:form.html.twig");
    }

    /**
    * @Route("form")
    * @Method("POST")
    */
    public function formWritesssAction(Request $request){
        $post = $request->request->get("text_field");
       return new Response("Zawartość pola text_field $post");
    }

    
}
