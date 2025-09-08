<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class BuggyController extends AbstractController
{
    /**
     * @return array<string, int>
     */
    private function getData(): array
    {
        return [
            'key1' => 1,
            'key2' => 2,
        ];
    }

    #[Route('/buggy', name: 'app_buggy', methods: ['GET'])]
    public function index(): JsonResponse
    {
        return $this->json($this->getData());
    }
}
