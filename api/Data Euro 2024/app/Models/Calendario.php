<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendario extends Model
{
    use HasFactory;

    public function jogos() {
        return $this->hasMany(Jogo::class);
    }

    public function selecoes() {
        return $this->hasMany(Selecao::class);
    }
}
