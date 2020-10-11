<?php

namespace App\Controller;

//use http\Env\Response;
use App\Services\TestService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class MainController extends AbstractController
{

    /**
     * @Route("/main", name="main")
     * @param TestService $service
     * @return Response
     */
    public function index(TestService $service)
    {
/*        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);*/

        $pages = [
            [
                'title' => 'Заголовок страницы 1',
                'content' => 'Содержимое страницы 1'
            ],
            [
                'title' => 'Заголовок страницы 2',
                'content' => 'Содержимое страницы 2'
            ],
            [
                'title' => 'Заголовок страницы 3',
                'content' => 'Содержимое страницы 3'
            ],
        ];

        $tmp = $service->convert(100);

        return $this->render('main/index.html.twig', [
            'pages' => $pages,
    ]);
    }
}
