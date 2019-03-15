<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Author;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
Use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class AuthorController extends Controller
{

    /**
     * @Route("/saveNewAuthor", name="addNewAuthor")
     */

    public function addNewAuthorAction(Request $request)
    {

        $name = $request->request->get('fullName');
        $desc = $request->request->get('authorDescription');

        $newAuthor = new Author();

        $newAuthor->setFullName($name);
        $newAuthor->setDescription($desc);

        $em = $this->getDoctrine()->getManager();

        $em->persist($newAuthor);
        $em->flush();

//        $url = $this->generateUrl($url = $this->generateUrl('showBook', array('created' => 1, 'id' => $id));

        return new Response("Dodano nowego autora, możesz sprawdzić aktualną <a href='/showAllAuthors'>listę</a> ");

    }

    /**
     * @Route("/createAuthor", name="createAuthor")
     */
    public function createAuthorAction()
    {
        return $this->render(
            'AppBundle:Author:create_author.html.twig',
            array()
        );
    }

    /**
     * @Route("/showAuthor")
     */
    public function showAuthorAction()
    {
        return $this->render(
            'AppBundle:Author:show_author.html.twig',
            array(// ...
            )
        );
    }

    /**
     * @Route("/showAllAuthors", name="showAllAuthors")
     * @Template("AppBundle:Author:show_all_authors.html.twig")
     */
    public function showAllAuthorsAction()
    {

        $repo = $this->getDoctrine()->getRepository('AppBundle:Author');

        $authors = $repo->findAll();

//        return new Response(var_dump($authors));

        return['authors'=>$authors];

    }

}
