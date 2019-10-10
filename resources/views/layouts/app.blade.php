<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7005a1e6a6.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('fonts/minipax/minipax_bold_macroman/stylesheet.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('fonts/minipax/minipax_regular_macroman/stylesheet.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('fonts/raleway-v14-latin/stylesheet.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/executive.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">
    <title>Home Banking</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <i class="fas fa-coins navbar-brand fa-color" href="#"></i>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{!! url('/') !!}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{!! url('/balance') !!}">Balance</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{!! url('/service') !!}">Pago de Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{!! url('/investments') !!}">Inversiones</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 raleFont" style='font-weight: bold'>{{ $jumboTitle }}</h1>
            <p class="lead raleFont">{{ $jumboDesc }}</p>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <div class="container">
            <div class="row" style="margin-top: 32px">
                <div class="col">
                    <div class="pie bg-dark" style='padding-top: 1%'>
                        <p class="textPie">Todos los derechos reservados a <em>Elefante de Caja</em> ©.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    @yield('scripts')
</body>

</html>