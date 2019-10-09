@extends('layouts.app', [
'jumboTitle' => 'Modulo de Balance Financiero',
'jumboDesc' => 'Registro de movimientos'
])

@section('content')

<div class="row">
    <div class="alert alert-primary" role="alert">
        <strong>Saldo $ {{ $salary }}</strong>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Fecha</th>
                <th scope="col">Descripción</th>
                <th scope="col">Importe</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($balance as $item)
            <tr>
                <th scope="row">{{ date('d-m-Y', strtotime($item->fecha))}}</th>
                <td>{{ $item->desc }}</td>
                <td>{{ $item->importe }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection