<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatePresupuestoRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
       return [
   
            'recurso_municipio' => 'required|min:2',
            'fondo_mixto' => 'required|min:2',
            'ministerio_cultura' => 'required|min:2',
            'ingreso_propio' => 'required|min:2',
        ];
    }

    public function attributes()
    {
        return [
            'rubro' => 'Rubro',
            'recurso_municipio' => 'Recurso Municipio',
            'fondo_mixto' => 'Fondo Mixto',
            'ministerio_cultura' => 'Ministerio Cultura',
            'ingreso_propio' => 'Ingreso Propio',
        ];
    }
}
