<?php

namespace App\Controller;

use App\Framework\Controller\AbstractController;
use App\Framework\Response\JsonResponse;
use App\Repository\ClassRepository;

class ClassController extends AbstractController
{
    public function __construct()
    {
        $this->classRepository = new ClassRepository();
    }

    public function findAll(): JsonResponse
    {
        $result = $this->classRepository->getAll();

        return $this->json($result);
    }
}