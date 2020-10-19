<?php

namespace App\Controller;

//use http\Env\Response;
use App\Form\AddPostType;
use App\Service\LoggedUser;

use Doctrine\ORM\EntityManagerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class AddPostController extends AbstractController
{
    /**
     * @Route("/add-post", name="addPost")
     * @param Request $request
     * @param EntityManagerInterface $em
     * @param LoggedUser $service
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

            // get user
           // $service->loggedUser();
     //       $user = $this->getUser();
   //         $user->getUsername();
            // add to DB
            $em->persist($post);

            $em->flush();

            // flash message
            $this->addFlash('success', 'Your post was added successfully');

            // when the post is added, then redirect to main-page
            return $this->redirectToRoute('main');

        }

        return $this->render('post.html.twig', [
            'form' => $form->createView()
        ]);
    }

}
