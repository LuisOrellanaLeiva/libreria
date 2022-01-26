<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLibro extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'categoria_id'=>'required',
            'titulo'=>'required',
            'nombre_autor'=>'required',
            'lugar_publicacion'=>'required',
            'numero_paginas'=>'required|numeric',
            'fecha_publicacion'=>'required|date'

        ];
    }

    public function messages()
    {
        return [
            'categoria_id.required'=>'Debe ingresar una categoria',
            'titulo.required'=>'Debe ingresar un titulo de libro',
            'nombre_autor.required'=>'Debe ingresar un nombre de autor',
            'lugar_publicacion'=>'Debe ingresar un lugar de publicacion',
            'numero_paginas'=>'Debe ingresar el numero de paginas de su libro',
            'fecha_publicacion'=>'Debe ingresar el lugar de publicacion de su libro'


        ];
    }

    public function attributes()
    {
        return [
            'categoria_id'=>'Categoria'
        ];
    }
}
