<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\Article;


class ViewController extends Controller
{
    /**
    * @Route("/render")
    * @Template("AppBundle:View:view_ex_a3.html.twig")
    */
    public function renderAction(){

        return $this->render();

    }

    /**
    * @Route("/render/{username}")
    * @Template()
    */

    public function renderUserNameAction($username){
        return $this->render("AppBundle:View:view_ex_b1.html.twig", array('username' => $username));
    }

    /**
    *@Route("/repeatSentence/{n}")
    */
    public function repeateSentenceAction($n){

        return $this->render("AppBundle:View:view_ex_b3.html.twig", array("n"=>$n, "sentence" => "syfony nie jest fajne"));
    }

    /**
    * @Route("createRandoms/{start}/{end}/{n}")
    * @Template("AppBundle:View:create.html.twig")
    */
    public function createRandomsAction($start, $end, $n){
        $tabRandom = [];

        for ($i =0; $i < $n; $i++){
            $tabRandom[] = rand($start, $end);
        }
        return ["randoms" => $tabRandom];
    }

    /**
    * @Route("/showArticle/{id}")
    * @Template()
    */

    public function showArticleAction($id){

        $article = Article::GetArticlebyId($id);

        return ['article' => $article];
    }


    /**
    * @Route("/showAllArticles/")
    * @Template("AppBundle:View:showAllArticles.html.twig")
    */
    
    public function showAllArticlesAction(){
        $allArticles = Article::GetAllArticles();

         return $this->render("AppBundle:View:showAllArticles.html.twig", array("sentence"=>$allArticles));
   
    }
}
