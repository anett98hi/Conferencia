<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Cuestionario1Request extends FormRequest
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
            'id_user_resol'=> 'unique:cuestionario1s,id_user_resol',
        
        ];
    }
    public function messages()
    {
        return[
            'id_user_resol.unique'=> 'EL CUESTIONARIO YA FUE CONTESTADO ANTERIORMENTE.', 

        ];
    }
}
