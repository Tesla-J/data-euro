<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogador extends Model
{
    use HasFactory;

    public function selecao() {
        return $this->hasMany(Selecao::class);
    }

    public function estatisticasIndividuais() {
        return $this->belongsTo(EstatisticasIndividuais::class);
    }
}
