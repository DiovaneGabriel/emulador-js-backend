<?php

namespace App\Http\Controllers\Api;

use App\Models\Console;
use App\Models\Game;

class ListController extends ApiController {
    public function getConsoles() {
        return self::return_json(Console::get());
    }
    public function getGames($consoleId) {
        return self::return_json(Game::whereConsoleId($consoleId)->get());
    }
}
