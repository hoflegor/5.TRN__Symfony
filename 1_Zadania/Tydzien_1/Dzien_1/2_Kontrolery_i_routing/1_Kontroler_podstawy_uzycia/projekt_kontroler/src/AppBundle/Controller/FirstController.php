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

}
