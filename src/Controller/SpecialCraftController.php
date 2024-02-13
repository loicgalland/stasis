<?php

namespace App\Controller;

use App\Framework\Controller\AbstractController;
use App\Framework\Response\JsonResponse;
use App\Repository\SpecialCraftRepository;

class SpecialCraftController extends AbstractController
{
    public function __construct()
    {
        $this->specialCraftRepository = new SpecialCraftRepository();
    }

    public function findAll(): JsonResponse
    {
        $result = $this->specialCraftRepository->getAll();

        return $this->json($result);
    }
}