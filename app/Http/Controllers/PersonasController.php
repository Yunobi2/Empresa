<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Persona;
use App\Http\Requests\CreatePersonaRequest;

class PersonasController extends Controller
{
    #   /**
    #    * @param \Illuminate\Http\Request $request
    #    * @return \Illuminate\Http\Response
    #    */
       
   
       public function index(){
           $personas = Persona::get();
           #$servicios = Servicio::latest()->paginate(2);
           return view('personas', compact('personas'));
       }

            // Controlador
        public function show($nPerCodigo)
        {
            #$persona = Persona::findOrFail($nPerCodigo);
            return view('show', ['persona' => Persona::find($nPerCodigo)]);
        }

        public function create(){
            return view('create');
        }

        public function store(CreatePersonaRequest $request){

            Persona::create($request->validated());
            
            return redirect()->route('persona.index');
            
            /*$camposv = request()->validate([
                'cPerApellido' =>'required', 
                'cPerNombre' =>'required',
                'cPerDireccion' =>'required',
                'dPerFecNac' =>'required',
                'nPerEdad' =>'required',
                'nPerSueldo' =>'required',
                'cPerEstado' =>'required'
            ]);*/
            
            /*$apellido = request('cPerApellido');
            $nombre = request('cPerNombre');
            $direccion = request('cPerDireccion');
            $fechadenacimiento = request('dPerFecNac');
            $edad = request('nPerEdad');
            $sueldo = request('nPerSueldo');
            $estado = request('cPerEstado');
            $rnd = request('cPerRnd');*/

            Persona::create([
                'cPerApellido' => $apellido,
                'cPerNombre' => $nombre,
                'cPerDireccion' => $direccion,
                'dPerFecNac' => $fechadenacimiento,
                'nPerEdad' => $edad,
                'nPerSueldo' => $sueldo,
                'cPerEstado' => $estado,
                'cPerRnd' => $rnd
            ]);
            
            /*Persona::create($camposv);*/

            return redirect()->route('persona.index');
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

