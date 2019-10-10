@extends('layouts.app', [
    'jumboTitle' => 'Modulo de creación de Inversiones',
    'jumboDesc' => 'Paga cuando quieras desde donde estes'
])

@section('content')

<div class="row">
    <div class="col-6 offset-3">
        <form action="{{ route('investment.store') }}" method="Post">
            @csrf

            <div class="form-group">
                <label for="nombre">Nombre de la Acción</label>
                <input type="text" class="form-control" name="nombre" id="nombre">
            </div>

            <div class="form-group">
                <label for="valor">Valor de la Acción</label>
                <input type="text" class="form-control" name="valor" id="valor">
            </div>

            <div class="form-group">
                <label for="cantidad">Cantidad de Acciónes</label>
                <input type="text" class="form-control" name="cantidad" id="cantidad">
            </div>
            
            <div class="form-group text-right">
                <input type="submit" class="btn btn-primary" value="Crear Servicio">
            </div>
        </form>
    </div>
</div>

@endsection