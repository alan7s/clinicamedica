<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['nome','email','telefone','cep','logradouro','bairro','cidade','estado'];

    public function employees(){
        return $this->hasOne(Employee::class);
    }
}
