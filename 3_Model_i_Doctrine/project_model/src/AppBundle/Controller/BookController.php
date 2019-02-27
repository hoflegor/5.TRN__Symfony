<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Book;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/book", name="book")
 */
class BookController extends Controller
{

	/**
	*@Route("/")
	 */
	public function bookAction(){
		return $this->render('default/base.html.twig');
	}

	/**
	 * @Route("/newBook", name="newBook")
	 * @Template("AppBundle:Book:newBook.html.twig")
	 */
	public function newBookAction()
	{
		return;
	}

	/**
	*@Route("/createBook", name="createBook")
	*/
	public function createBookAction(Request $request){


		$title = $request->request->get('title');
		$descciption = $request->request->get('description');
		$rating = $request->request->get('rating');

		$book = new Book();
		$book->setTitle($title);
		$book->setDescription($descciption);
		$book->setRating($rating);

		$em = $this->getDoctrine()->getManager();
		$em->persist($book);
		$em->flush();

		$bookId=$book->getId();

		$url=$this->generateUrl('showBook', array('id' => $bookId));

		return $this->redirect($url);

	}

	/**
	 *@Route("/showBook/{id}", name="showBook")
	 */
	public function showBookAction($id)
	{

		$repo = $this->getDoctrine()->getRepository('AppBundle:Book');
		$book = $repo->find($id);
		$title= $book->getTitle();
		$description = $book->getDescription();
		$rating = $book->getRating();

		//TODO : edit form ---> TWIG
		return new Response(
		"
		<p>Tytuł: $title</p>
		<p>Opis: $description</p>
		<p>Ocena: $rating</p>
		"
		);
	}

	/**
	*@Route("/showAllBooks", name="showAllBooks")
	*/
	public function showAllBooksAction(){

		$repo =$this->getDoctrine()->getRepository('AppBundle:Book');
		$books=$repo->findAll();

		return $this->render('AppBundle:Book:showAllBooks.html.twig', array('allBooks'=>$books));

	}

}
