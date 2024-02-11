<?php

use App\Repository\GuildRepository;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

$guildRepository = new GuildRepository();

$guildes = $guildRepository->getAll();

foreach ($guildes as $guild) {
    echo $guild->name;
}