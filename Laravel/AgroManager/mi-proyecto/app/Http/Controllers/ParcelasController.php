<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParcelasController extends Controller
{

    function mostrar(){
        $parcela='24/104';
        $ubicacion='alcudia';

        return view ('informacion.pagina',compact('datos','clase'));

    }
}
