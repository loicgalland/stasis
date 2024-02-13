<?php

namespace App\Repository;

use App\Framework\Repository\AbstractRepository;

class SpecialCraftRepository extends AbstractRepository
{
    public function getAll(): array
    {
        return $this->bddConnection->q("SELECT * FROM special_craft");
    }
}