@extends('layouts.app', [
'jumboTitle' => 'Modulo de pago de servicios',
'jumboDesc' => 'Paga cuando quieras desde donde estes'
])

@section('content')

<div class="alert {{ Session::get('alertClass') }}" role="alert">
    {{ Session::get('payMsg') }}
</div>

<div class="row">
    <div class="col-6 offset-3">
        <form action="{{ route('service.store') }}" method="Post">
            @csrf
            <div class="form-group">

                <label for="serviceName">Nombre del Servicio</label>
                <select name="serviceName" id="nombre" class="form-control">
                    <option selected>Selecciona un Servicio</option>
                    @foreach ($services as $service)
                    <option value="{{ $service->nombre }}">{{ $service->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="importe">Importe</label>
                <input type="number" class="form-control" name="importe" id="importe">
            </div>

            <div class="form-group text-right">
                <input type="submit" class="btn btn-primary" value="Pagar Servicio">
            </div>
        </form>
    </div>
</div>

@endsection