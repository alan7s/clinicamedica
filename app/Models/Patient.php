<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['peso', 'altura', 'tiposanguineo'];
    protected $table = 'patients';

    public function profiles(){ // retorna perfil de determinado patient
        $this->belongsTo(Profile::class);
    }
}
