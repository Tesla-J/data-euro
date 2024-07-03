<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Selecao extends Model
{
    use HasFactory;

    public function jogadores() {
        return $this->belongsTo(Jogador::class);
    }

    public function calendarios() {
        return $this->belongsTo(Calendario::class);
    }

    public function pais() {
        return $this->hasMany(Pais::class);
    }

    public function grupo() {
        return $this->hasMany(Grupo::class);
    }
}
