<?php

namespace App\Controller;

use App\Framework\Controller\AbstractController;
use App\Framework\Response\JsonResponse;
use App\Repository\JobRepository;

class JobController extends AbstractController
{
    public function __construct()
    {
        $this->jobRepository = new JobRepository();
    }

    public function findAll(): JsonResponse
    {
        $result = $this->jobRepository->getAll();

        return $this->json($result);
    }
}