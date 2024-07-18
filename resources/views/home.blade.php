
@extends('layouts.app')
@section('content')
<h1 class="text-center">Inicio</h1>
<p class="text-center">Estas en el menú principal.</p>
<td colspan="4">
    @auth
        {{auth()->user()->name}}   
    @endauth
</td>
@endsection
