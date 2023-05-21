<?php

namespace App\Http\Controllers\Api;

use App\Models\Cartridge;
use App\Models\CartridgeGame;
use App\Models\Console;
use App\Models\Game;

class ListController extends ApiController {
    public function getConsoles() {
        return self::return_json(Console::get());
    }
    public function getCartridges() {
        return self::return_json(Cartridge::get());
    }
    public function getConsoleGames($consoleId) {
        return self::return_json(Game::whereConsoleId($consoleId)->get());
    }
    public function getCartridgeGames($cartridgeKey) {
        $cartridge = Cartridge::where('key', $cartridgeKey)->first();
        if ($cartridge) {
            return self::return_json(CartridgeGame::whereCartridgeId($cartridge->id)->with(['game'])->get());
        }

        return false;
    }
}
