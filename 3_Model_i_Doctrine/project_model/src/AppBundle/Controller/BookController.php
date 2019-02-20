<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/book", name="book")
 */
class BookController extends Controller
{

	/**
	 * @Route("/newBook", name="newBook")
	 */
	public function newBookAction()
	{
		return new Response(
//TODO : edit form
			"
			<form action='createBook' method='post'>
			<legend><h2>Dodawanie książki:</h2></legend>
				<label>Autor
					<input type='text' name='author'>
				</label>
				<br><br>
				<label>Title:
					<input type='text' name='title'>
				</label>
				<br><br>			
				<input type='submit'>
			</form>
			"

		);
	}

	/**
	*@Route("/createBook", name="createBook")
	*/
	public function createBookAction(){
		return new Response('lalalalalala');
	}

}
