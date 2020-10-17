<?php

namespace App\Controller;

//use http\Env\Response;
use App\Form\AddUserType;
use Doctrine\ORM\EntityManagerInterface;

//use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class UserController extends AbstractController
{

    /**
     * @Route("/add-user", name="addUser")
     * @return Response
     */
/*    public function addUser(Request $request, EntityManagerInterface $em)
    {
        // creating $form object
        $form = $this->createForm(AddUserType::class);

        //method to get data from form
        $form->handleRequest($request);

        //send data, if form was submitted and check if form is valid
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();

            // add to DB
            $em->persist($user);
            $em->flush();

            // flash message
            $this->addFlash('success', 'A new user was added successfully');

            // when the post is added, then redirect to main-page
            return $this->redirectToRoute('add-user');
        }


        return $this->render('user.html.twig', [
            'form' => $form->createView()
        ]);
    }*/


}



