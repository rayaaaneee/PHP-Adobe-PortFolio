<?php

namespace App\Controller;

use App\Repository\CollaborationRequestRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\RedirectResponse;

abstract class BaseController extends AbstractController
{
    protected function verifyConnection(Session $session): void
    {
        if (!$session->get('user')) {
            $url = $this->generateUrl('connect');
            $response = new RedirectResponse($url);
            $response->send();
        }
    }

    protected function setNbCollabRequestsInSession(Session $session, CollaborationRequestRepository $collaborationRequestRepository): void
    {
        $nbNotifications = 0;
        $id = $session->get('user')->getId();

        $collabRequests = $collaborationRequestRepository->findBy(['receiver' => $id]);
        $nbNotifications += count($collabRequests);

        $session->set('collabRequests', $nbNotifications);
    }
}
