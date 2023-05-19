<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('consoles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('core')->nullable(false);
            $table->string('folder')->nullable(false);
            $table->json('settings')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('consoles');
    }
};
