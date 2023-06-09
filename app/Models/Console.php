<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Console extends Model {
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'core',
        'folder',
        'settings',
    ];

    public function game() {
        return $this->hasMany(Game::class);
    }
}
