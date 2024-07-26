
@extends('layouts.app')
@section('content')
<tr>
    @auth
    <td colspan="4">
        <a href="{{ route('persona.create' )}}">Nueva Persona</a>
    </td>
    @endauth

</tr>
<tr>
    <th colspan="4">Listado de Personas</th>
</tr>

<div class="row">
    @if($personas)
        @foreach($personas as $persona)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $persona->cPerApellido . ' ' . $persona->cPerNombre }}</h5>
                        <a href="{{ route('persona.show', $persona->nPerCodigo) }}" class="btn btn-primary">Ver detalles</a>
                            @if($persona->image)
                                <img src="/storage/{{$persona->image}}" alt="{{$persona->titulo}}" width="150"
                                height="100">
                           @endif
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="col-12">
            <p>No existe ningún servicio que mostrar</p>
        </div>
    @endif
</div>


@endsection


