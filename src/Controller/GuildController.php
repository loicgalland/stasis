<?php

namespace App\Controller;

use App\Framework\Controller\AbstractController;
use App\Framework\Response\JsonResponse;
use App\Repository\GuildRepository;

class GuildController extends AbstractController
{
     public function __construct()
     {
         $this->guildRepository = new GuildRepository();
     }

     public function findAll(): JsonResponse
     {
         $result = $this->guildRepository->getAll();

         return $this->json($result);
     }
}