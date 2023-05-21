<?php

namespace Database\Seeders;

use App\Models\Console;
use Illuminate\Database\Seeder;

class ConsoleSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Console::create(['id' => 1, 'name' => 'NES', 'core' => 'nes', 'folder' => 'NES', 'settings' => '{"defaultControllers":{"0":{"0":{"value":"90"},"1":{"value":"83"},"2":{"value":"16"},"3":{"value":"13"},"4":{"value":"38"},"5":{"value":"40"},"6":{"value":"37"},"7":{"value":"39"},"8":{"value":"32","value2":"88"},"9":{"value":"65"},"10":{"value":"81","value2":"4"}},"1":{},"2":{},"3":{}}}']);
        Console::create(['id' => 2, 'name' => 'Nintendo 64', 'core' => 'n64', 'folder' => 'N64']);
    }
}
