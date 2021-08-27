<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = ['cep','logradouro','bairro','cidade','estado'];

    public function search($filter = null){
        $results = $this->where('cep', 'LIKE', "%{$filter}%")
                        ->orWhere('logradouro', 'LIKE', "%{$filter}%")
                        ->orWhere('bairro', 'LIKE', "%{$filter}%")
                        ->orWhere('cidade', 'LIKE', "%{$filter}%")
                        ->orWhere('estado', 'LIKE', "%{$filter}%")
                        ->paginate();
        return $results;                        
    }
}
