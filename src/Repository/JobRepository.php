<?php

namespace App\Repository;

use App\Framework\Repository\AbstractRepository;

class JobRepository extends AbstractRepository
{
    public function getAll(): array
    {
        return $this->bddConnection->q("SELECT * FROM job");
    }
}