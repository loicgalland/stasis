<?php

namespace App\Controller;

use App\Framework\Controller\AbstractController;
use App\Framework\Response\JsonResponse;
use App\Repository\CharacterRepository;

class CharacterController extends AbstractController
{
    public function __construct()
    {
        $this->characterRepositroy = new CharacterRepository();
    }

    public function findAll(): JsonResponse
    {
        $result = $this->characterRepositroy->getAll();

        return $this->json($result);
    }
}