<?php

namespace App\Controller;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class FormController extends AbstractController.
 * Manages all the forms.
 */
class FormController extends AbstractController
{
    /**
     * Contact form.
     *
     * @Route("/form/contact", name="form_contact")
     *
     * @param Request $request Request of the AJAX.
     *
     * @return JsonResponse
     */
    public function contact(Request $request, MailerInterface $mailer): JsonResponse
    {
        if (!$request->isXmlHttpRequest()) {
            return new JsonResponse(array(
                'status' => 'Error',
                'message' => 'Error'),
            400);
        }

        if (isset($request->request)) {
            $data = $request->request->all();
            $email = (new TemplatedEmail())
            ->from($data['email'])
            ->to('thomaslaure3@gmail.com')
            // ->to('thomas.laure@ik.me')
            ->subject('Portfolio contact')
            ->htmlTemplate('emails/contact.html.twig')
            ->context([
                'name' => $data['name'],
                'firstname' => $data['firstname'],
                'email_from' => $data['email'],
                'message' => $data['message']
            ]);

            try {
                $mailer->send($email);
            } catch (TransportExceptionInterface $exception) {
                echo $exception->getMessage();
                return new JsonResponse(['message' => 'Une erreur est survenue lors de l\'envoi du formulaire']);
            }

            return new JsonResponse(['message' => 'Votre message a été envoyé']);
        } else {
            return new JsonResponse(['message' => 'Une erreur est survenue lors de l\'envoi du formulaire']);
        }
    }
}