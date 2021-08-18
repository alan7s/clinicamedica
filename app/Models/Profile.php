<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['nome','email','telefone','cep','logradouro','bairro','cidade','estado'];

    public function employees(){ //retorna employee do profile
        return $this->belongsToMany(Employee::class);
    }

}
