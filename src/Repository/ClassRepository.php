<?php

namespace App\Repository;

use App\Framework\Repository\AbstractRepository;

class ClassRepository extends AbstractRepository
{
    public function getAll(): array
    {
        return $this->bddConnection->q("SELECT * FROM class");
    }
}