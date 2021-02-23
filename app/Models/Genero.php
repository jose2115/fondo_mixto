<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    //
    protected $table = 'generos';

  
    protected $fillable = [
        'id_genero', 'detalle',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

 
}
