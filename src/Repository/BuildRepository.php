<?php

namespace App\Repository;

use App\Framework\Repository\AbstractRepository;

class BuildRepository extends AbstractRepository
{
    public function getAll(): array
    {
        return $this->bddConnection->q("SELECT * FROM build");
    }
}