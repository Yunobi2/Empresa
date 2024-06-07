
@extends('layouts.app')
@section('content')



<div class="row">
    @if($personas)
        @foreach($personas as $persona)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $persona->cPerApellido . ' ' . $persona->cPerNombre }}</h5>
                        <a href="{{ route('persona.show', $persona->nPerCodigo) }}" class="btn btn-primary">Ver detalles</a>
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


