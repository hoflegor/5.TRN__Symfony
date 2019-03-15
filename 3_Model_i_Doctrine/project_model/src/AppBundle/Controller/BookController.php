<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;
Use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
Use AppBundle\Entity\Book;
use AppBundle\Entity\Author;

class BookController extends Controller
{
    /**
     * @Route("/newBook",name="newBook")
     * @Template("AppBundle:Book:newBook.html.twig")
     *
     */
    public function newBookAction()
    {

        $repo = $this->getDoctrine()->getRepository('AppBundle:Author');

        $authors = $repo->findAll();

        return array('authors' => $authors);
    }

    /**
     * @Route("/createBook",name="createBook")
     */
    public function createBookAction(Request $request)
    {


        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $title = $request->request->get('bookTitle');
            $desc = $request->request->get('bookDescription');
            $rating = $request->request->get('bookRating');
            $authorId = $request->request->get('authorId');


            $repoAuthor = $this->getDoctrine()->getRepository('AppBundle:Author');

            $newBook = new Book();

            $newBook->setTitle($title);
            $newBook->setDescription($desc);
            $newBook->setRating($rating);

            $author = $repoAuthor->find($authorId);
            $newBook->setAuthor($author);

            $em = $this->getDoctrine()->getManager();

            $em->persist($newBook);
            $em->flush();

            $id = $newBook->getId();

            $url = $this->generateUrl('showBook', array('created' => 1, 'id' => $id));

            return $this->redirect($url);
        }


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

        return array('created'=>0,'book'=>$book);

    }

    /**
     * @Route("/showAllBooks", name="showAllBooks")
     * @Template("AppBundle:Book:showAllBooks.html.twig")
     */
    public function showAllBooksAction()
    {
        $repo = $this->getDoctrine()->getRepository('AppBundle:Book');

        $books = $repo->findAll();

        return ['books' => $books];
    }

    /**
     * @Route("/deleteBook/{id}", name="deleteBook")
     * @Template("AppBundle:Book:deleteBook.html.twig")
     *
     */
    public function deleteBookAction($id)
    {

        $em = $this->getDoctrine()->getManager();

        $book = $em->getRepository('AppBundle:Book')->find($id);

        $em->remove($book);
        $em->flush();

        return array('id' => $id);
    }

}