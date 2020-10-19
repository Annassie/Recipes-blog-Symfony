<?php

namespace App\Controller;

use App\Form\UserRegistrationType;
use App\Security\LoginFormAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    /**
     * @Route("/register", name="app_register")
     * @param Request $request
     * @return Response
     */
    public function register(Request $request, UserPasswordEncoderInterface $password_encoder, EntityManagerInterface $em,
                             GuardAuthenticatorHandler $authenticator_handler, LoginFormAuthenticator $login_form_authenticator): Response
    {
        // connecting to Type
        $register_form = $this->createForm(UserRegistrationType::class);

        // handle data from the form
        $register_form->handleRequest($request);

        if ($register_form->isSubmitted() && $register_form->isValid()){
            //TODO. User registration.

            // getting data
            $user = $register_form->getData();

            // encoding of password
            $password = $password_encoder->encodePassword($user, $user->plainPassword);

            $user->setPassword($password);

            $em->persist($user);
            $em->flush();

            // flash message
            $this->addFlash('success', 'A new user was registered successfully');


            ///user login after registration
            return $authenticator_handler
                ->authenticateUserAndHandleSuccess(
                    $user,
                    $request,
                    $login_form_authenticator,
                    'main'
                );
        }

        return $this->render('security/register.html.twig', [
            'register_form' => $register_form->createView()
        ]);
    }

}
