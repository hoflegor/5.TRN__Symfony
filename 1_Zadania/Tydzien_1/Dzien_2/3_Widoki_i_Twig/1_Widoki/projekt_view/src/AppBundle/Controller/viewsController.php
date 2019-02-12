<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
//use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Article;

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
	public function repeatSentenceAction($n, $sentc)
	{

		return ['n' => $n, 'sentc' => $sentc];

	}

	/**
	 * @Route("/createRandoms/{start}/{end}/{n}")
	 * @Template("AppBundle:views:view_ex_b4.html.twig")
	 */
	public function createRandomsAction($start, $end, $n)
	{

		$randArr = [];

		while (count($randArr) != $n)
		{
			array_push($randArr, rand($start, $end));
		}

		return ['arr' => $randArr, 'n' => $n];

	}


	/**
	 * @Route("/showAllArticles", name="allArticles")
	 */
	public function showAllArticlesAction()
	{
		$allArticles = Article::GetAllArticles();

		return $this->render('AppBundle:views:showAllArticles.html.twig', array('allArticles' => $allArticles));
	}

	/**
	 * @Route("/showArticle/{id}", name="showArticle")
	 * @Template("AppBundle:views:showArticle.html.twig")
	 */
	public function showArticleAction($id)
	{
		$article = Article::GetArticleById($id);

		return  array("article" => $article);
	}


}
