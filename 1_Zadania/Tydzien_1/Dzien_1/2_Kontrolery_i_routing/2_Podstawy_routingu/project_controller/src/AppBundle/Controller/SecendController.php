<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SecendController extends Controller
{
    /**
     * @Route("/index/{id}")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:Secend:index.html.twig', array('id' => $id));
    }

}
