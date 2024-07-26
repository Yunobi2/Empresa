@extends('layouts.app')
@section('title','Editar Persona | ' . $persona->cPerApellido  )
@section('content')
<table cellpadding="3" cellspaceing="5">
    @auth
    <tr>
        <img src="/storage/{{$persona->image}}" alt="{{$persona->titulo}}" width="200" height="100">
        <th colspan="4">Editar Persona</th>
    </tr>
    @endauth
    @include('partials.validation-errors')
    <form action="{{ route('persona.update', $persona->nPerCodigo) }}" method="post" enctype="multipart/form-data">
        @csrf @method('PATCH')
        @include('partials.form',['btnText' => 'Actualizar'])

    </form>
</table>

@endsection
