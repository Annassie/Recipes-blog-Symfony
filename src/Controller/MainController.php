<?php

namespace App\Controller;

//use http\Env\Response;
use App\Entity\Post;
use App\Entity\User;
use App\Form\AddPostType;
use App\Form\AddUserType;
use App\Form\RegisterForm;
use App\Form\RegisterFormType;
use App\Service\TestService;
use Doctrine\ORM\EntityManagerInterface;

//use Psr\Log\LoggerInterface;
use phpDocumentor\Reflection\Types\String_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class MainController extends AbstractController
{


    /**
     * @Route("/add-post", name="addPost")
     * @return Response
     */
    public function addPost(Request $request, EntityManagerInterface $em)
    {
        // creating $form object
        $form = $this->createForm(AddPostType::class);

        //method to get data from form
        $form->handleRequest($request);

        //send data, if form was submitted and check if form is valid
        if ($form->isSubmitted() && $form->isValid()) {
            $post = $form->getData();

            // add to DB
            $em->persist($post);
            $em->flush();

            // flash message
            $this->addFlash('success', 'Your post was added successfully');

            // when the post is added, then redirect to main-page
            return $this->redirectToRoute('add-post');

        }
    }

}
