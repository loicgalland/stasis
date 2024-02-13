<?php

namespace App\Framework\Repository;

abstract class AbstractRepository
{
    protected $bddConnection;

    public function __construct()
    {
        $this->bddConnection = new BddConnection('stasis_v2', 'root', 'root');
    }
}