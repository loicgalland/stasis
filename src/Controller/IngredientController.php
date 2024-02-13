<?php

namespace App\Controller;

use App\Framework\Controller\AbstractController;
use App\Framework\Response\JsonResponse;
use App\Repository\IngredientRepository;

class IngredientController extends AbstractController
{
    public function __construct()
    {
        $this->ingredientRepository = new IngredientRepository();
    }

    public function findAll(): JsonResponse
    {
        $result = $this->ingredientRepository->getAll();

        return $this->json($result);
    }
}