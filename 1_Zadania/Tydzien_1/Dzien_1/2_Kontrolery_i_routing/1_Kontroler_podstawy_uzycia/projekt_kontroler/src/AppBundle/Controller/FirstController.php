<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

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
	 * @Route("/showPost/{id}", requirements={"id"="\d+"})
	 */
	public function showPostAction($id)
	{

		return new Response(

			"<html><body><p>Showing post $id</p></body></html>"

		);

	}

	/**
	 * @Route("/form")
	 * @Method("GET")
	 */
	public function formGet()
	{

		return $this->render("AppBundle:First:form.html.twig");

	}

	/**
	 * @Route("/form")
	 * @Method("POST")
	 */
	public function formWritesssAction()
	{

		return new Response("Formularz przyjęty");
	}

}
