<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * ErrorController extends AbstractController.
 * Manage the errors.
 */
class ErrorController extends AbstractController
{
    /**
     * Entry point for the 404 error.
     */
    public function error404(): Response
    {
        return $this->render('bundles/TwigBundle/Exception/error404.html.twig');
    }
}