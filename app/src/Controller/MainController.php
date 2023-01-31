<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class MainController extends AbstractController
{

    /**
     * @Route("/" name="index")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }

    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request): JsonResponse
    {
        $name = $request->get('name');
        return $this->render('home/custom.html.twig', ['name' => $name]);
    }

    /**
     * @Route("/register",  name="register")
     */
    public function registration(Request $request): JsonResponse
    {
        $name = $request->get('name');
        return $this->render('home/custom.html.twig', ['name' => $name]);
    }
}
