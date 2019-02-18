<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\Request;

/**
* @Route("/user")
*/
class UserController extends Controller
{
    /**
     * @Route("/create")
     */
    public function createAction()
    {
        $user = new User();
        $form = $this->createFormBuilder($user)->add("nick")->setAction($this->generateUrl("app_user_new"))
        ->add("tweet", EntityType::class, array(
            'class'=>'AppBundle:Tweet',
            'choice_label'=>'name',
            'multiple' => true,
            'expanded' => true,
        ) )
        ->add("Utwórz", "submit")->getForm();

        return $this->render('AppBundle:User:create.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/showAll")
     */
    public function showAllAction()
    {
        return $this->render('AppBundle:User:show_all.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/new")
     */
    public function newAction(Request $request)
    {
        $user = new User();
        $form = $this->createFormBuilder($user)->add("nick")->setAction($this->generateUrl("app_user_new"))
        ->add("tweet", EntityType::class, array(
            'class'=>'AppBundle:Tweet',
            'choice_label'=>'name',
            'multiple' => true,
            'expanded' => true,
        ) )
        ->add("Utwórz", "submit")->getForm();

        $form->handleRequest($request);

                $user = $form->getData();    

                $selectedTweets = $user->getTweet();   
                                         
                $em = $this->getDoctrine()->getManager();

                foreach($selectedTweets as $key => $tweetEntity ){
                    $tweetEntity->setUser($user);
                    $em->persist($tweetEntity);
                }
               
                $em->persist($user);
                $em->flush();
       

        return $this->render('AppBundle:User:new.html.twig', array(
            // ...
        ));
    }

}
