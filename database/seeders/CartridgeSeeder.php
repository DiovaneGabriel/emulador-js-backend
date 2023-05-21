<?php

namespace Database\Seeders;

use App\Models\Cartridge;
use Illuminate\Database\Seeder;

class CartridgeSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Cartridge::create(['id' => 1, 'name' => 'Dynavision', 'key' => 'dynavision']);
    }
}
