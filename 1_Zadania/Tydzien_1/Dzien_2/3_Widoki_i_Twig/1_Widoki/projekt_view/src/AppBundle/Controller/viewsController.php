<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class viewsController extends Controller
{

	/**
	 * @Route("/renderApp")
	 */
	public function renderAppAction()
	{

		$resp = $this->render('views/view_ex_a3.html.twig');

		return $resp;

	}

//
//	/**
//	 * @Route("/renderSrc")
//	 */
//	public function renderSrcAction()
//	{
//
//		$resp = $this->render('AppBundle:views:view_ex_a3.html.twig');
//
//		return $resp;
//
//	}


	/**
	 * @Route("/renderSrc")
	 * @Template("AppBundle:views:view_ex_a3.html.twig");
	 */
	public function renderSrcAction()
	{

		return [];

	}

	/**
	 * @Route("/render/{username}")
	 * @Template("AppBundle:views:view_ex_b1.html.twig")
	 */
	public function renderUsernameAction($username)
	{

		return ['username' => $username];

	}

	/**
	 * @Route("/repeatSentence/{n}/{sentc}", defaults={"sentc"=null})
	 * @Template("AppBundle:views:view_ex_b3.html.twig")
	 */
	public function repeatSentenceAction($n, $sentc){

		return ['n' => $n, 'sentc'=>$sentc];

	}




}
