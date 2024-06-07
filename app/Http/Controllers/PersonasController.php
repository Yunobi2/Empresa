<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Persona;

class PersonasController extends Controller
{
    #   /**
    #    * @param \Illuminate\Http\Request $request
    #    * @return \Illuminate\Http\Response
    #    */
       
   
       public function index(){
           $personas = Persona::get();
           #$servicios = Servicio::latest()->paginate(2);
           return view('clientes', compact('personas'));
       }

            // Controlador
        public function show($nPerCodigo)
        {
            #$persona = Persona::findOrFail($nPerCodigo);
            return view('show', ['persona' => Persona::find($nPerCodigo)]);
        }
}

