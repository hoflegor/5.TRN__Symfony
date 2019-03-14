<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
Use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
Use AppBundle\Entity\Book;

class BookController extends Controller
{
    /**
     * @Route("/newBook",name="newBook")
     * @Template("AppBundle:Book:newBook.html.twig")
     *
     */
    public function newBookAction()
    {
        return array();
    }

    /**
     * @Route("/createBook",name="createBook")
     */
    public function createBookAction(Request $request)
    {


        $title = $request->request->get('bookTitle');
        $desc = $request->request->get('bookDescription');
        $rating = $request->request->get('bookRating');

        $newBook = new Book();

        $newBook->setTitle($title);
        $newBook->setDescription($desc);
        $newBook->setRating($rating);

        $em = $this->getDoctrine()->getManager();

        $em->persist($newBook);
        $em->flush();

        $id = $newBook->getId();

//        TODO : http://127.0.0.1:8000/createBook / Some mandatory parameters are missing ("id") to generate a URL for route "showBook"
        $url = $this->generateUrl('showBook');

        return new Response()

        return $this->redirect($url, array(array('created'=>1), array ('id'=> $id)));

    }


    /**
     * @Route(
     *     "/showBook/{created}/{id}", name="showBook",
     *     requirements={"id"="\d+"},
     *     defaults={"created"=0}
     *     )
     * @Template("AppBundle:Book:showBook.html.twig")
     */
    public function showBookAction($created, $id)
    {

        $repo = $this->getDoctrine()->getRepository('AppBundle:Book');
        $book = $repo->find($id);

        $title = $book->getTitle();
        $desc = $book->getDescription();
        $rating = $book->getRating();

        return array('created' => $created, 'title' => $title, 'desc' => $desc, 'rating' => $rating);

    }

}