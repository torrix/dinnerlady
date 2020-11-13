<?php

use App\Commands\MenuCommand;

$botman = resolve('botman');

$botman->hears('What\'s for lunch', MenuCommand::class . '@menu');
$botman->hears('Whats for lunch', MenuCommand::class . '@menu');

$botman->hears('What\'s for dinner', MenuCommand::class . '@menu');
$botman->hears('Whats for dinner', MenuCommand::class . '@menu');

$botman->hears('Menu', MenuCommand::class . '@menu');