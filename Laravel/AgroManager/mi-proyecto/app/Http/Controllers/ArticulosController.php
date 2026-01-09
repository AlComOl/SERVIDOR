<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticulosController extends Controller
{
 public function mostrar(){
    $datos = DB::table('articulos') -> get();

  return view('articulos',compact('datos')); 
 
}
}
