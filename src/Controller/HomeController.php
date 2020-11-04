<?php

namespace App\Controller;

use App\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HomeController.
 * Manage the treatments for the home page.
 */
class HomeController extends AbstractController
{
    /**
     * Redirect to the homepage.
     *
     * @Route("/", name="home")
     *
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            "projects" => $this->getDoctrine()->getRepository(Project::class)->findAll()
        ]);
    }
}
