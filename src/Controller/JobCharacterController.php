<?php

namespace App\Controller;

use App\Framework\Controller\AbstractController;
use App\Framework\Response\JsonResponse;
use App\Repository\JobCharacterRepository;

class JobCharacterController extends AbstractController
{
    public function __construct()
    {
        $this->jobCharacterRepository = new JobCharacterRepository();
    }

    public function findAll(): JsonResponse
    {
        $result = $this->jobCharacterRepository->getAll();

        return $this->json($result);
    }
}