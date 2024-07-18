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
            
            return redirect()->route('persona.index')->with('estado','La persona fue reada correctamente');
        }

        public function edit(Persona $persona){
            // return view('edit', [
            // 'persona' => $nPerCodigo
            // ]);
            return view('edit', compact('persona'));

        }

        public function update(Persona $persona, CreatePersonaRequest $request){

            $persona->update($request->validated());

            return redirect()->route('persona.show', $persona)->with('estado','La persona fue actualizada correctamente');
        }

        public function destroy(Persona $persona){
            $persona->delete();

            return redirect()->route('persona.index',)->with('estado','La persona fue eliminada correctamente');
        }

        public function __construct(){
            $this->middleware('auth')->only('create','edit','destroy');
            // $this->middleware('auth')->except('index','show');
        }
}

