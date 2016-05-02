<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class libroRequest extends Request
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
            'titulo' => 'required',
            'edicion'=> 'required',
            'paginas'=>'required',
            'precio'=>'required',
            'isbn'=>'required',
            'editorial_id_editorial'=>'required',
            'Idioma_id_Idioma'=>'required',
            'image'=>'required'
        ];
    }
}
