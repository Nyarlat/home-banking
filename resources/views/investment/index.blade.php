@extends('layouts.app', [
'jumboTitle' => 'Modulo de Inversiones',
'jumboDesc' => 'Invierte en tu futuro'
])

@section('content')

<div class="container">
    <div class="row text-center">
        <div class="alert alert-primary" role="alert">
            <strong>Saldo $ {{ $salary }}</strong>
        </div>
        
        
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope='col'>Empresa</th>
                    <th scope='col'>Acciones</th>
                    <th scope='col'>Valor de Accion</th>
                    <th class="text-right" scope='col'>Compra/Venta de Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($investments as $inv)
                <tr>
                    <td>{{ $inv->empresa }}</td>
                    <td>{{ $inv->acciones }} / {{ $inv->total }}</td>
                    <td>{{ $inv->valor }}</td>
                    <td class="text-right">
                        <a href="{{ route('investment.buy', ['id' => $inv->id]) }}" class="btn btn-primary">Comprar</a>
                        <a href="{{ route('investment.sell', ['id' => $inv->id]) }}" class="btn btn-secondary">Vender</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ url('investments/create') }}" class="btn btn-outline-secondary float-right">Añadir Accion</a>
    </div>

</div>

@endsection