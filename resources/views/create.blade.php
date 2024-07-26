@extends('layouts.app')
@section('title', 'Crear Persona')
@section('content')
<table cellpadding="3" cellspaceing="5">
    <tr>
        <th colspan="4">Crear nueva persona</th>
    </tr>
    @include('partials.validation-errors')
    <form action="{{ route('persona.store' )}}" method="post" enctype="multipart/form-data">
        @include('partials.form',['btnText' => 'Guardar'])
    </form>
</table>
@endsection