<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objetivo extends Model
{
    //
    protected $table = 'objetivos';

    protected $fillable = [
         'solicitud_id', 'especifico',
    ];


    public function proyecto()
    {
        return $this->belongsTo('App\Models\Proyecto');
    }
}
