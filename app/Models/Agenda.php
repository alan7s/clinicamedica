<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = ['data', 'horario', 'nome', 'email', 'telefone'];

    public function doctors(){ // retorna doctor de determinado agenda
        $this->belongsTo(Doctor::class);
    }
    
}
