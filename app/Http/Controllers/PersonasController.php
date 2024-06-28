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
            return view('create',[
                'persona' => new Persona
            ]);
        }

        public function store(CreatePersonaRequest $request){

            Persona::create($request->validated());
            
            return redirect()->route('persona.index');
            
        }

        public function edit(Persona $nPerCodigo){
            return view('edit', [
                'persona' => $nPerCodigo
            ]);
        }

        public function update(Persona $nPerCodigo, CreatePersonaRequest $request){

            $nPerCodigo->update($request->validated());

            return redirect()->route('persona.show', $nPerCodigo);
        }

        public function destroy(Persona $persona){
            $persona->delete();

            return redirect()->route('persona.index');
        }
}

