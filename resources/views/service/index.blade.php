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
        <form action="{{ route('service.pay') }}" method="post">
            @csrf
            <div class="form-group">

                <label for="serviceName">Nombre del Servicio</label>
                <select name="serviceName" id="serviceName" class="form-control">
                    <option selected>Selecciona un Servicio</option>
                    @foreach ($services as $service)
                    <option value="{{ $service->nombre }}"> {{ $service->nombre }} </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="importe">Importe</label>
                <input type="number" class="form-control" name="importe" id="importe">
            </div>

            <div class="form-group">
                <a href="{{ url('service/create') }}" class="btn btn-outline-secondary float-left">Añadir Servicio</a>
                <input type="submit" class="btn btn-primary float-right" value="Pagar Servicio">
            </div>
        </form>
    </div>
</div>

@endsection