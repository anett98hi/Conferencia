<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProyectosRequest extends FormRequest
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
            'name_pro'=> 'required|string|max:50|unique:proyectos,name_pro',
            'monto'=> 'required|max:7',
            'fechaf'=> 'required',
            'recursos'=> 'required|string|max:50',
            'avance'=> 'required',
            'desviaciones'=> 'required|string|max:50',
        
        ];
    }
    public function messages()
    {
        return[
            'name_pro.required'=> 'El campo NOMBRE DEL PROYECTO es obligatorio.',
            'name_pro.max'=> 'El campo NOMBRE DEL PROYECTO no puede ser mayor a 50 caracteres.',
            'name_pro.unique'=> 'El campo NOMBRE DEL PROYECTO ya fue previamente registrado.', 
            'monto.required' => 'El campo MONTO ASIGNADO es obligatorio.',
            'monto.max' => 'El numero MONTO ASIGNADO no puede ser mayor a 7 cifras.',
            'fechaf.required' => 'El campo FECHA DE ENTREGA es obligatorio.', 
            'recursos.required' => 'El campo CANTIDAD DE RECURSOS es obligatorio.', 
            'recursos.max' => 'El campo CANTIDAD DE RECURSOS no puede ser mayor a 50 caracteres.', 
            'avance.required' => 'El campo AVANCE es obligatorio.',
            'desviaciones.required' => 'El campo DESVIACIONES es obligatorio.',
            'desviaciones.max' => 'El campo DESVIACIONES no puede ser mayor a 50 caracteres.',

        ];
    }
}
