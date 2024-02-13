<?php

namespace App\Repository;

use App\Framework\Repository\AbstractRepository;

class JobCharacterRepository extends AbstractRepository
{
    public function getAll(): array
    {
        return $this->bddConnection->q("SELECT * FROM job_character");
    }
}