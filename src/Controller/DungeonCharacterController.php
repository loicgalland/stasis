<?php

namespace App\Controller;

use App\Framework\Controller\AbstractController;
use App\Framework\Response\JsonResponse;
use App\Repository\DungeonCharacterRepository;

class DungeonCharacterController extends AbstractController
{
    public function __construct()
    {
        $this->dungeonCharacterRepository = new DungeonCharacterRepository();
    }

    public function findAll(): JsonResponse
    {
        $result = $this->dungeonCharacterRepository->getAll();

        return $this->json($result);
    }
}