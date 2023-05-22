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
        $result = [];
        $cartridge = Cartridge::where('key', $cartridgeKey)->first();
        if ($cartridge) {
            $games = CartridgeGame::whereCartridgeId($cartridge->id)->with(['game'])->get();

            if (count($games)) {
                $pages = ceil(count($games) / 10);

                for ($i = 0; $i < $pages; $i++) {
                    foreach ($games as $k => $game) {
                        if ($k < ($i + 1) * 10 && $k >= $i * 10) {
                            $result['pages'][$i]['id'] = ($i + 1);
                            $result['pages'][$i]['games'][] = $game;
                            $result['count_games'] = count($games);
                        }
                    }
                }
            }
        }
        return self::return_json($result);
    }
}
