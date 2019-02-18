<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Tweet;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class TweetController extends Controller
{
    /**
     * @Route("/create")
     */
    public function createAction(Request $request)
    {
        $tweet = new Tweet();
        $form = $this->createFormBuilder($tweet)
        ->add("name", "text")->add("text","text")->getForm();

        //handleRequest
        $form->handleRequest($request);

        //save to db
        if($form->isSubmitted()){
            $tweet = $form->getData();
           
            $em = $this->getDoctrine()->getManager();
            $em->persist($tweet);
            $em->flush();  
            //return          
        }

         return $this->redirectToRoute("app_tweet_showall");

    }

    /**
     * @Route("/showAll")
     */
    public function showAllAction()
    {
        $allTweet = $this->getDoctrine()->getRepository("AppBundle:Tweet")->findAll();


        return $this->render('AppBundle:Tweet:show_all.html.twig', array(
            'allTweet' => $allTweet
        ));
    }

    /**
     * @Route("/new")
     */
    public function newAction()
    {
        $tweet = new Tweet();
        
        $form = $this->createFormBuilder($tweet)
        ->setAction( $this->generateUrl("app_tweet_create") )
        ->add("name", "text")->add("text","text")->add("Dodaj","submit")->getForm();

        return $this->render('AppBundle:Tweet:new.html.twig', array(
            "form" => $form->createView()
        ));
    }

    /**
    * @Route("/update/{id}")
    * @Template()
    */
    public function updateAction(Request $request, $id){
           
            $er = $this->getDoctrine()->getRepository("AppBundle:Tweet");
            $tweet = $er->find($id);
           
            $form = $this->createFormBuilder($tweet)
            ->add("name","text")->add("text","text")->add("Aktualizuj","submit")->getForm();

          if ($request->getMethod() == "POST"){

                $form->handleRequest($request);
                $tweet = $form->getData();
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($tweet);
                $em->flush();
                
                return $this->redirectToRoute("app_tweet_showall");
            }

        //przekazac do twiga
        return ['form' => $form->createView() ];
    
    }
}
