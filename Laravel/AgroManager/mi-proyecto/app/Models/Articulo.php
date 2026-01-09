<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulos';  //hacemos referencia a la tabla artículos
    protected $fillable = ['titulo', 'descripcion'];
}
