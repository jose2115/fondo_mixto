<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Solicitante2Request extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
         
            'apellido' => 'required|min:3',
        ];
    }

    public function attributes()
    {
        return [
            'persona_id' => 'Tipo Persona',
            'nombre' => 'Nombres',
            'apellido' => 'Apellidos',
            'nid' => 'CC/NIT',
            'municipio_id_r' => 'Municipio',
            'direccion_r' => 'Direccion',
            'celular' => 'Celular',
            'email_r' => 'Email',
            
            'proponente_id' => 'Tipo Proponente',
        ];
    }
}
