<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstatisticaTime extends Model
{
    use HasFactory;

    public function jogos() {
        return $this->hasMany(Jogo::class);
    }
}
