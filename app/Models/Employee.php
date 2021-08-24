<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['datacontrato', 'salario', 'senhahash'];
    protected $table = 'employees';

    public function profiles(){ // retorna perfil de determinado employee
        $this->belongsTo(Profile::class);
    }

    public function doctors(){ //retorna doctor do employee
        return $this->hasMany(Doctor::class);
    }
}
