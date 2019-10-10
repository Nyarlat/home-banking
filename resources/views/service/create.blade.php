@extends('layouts.app', [
    'jumboTitle' => 'Modulo de creación de servicios',
    'jumboDesc' => 'Paga cuando quieras desde donde estes'
])

@section('content')

<div class="row">
    <div class="col-6 offset-3">
        <form action="{{ route('service.store') }}" method="Post">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre del Servicio</label>
                <input type="text" class="form-control" name="nombre" id="nombre">
            </div>

            <div class="form-group">
                <label for="numRef">Numero de Referencia</label>
                <input type="text" class="form-control" name="numRef" id="numRef">
            </div>
            <div class="form-group text-right">
                <input type="submit" class="btn btn-primary" value="Crear Servicio">
            </div>
        </form>
    </div>
</div>

@endsection