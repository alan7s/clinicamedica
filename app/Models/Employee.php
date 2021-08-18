<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['datacontrato', 'salario', 'senhahash'];
    protected $table = 'employees';

    public function profiles(){
        return $this->hasOne(Profile::class);
    }
}
