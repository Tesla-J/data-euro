<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;

    public function estadios() {
        return $this->belongsTo(Estadio::class);
    }

    public function pais() {
        return $this->hasMany(Pais::class);
    }
}
