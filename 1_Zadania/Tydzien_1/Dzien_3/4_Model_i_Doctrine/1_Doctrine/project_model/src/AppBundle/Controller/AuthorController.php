<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AuthorController extends Controller
{
    /**
     * @Route("/showAuthor")
     */
    public function showAuthorAction()
    {
        return $this->render('AppBundle:Author:show_athor.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/showAllAuthor")
     */
    public function showAllAuthorAction()
    {
        $reposotoryAuthor = $this->getDoctrine()->getRepository("AppBundle:Author");
       
        $author = $reposotoryAuthor->getAllAuthorsByName();
        

        return $this->render('AppBundle:Author:show_all_actor.html.twig', array(
            'author' => $author
        ));
    }

    /**
     * @Route("/addAuthor")
     */
    public function addAuthorAction()
    {
        return $this->render('AppBundle:Author:add_author.html.twig', array(
            // ...
        ));
    }

}
