<?php
namespace App\Commands;

class MenuCommand {
    public function menu($bot) {
        $slots = $bot->getMessage()->getExtras('slots');
        error_log($slots);
        $bot->reply('Pizza');
    }
}