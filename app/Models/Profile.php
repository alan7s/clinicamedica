<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['nome','email','telefone','cep','logradouro','bairro','cidade','estado'];

    public function employees(){ //retorna employee do profile
        return $this->hasMany(Employee::class);
    }

    public function search($filter = null){
        $results = $this->where('nome', 'LIKE', "%{$filter}%")
                        ->orWhere('email', 'LIKE', "%{$filter}%")
                        ->paginate();
        return $results;                        
    }

}
