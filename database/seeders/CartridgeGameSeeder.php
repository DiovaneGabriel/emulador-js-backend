<?php

namespace Database\Seeders;

use App\Models\CartridgeGame;
use Illuminate\Database\Seeder;

class CartridgeGameSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        CartridgeGame::create(['cartridge_id' => 1, 'game_id' => 2, 'order' => 1]);
        CartridgeGame::create(['cartridge_id' => 1, 'game_id' => 1, 'order' => 26]);
    }
}
