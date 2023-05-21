<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('cartridge_games', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cartridge_id');
            $table->unsignedBigInteger('game_id');
            $table->integer('order');
            $table->foreign('cartridge_id')->references('id')->on('cartridges');
            $table->foreign('game_id')->references('id')->on('games');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('cartridge_games');
    }
};
