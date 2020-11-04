<?php

namespace App\Controller;

use App\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ProjectController extends AbstractController.
 * Display the page of the given project.
 */
class ProjectController extends AbstractController
{
    /**
     * Redirect to the page to the given project.
     *
     * @Route("/project/{id}", name="project")
     */
    public function index(int $id): Response
    {
        return $this->render('project/index.html.twig', [
            'project' => $this->getDoctrine()->getRepository(Project::class)->findOneBy(['id' => $id])
        ]);
    }
}
