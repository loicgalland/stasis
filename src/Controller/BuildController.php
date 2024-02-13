<?php

namespace App\Controller;

use App\Framework\Controller\AbstractController;
use App\Framework\Response\JsonResponse;
use App\Repository\BuildRepository;

class BuildController extends AbstractController
{
    public function __construct()
    {
        $this->buildRepository = new BuildRepository();
    }

    public function findAll(): JsonResponse
    {
        $result = $this->buildRepository->getAll();

        return $this->json($result);
    }
}