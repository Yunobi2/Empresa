@extends('layouts.app')
@section('title','Editar Persona | ' . $persona->cPerApellido  )
@section('content')
<table cellpadding="3" cellspaceing="5">
    <tr>
        <th colspan="4">Crear nueva persona</th>
    </tr>
    @include('partials.validation-errors')
    <form action="{{ route('persona.update', $persona) }}" method="post">
        @csrf @method('PATCH')
        @include('partials.form',['btnText' => 'Actualizar'])

    </form>
</table>

@endsection
