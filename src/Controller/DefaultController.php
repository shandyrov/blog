<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/{reactRouting}", name="home", defaults={"reactRouting": null})
     */
    public function index():Response
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/api/users", name="users")
     * @return JsonResponse
     */
    public function getUsers():JsonResponse
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Shandyrov Askar',
                'description' => 'Lorem ipsum',
                'imageURL' => 'https://via.placeholder.com/150/24f355'
            ],
        ];
        $response = new JsonResponse();
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        $response->setData($users);

        return $response;
    }
}
