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
            'cPerRnd' => 'required',
            'image' => [$this->route('servicio') ? 'nullable' : 'required', 'mimes:jpg,png']
        ];
    }

    public function messages(){
        return [
            'cPerRnd.required' => 'Campo necesario para Rnd',
            'cPerApellido.required' => 'Campo necesario para Apellido', 
            'cPerNombre.required' => 'Campo necesario para Nombre',
            'cPerDireccion.required' => 'Campo necesario para Dirección',
            'dPerFecNac.required' => 'Campo necesario para Fecha de nacimiento',
            'nPerEdad.required' => 'Campo necesario para Edad',
            'nPerSueldo.required' => 'Campo necesario Sueldo',
            'cPerEstado.required' => 'Campo necesario Estado',
            'image.required' => 'Seleccione una imagen'
        ];
    }
}
