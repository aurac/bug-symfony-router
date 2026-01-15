<?php

namespace App\Controller;

use App\Entity\Dummy;
use App\Repository\DummyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DummyController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(DummyRepository $repository): Response
    {
        return $this->render('dummy/index.html.twig', [
            'dummies' => $repository->findAll(),
        ]);
    }

    #[Route('/path/{slug:path}', name: 'app_path')]
    public function path(Dummy $path): Response
    {
        dd($path);
    }

    #[Route('/notpath/{slug:notpath}', name: 'app_not_path')]
    public function notPath(Dummy $notpath): Response
    {
        dd($notpath);
    }
}
