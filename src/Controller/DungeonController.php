<?php

namespace App\Controller;

use App\Framework\Controller\AbstractController;
use App\Framework\Response\JsonResponse;
use App\Repository\DungeonRepository;

class DungeonController extends AbstractController
{
    public function __construct()
    {
        $this->dungeonRepository = new DungeonRepository();
    }

    public function findAll(): JsonResponse
    {
        $result = $this->dungeonRepository->getAll();

        return $this->json($result);
    }
}