<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class FirstController extends Controller

{


	/**
	 * @Route("/helloWorld")
	 */
	public function helloWorldAction()
	{
		return new Response(
			'<html><body><h1>AVE Świecie!</h1></body></html>'
		);
	}

	/**
	 * @Route("/goodbye/{username}")
	 */
	public function goodbyeAction($username)
	{

		return new Response(
			"<html><body><h2>Narka $username</h2></body></html>"
		);

	}

	/**
	 * @Route("/welcome/{name}/{surname}", defaults={"name"="Tajemniczy", "surname"="Wędrowcze"})
	 */
	public function welcomeAction($name, $surname)
	{

		return new Response(

			"<html><body><h2>Witojci $name $surname !!</h2></body></html>"

		);

	}

	/**
	*@Route("/showPost/{id}", requirements={"id"="\d+"})
	*/
	public function showPostAction($id){

		return new Response(

			"<html><body><p>Showing post $id</p></body></html>"

		);

	}

}
