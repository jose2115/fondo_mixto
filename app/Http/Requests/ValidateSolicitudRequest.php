<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ValidateSolicitudRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
      

        return [
            'categoria' => 'required|exists:categorias,id',
            'solicitante' => 'required|exists:solicitantes,id',
            'descripcion' => 'required|min:3',
            'archivo' => 'required|file|mimes:pdf',
            'radicado' => 'required|unique:solicitudes,radicado',
        ];
    }

    public function messages()
    {

        return [
            'categoria.exists' => 'Escoja una opcion valida para el campo :attribute',
            'solicitante.exists' => 'Escoja una opcion valida para el campo :attribute',
            'archivo.mimes' => 'Se recibe documento valido: PDF',
            'radicado.unique' => 'El numero de radicado ya existe',
        ];
    }

    public function attributes()
    {
        return [
            'categoria'     => 'Categoria',
            'solicitante'   => 'Solicitante',
            'descripcion'   => 'Nombre Proyecto',
            'archivo'       => 'Archivo',
            'radicado'      => 'Radicado',      
        ];
    }
}
