{{-- @extends('layouts.app')
@section('title','personas | ' . $persona->cPerApellido  )
@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="/storage/{{$persona->image}}" alt="{{$persona->titulo}}">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        @auth
        <a href="{{ route('persona.edit', $persona )}}">Editar</a>
        @endauth
        <form action="{{ route('persona.destroy', $persona) }}" method="post">
            @csrf @method('DELETE')
            <button>Eliminar</button>
        </form>
    </div>
    
    <div class="col-md-8">
        <h2>Detalles de la persona</h2>
        <p><strong>Apellido:</strong> {{ $persona->cPerApellido }}</p>
        <p><strong>Nombre:</strong> {{ $persona->cPerNombre }}</p>
        <p><strong>Dirección:</strong> {{ $persona->cPerDireccion }}</p>
        <p><strong>Fecha de nacimiento:</strong> {{ $persona->dPerFecNac }}</p>
        <p><strong>Edad:</strong> {{ $persona->nPerEdad }}</p>
        <p><strong>Sexo:</strong> {{ $persona->cPerSexo }}</p>
        <p><strong>Sueldo:</strong> {{ $persona->nPerSueldo }}</p>
        <p><strong>RND:</strong> {{ $persona->cPerRnd }}</p>
        <p><strong>Estado:</strong> {{ $persona->cPerEstado }}</p>
    </div>
</div>
@endsection
 --}}
 @extends('layouts.app')
 @section('title','personas | ' . $persona->cPerApellido  )
 @section('content')
 <div class="row">
     <div class="col-md-8">
         @auth
         <div class="mb-4 mt-3">
             <a href="{{ route('persona.edit', $persona )}}" class="btn btn-primary">Editar</a>
             <form action="{{ route('persona.destroy', $persona) }}" method="post" class="d-inline">
                 @csrf @method('DELETE')
                 <button class="btn btn-danger">Eliminar</button>
             </form>
         </div>
         @endauth
 
         <h2>Detalles de la persona</h2>
         <p><strong>Apellido:</strong> {{ $persona->cPerApellido }}</p>
         <p><strong>Nombre:</strong> {{ $persona->cPerNombre }}</p>
         <p><strong>Dirección:</strong> {{ $persona->cPerDireccion }}</p>
         <p><strong>Fecha de nacimiento:</strong> {{ $persona->dPerFecNac }}</p>
         <p><strong>Edad:</strong> {{ $persona->nPerEdad }}</p>
         <p><strong>Sexo:</strong> {{ $persona->cPerSexo }}</p>
         <p><strong>Sueldo:</strong> {{ $persona->nPerSueldo }}</p>
         <p><strong>RND:</strong> {{ $persona->cPerRnd }}</p>
         <p><strong>Estado:</strong> {{ $persona->cPerEstado }}</p>
     </div>
     
     <div class="col-md-4 ">
         <div class="card mt-custom" style="width: 100%;">
             <img class="card-img-top" src="/storage/{{$persona->image}}" alt="{{$persona->titulo}}">
             <div class="card-body">
                 <h5 class="card-title">Card title</h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 <a href="#" class="btn btn-primary">Go somewhere</a>
             </div>
         </div>
     </div>
 </div>
 @endsection