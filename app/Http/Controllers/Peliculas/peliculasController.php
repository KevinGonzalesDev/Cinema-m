<?php

namespace App\Http\Controllers\Peliculas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Prueba\prueba;

class peliculasController extends Controller
{
    public function Inicio (){
        $datos = prueba::all();
        $datos = DB::table('pruebas')->select('Nombre','edad')->where('edad', '>' ,10)->get();
        dd($datos);
    }

}
