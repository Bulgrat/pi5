<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="76x76" href="images/logo.png">
    <link rel="icon" type="image/png" href="images/logo.png">
    <title>
        BWG Dashboard
    </title>

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,400;1,200&display=swap"
        rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link rel="stylesheet"
        href="{{URL::asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css')}}">
</head>

<body class="g-sidenav-show  bg-gray-100">

    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                        <!-- Barra de pesquisa
                        <div class="input-group">


                            <input type="text" class="form-control" placeholder="Pesquisar">
                        </div>
                    </div>

                            <form action="/search">
                                <input type="search" class="form-control" placeholder="Pesquisar">
                            <form>
                        </div> -->

                    </div>
                    <!-- Fim da barra de pesquisa -->


                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="profile" class="nav-link text-body font-weight-bold px-0">
                                <!-- Informações de usuário logado -->

                                <span class="d-sm-inline d-none"></span>

                            </a>
                        </li>


                        <span class="d-sm-inline d-none">Olá, {{ Auth::User()->name}} </span>
                        <ul>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                        this.closest('form').submit();">
                                    {{ __('Sair') }}
                                </x-dropdown-link>
                            </form>


                        </ul>


                </div>
            </div>
        </nav>
        @if(Auth()->user()->isAdmin == 1)
        <div class="container">
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <button onclick="window.location.href='/users'" type="button"
                    class="btn btn-outline-light">Usuários</button>
                <button onclick="window.location.href='/games'" type="button"
                    class="btn btn-outline-light">Jogos</button>
                <!--  <button onclick="window.location.href='/vendas'" type="button" class="btn btn-outline-light">Vendas</button> -->
                <button onclick="window.location.href='/category'" type="button"
                    class="btn btn-outline-light">Categorias</button>
                <button onclick="window.location.href='/historico'" type="button"
                    class="btn btn-outline-light">hístorico</button>
            </div>
        </div>
        @else
        <script>
        alert("você não é um administrador")
        </script>
        @endif
        @yield('content')

        <!-- Aqui entram as tabelas -->

        <!-- Rodapé -->
        <footer class="footer pt-3  ">
        </footer>
        </div>
    </main>


    <!--   Core JS Files   -->

    <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
    </script>

    <!-- Importando o js do bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

</body>

</html>