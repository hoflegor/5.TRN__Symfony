<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\Book;
use AppBundle\Entity\Author;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }

    /**
    * @Route("getAllBook/{id}")
    * @Template("AppBundle:Default:getAllBook.html.twig")
    */  
    public function getAllBookAction($id){
        $reposotoryBook = $this->getDoctrine()->getRepository("AppBundle:Book");
        $allBook = $reposotoryBook->findAll();

        $bookGreatherThenId = $reposotoryBook->getAllBookOfIdGretenThen($id);

        return ['allBook' => $allBook, 'bookGreatherThen' => $bookGreatherThenId ];
    }

    /**
    * @Route("newBook")
    * @Template()
    */
    public function newBookAction(Request $req){
         $reposotoryBook = $this->getDoctrine()->getRepository("AppBundle:Book");
         $reposotoryAuthor = $this->getDoctrine()->getRepository("AppBundle:Author");
         
         $authors = $reposotoryAuthor->findAll();
       
        $book = new Book();
        
        $form =$this->createFormBuilder($book)->add("title")->add("description")->add("rating")
            ->add("author", EntityType::class, array(
                "class" => "AppBundle:Author",
                "choice_label" => "surname"
            ))->add("Dodaj","submit")->getForm();
         

         return ["authors" =>$authors, "form" => $form->createView()];
    }

    /**
    *   @Route("createBook")
    *   @Template()
    */
    public function createBookAction(Request $req){
            $reposotoryAuthor = $this->getDoctrine()->getRepository("AppBundle:Author");
         

             $newBook = new Book();
             $newBook->setTitle($req->request->get("title"));
             $newBook->setDescription($req->request->get("description"));
             $newBook->setRating($req->request->get("rating"));

             $author = $reposotoryAuthor->find($req->request->get("author"));
             $newBook->setAuthor($author);

             $em = $this->getDoctrine()->getManager();

             $em->persist($newBook);
             $em->flush();

             return $this->redirect($this->generateUrl("app_default_getallbook"));       

    }

    /**
    * @Route("deleteBook/{id}")
    */
    public function deleteBookAction($id){
        $reposotoryBook = $this->getDoctrine()->getRepository("AppBundle:Book");
        $bookToDelete = $reposotoryBook->find($id);
        $em = $this->getDoctrine()->getManager();

        if($bookToDelete){
            $em->remove($bookToDelete);
            $em->flush();
             return new Response ("Usunięto książkę o id = $id");
        }
        

        return new Response ("Nie znaleziono książki");
    }

    /**
    * @Route("form")
    * @Template()
    */
    public function formAction(Request $request){
        $book = new Book();
        $form = $this->createFormBuilder($book)            
            ->add("title", "text")
            ->add("description", "text")
            ->add("rating")
            ->add("send", "submit")
            ->getForm();

        $form->handleRequest($request);
        
        if($form->isSubmitted() == true){
            $book = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($book);
            $em->flush();
        }

        return ['form'=> $form->createView()];
    }

}
