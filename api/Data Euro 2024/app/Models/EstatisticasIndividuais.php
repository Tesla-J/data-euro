<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstatisticasIndividuais extends Model
{
    use HasFactory;

    public function jogos() {
        return $this->hasMany(Jogo::class);
    }

    public function jogadores() {
        return $this->hasMany(Jogador::class);
    }
    
}
