<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriaController extends Controller
{
   
    public function galeria()
    {
        return view('web/galeria');
    }
}
