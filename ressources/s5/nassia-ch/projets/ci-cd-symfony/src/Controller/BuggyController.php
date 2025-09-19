<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class BuggyController extends AbstractController
{
    #[Route('/buggy', name: 'app_buggy', methods: ['GET'])]
    public function index(): JsonResponse
    {
        $data = $this->getData();


        return $this->json($data);
    }

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
}
