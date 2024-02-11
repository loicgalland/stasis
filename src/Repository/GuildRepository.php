<?php

namespace App\Repository;

class GuildRepository extends AbstractRepository
{
    public function getAll(): array
    {
        return $this->bddConnection->q("SELECT * FROM guild");
    }
}