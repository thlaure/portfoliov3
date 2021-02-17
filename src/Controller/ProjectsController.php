<?php

namespace App\Controller;

use App\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ProjectsController extends AbstractController.
 * Display the page of the given project.
 */
class ProjectsController extends AbstractController
{
    /**
     * Redirect to the page to the given project.
     *
     * @Route("/projects/{slug}", name="projects")
     */
    public function index(string $slug): Response
    {
        return $this->render('project.html.twig', [
            'project' => $this->getDoctrine()->getRepository(Project::class)->findOneBy(['slug' => $slug])
        ]);
    }
}