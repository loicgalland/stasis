<?php

namespace App\Repository;

class JobRepository extends AbstractRepository
{
    public function getAll(): array
    {
        return $this->bddConnection->q("SELECT * FROM job");
    }
}