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


        return $this->render('post.html.twig', [
            'form' => $form->createView()
        ]);
    }


    /**
     * @Route("/show-user/{id}", name="addUser")
     * @param $id
     * @param \App\Controller\EntityManagerInterface $em
     */
    public function showUser(User $user)
    {
        /*        $repoUser = $em->getRepository(User::class);

                $user = $repoUser->findOneBy(['id'=>$id]);*/
        /*
                if (!$user) {
                    throw $this->createNotFoundException(sprintf('Page not found with id="%s"', $id));
                }
                    dd($user);*/
        return $this->render('main/index.html.twig', [
            'user' => $user
        ]);

    }

    /**
     * @Route("/edit-user/{id}", name="editUser")
     */
    public function editUser(User $user, EntityManagerInterface $em)
    {
        $user->setUsername('Ansku_white');

        $em->flush();

        return new Response('<html><body>User is edit</body></html>');

    }

    /**
     * @Route("/delete-user/{id}", name="deleteUser")
     */
    public function deleteUser(User $user, EntityManagerInterface $em)
    {
        $em->remove($user);

        $em->flush();

        return new Response('<html><body>User is deleted</body></html>');

    }

    /**
     * @Route("/index-user", name="indexUser")
     * @param \App\Controller\EntityManagerInterface $em
     */
    public function indexUser(EntityManagerInterface $em)
    {
        $users = $em->getRepository(User::class)->findBy([]);


        dd($users);
        /*        return $this->render('user.html.twig', [
                    'user' => $users
                ]);*/

    }

    /**
     * @Route("/add-post", name="addPost")
     * @param \App\Controller\EntityManagerInterface $em
     * @return \App\Controller\Response
     */
    /*    public function addPost(EntityManagerInterface $em)
        {
            $user = $em->getRepository(User::class)->findOneby(['id' => 1]);

            // create a new post
            $post = new Post();

            // define title and content of post
            $post->setTitle('Brownie cake');
            $post->setContent('Sugar, Chocolate, Flower');
            $post->setUser($user);

            // add to DB
            $em->persist($post);
            $em->flush();

            return new Response('<html><body>Your post is added</body></html>');

        }*/

    /**
     * @Route("/show-users-posts/{id}", name="showUsersPosts")
     * @param \App\Controller\EntityManagerInterface $em
     * @return Response
     */
    public function showUsersPosts(User $user, EntityManagerInterface $em)
    {
        $posts = $em->getRepository(Post::class)->findBy(['user' => $user]);

        return $this->render('main/index.html.twig', [
            'user' => $user,
            'posts' => $posts
        ]);

    }


}
