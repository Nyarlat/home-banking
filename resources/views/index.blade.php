@extends('layouts.app', [
'jumboTitle' => 'Bienvenido a MBanking, que querés hacer hoy?',
'jumboDesc' => 'En este sitio podes operar con tu cuenta mirando el balance, haciendo transferencias, pagando servicios y armando inversiones!'
])

@section('content')

<div class="container">
    <div class="row" style="padding: 2%">
        <div class="col col-margin">
            <div class="card text-center">
                <i class="fas fa-university img-index" alt="balance"></i>
                <div class="card-body">
                    <h5 class="card-title">Balance</h5>
                    <p class="card-text">Controle sus gastos y proyecte sus futuros movimientos.</p>
                    <a href="{!! url('/balance') !!}" class="btn btn-secondary btnHome">Ver Balance</a>
                </div>
            </div>
        </div>

        <div class="col col-margin">
            <div class="card text-center">
                <i class="fas fa-money-check-alt img-index" alt="pago de servicios"></i>
                <div class="card-body">
                    <h5 class="card-title">Pago de Servicios</h5>
                    <p class="card-text">Paga todo lo que necesites desde donde estes.</p>
                    <a href="{!! url('/service') !!}" class="btn btn-secondary btnHome">Pagar Servicios</a>
                </div>
            </div>
        </div>

        <div class="col col-margin">
            <div class="card text-center">
                <i class="fas fa-chart-bar img-index" alt="inversiones"></i>
                <div class="card-body">
                    <h5 class="card-title">Inversiones</h5>
                    <p class="card-text">Aumenta tus ahorros en el circuito financiero.</p>
                    <a href="{!! url('/investments') !!}" class="btn btn-secondary btnHome">Invertir</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection