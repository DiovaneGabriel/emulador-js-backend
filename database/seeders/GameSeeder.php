<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Game::create(['id' => 1, 'console_id' => '1', 'name' => 'Bomberman', 'file' => 'Bomberman.nes']);
        Game::create(['id' => 2, 'console_id' => '1', 'name' => 'Castlevania', 'file' => 'Castlevania(USA).nes']);
        Game::create(['id' => 3, 'console_id' => '2', 'name' => 'Super Smash Bros', 'file' => 'SuperSmashBros(USA).z64']);
    }
}
