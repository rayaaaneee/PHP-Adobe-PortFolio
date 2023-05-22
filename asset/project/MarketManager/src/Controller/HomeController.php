<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use App\Form\ArticleType;
use App\Repository\TypeRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\CollaborationRequestRepository;

class HomeController extends BaseController
{
    #[Route('/', name: 'home')]
    public function index(Session $session, TypeRepository $typeRepository, Request $request, CollaborationRequestRepository $collaborationRequestRepository): Response
    {
        $this->setNbCollabRequestsInSession($session, $collaborationRequestRepository);

        $this->verifyConnection($session);

        $printMessage = false;
        $isSuccess = false;
        $message = '';

        $justConnected = $request->query->get('connected') == "1" ? true : false;

        if ($justConnected) {
            $printMessage = true;
            $isSuccess = true;
            $message = 'You successfully connected';
        }

        $types = $typeRepository->findAll();
        $formSearch = $this->createForm(ArticleType::class, null, [
            'types' => $types,
            'action' => $this->generateUrl('article', [], UrlGeneratorInterface::ABSOLUTE_URL)
        ]);
        return $this->render('home.html.twig', [
            'controller_name' => 'HomeController',
            'formSearch' => $formSearch->createView(),
            'printMessage' => $printMessage,
            'isSuccess' => $isSuccess,
            'message' => $message
        ]);
    }
}
