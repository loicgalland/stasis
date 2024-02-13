<?php

namespace App\Repository;

use App\Framework\Repository\AbstractRepository;

class DungeonCharacterRepository extends AbstractRepository
{
    public function getAll(): array
    {
        return $this->bddConnection->q("SELECT * FROM dungeon_character");
    }
}