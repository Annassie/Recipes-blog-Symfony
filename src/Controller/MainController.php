<?php

namespace App\Controller;

//use http\Env\Response;
use App\Entity\Post;
use App\Entity\User;
use App\Form\AddPostType;
use App\Form\RegisterUserType;
use App\Form\RegisterForm;
use App\Form\RegisterFormType;
use App\Service\TestService;
use Doctrine\ORM\EntityManagerInterface;

//use Psr\Log\LoggerInterface;
use phpDocumentor\Reflection\Types\String_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class MainController extends AbstractController
{
    /**
     * @Route("/main", name="main")
     * @param Post $post
     * @param EntityManagerInterface $em
     * @return Response
     */
    public function index(EntityManagerInterface $em){
        $form = $this->createForm(FormType::class);

        // get all posts in DB
        $posts = $em->getRepository(Post::class)->findAll();

        return $this->render('main/index.html.twig', [
            'form' => $form->createView(),
            'controller_name' => 'MainController',
            'posts' => $posts
        ]);

    }

/*    /**
     * @Route("/main-posts", name="mainPosts")
     * @param User $email
     * @param EntityManagerInterface $em
     * @return Response
     */
   // public function allPosts(User $email, EntityManagerInterface $em)
   // {


   // }*/




}
