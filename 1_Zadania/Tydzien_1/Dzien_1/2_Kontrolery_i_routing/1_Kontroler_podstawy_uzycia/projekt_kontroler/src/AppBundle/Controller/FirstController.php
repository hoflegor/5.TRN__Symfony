<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;


/**
 * @Route("/first")
 */
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
	public function formGetAction()
	{

		return $this->render("AppBundle:First:form.html.twig");

	}

	/**
	 * @Route("/form")
	 * @Method("POST")
	 */
	public function formPostAction(Request $request)
	{

		$post = $request->request->get('text_field');

		return new Response("<h2>Zawartość pola formularza:<br><ins>$post</ins></h2>");


	}

	/**
	 * @Route("/setSession/{val}")
	 */
	public function setSessionAction(Request $request, $val)
	{

		$session = $request->getSession();
		$session->set('usertext', $val);

		return new Response("<h1>Sesja Ustawiona</h1><hr>");
	}

	/**
	 * @Route("/getSession")
	 */

	public function getSessionAction(Request $request)
	{

		$session  = $request->getSession();
		$userText = $session->get('usertext');

		if ($userText)
		{
			return new Response("<h2>Wartość sesji pod kluczem 'usertext' to: <ins>$userText</ins></h2>");
		}
		return new Response("<h2>Wartość sesji pod kluczem 'usertext' nie istnieje</h2>");
	}

	/**
	 * @Route("/clearSession")
	 */

	public function clearSessionAction(Request $request)
	{

		$session = $request->getSession();
		$session->clear();

		return new Response("<h1>Sesja wyczyszczona</h1>");

	}


}
