<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class DashboardJKController extends AbstractController
{
    // #[Route('/dashboard', name: 'dashboard')]
    // public function index(): Response
    // {
    //     return $this->render('dashboard/index.html.twig');
    // }

    #[Route('/dashboard', name: 'dashboard', methods:['GET'])]
    public function index(): Response
    {
        // Récupérer l'utilisateur connecté
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('Vous n\'avez pas le droit d\'accéder à cette page.');
        }
        return $this->render('dashboard/index.html.twig', [
            'user' => $user,
        ]);
    }
}
