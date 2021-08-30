<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['especialidade', 'crm'];

    public function employees(){ // retorna employee de determinado doctor
        $this->belongsTo(Employee::class);
    }

    public function agendas(){ //retorna agenda do doctor
        return $this->hasMany(Agenda::class);
    }
}
