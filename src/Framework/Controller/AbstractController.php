<?php

namespace App\Framework\Controller;

use App\Framework\Response\JsonResponse;

abstract class AbstractController
{
    public function json($data, int $status = JsonResponse::STATUS_OK): JsonResponse
    {
        return new JsonResponse($data, $status);
    }
}