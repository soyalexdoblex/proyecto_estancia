<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    public function grupos(){
        return $this->belongsTo(Grupo::class, 'id_grupo');
    }
}
