<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePersonaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'cPerApellido' =>'required', 
            'cPerNombre' =>'required',
            'cPerDireccion' =>'required',
            'dPerFecNac' =>'required',
            'nPerEdad' =>'required',
            'nPerSueldo' =>'required',
            'cPerEstado' =>'required',
            'cPerRnd' => 'required'
        ];
    }

    public function messages(){
        return [
            'cPerRnd.required' => 'Campo necesario',
            'cPerApellido.required' => 'Campo necesario', 
            'cPerNombre.required' => 'Campo necesario',
            'cPerDireccion.required' => 'Campo necesario',
            'dPerFecNac.required' => 'Campo necesario',
            'nPerEdad.required' => 'Campo necesario',
            'nPerSueldo.required' => 'Campo necesario',
            'cPerEstado.required' => 'Campo necesario'
        ];
    }
}
