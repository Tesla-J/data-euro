<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;

    public function selecoes() {
        return $this->belongsTo(Selecao::class);
    }

    public function cidades() {
        return $this->belongsTo(Cidade::class);
    }
}
