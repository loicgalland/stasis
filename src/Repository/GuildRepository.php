<?php

namespace App\Repository;

class GuildRepository
{
    private $bddConnection;

    public function __construct()
    {

        $this->bddConnection = new BddConnection('stasis_v2', 'root', 'root');
    }

    public function getAll(): array
    {
        return $this->bddConnection->q("SELECT * FROM guild");
    }
}