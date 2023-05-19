<?php

namespace App\Http\Controllers;

use App\Models\Game;

class GameController extends Controller {

    public function getGame($id) {

        $game = Game::whereId($id)->with(['console'])->first();

        $data['game'] = $game;

        return view('emulator', $data);
    }
}
