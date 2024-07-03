<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    use HasFactory;

    public function resultados() {
        return $this->hasMany(Resultado::class);
    }

    public function estatisticasTime() {
        return $this->belongsTo(EstatisticaTime::class);
    }

    public function estatisticasIndividuais() {
        return $this->belongsTo(EstatisticasIndividuais::class);
    }
}
