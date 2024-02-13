<?php

namespace App\Controller;

use App\Framework\Controller\AbstractController;
use App\Framework\Response\JsonResponse;
use App\Repository\UserRepository;

class UserController extends AbstractController
{
    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function findAll(): JsonResponse
    {
        $result = $this->userRepository->getAll();

        return $this->json($result);
    }
}