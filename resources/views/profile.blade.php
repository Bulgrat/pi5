<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        BWG Dashboard
    </title>

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

</head>

<body class="g-sidenav-show bg-gray-100">

    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">

        <!-- Navbar -->
        <nav
            class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2">
            <div class="container-fluid py-1">

                <div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0 mt-2" id="navbar">
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="users" class="nav-link text-white font-weight-bold px-0">
                                <span class="d-sm-inline d-none">
                                    < BWG Dashboard</span>
                            </a>
                        </li>
                    </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <div class="container-fluid">
            <div class="page-header min-height-300 border-radius-xl mt-4"
                style="background-image: url('https://c.tenor.com/-gkNI0FL3HwAAAAC/video-games-retro.gif'); background-position-y: 50%;">
            </div>
            <div class="card card-body mx-4 mt-n6 overflow-hidden">
                <div class="row gx-4">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">

                            <!-- Imagem de perfil -->
                            <img src="https://i.pinimg.com/736x/c6/41/d6/c641d61fc4ebf9e435456a2245f07495.jpg"
                                alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>

                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                {{ Auth::User()->nickname }}
                            </h5>
                            <p class="mb-0 font-weight-bold text-sm">
                                {{ Auth::User()->name }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-4">
            <div class="row">


                <aside class="perfil">
                    <div class="card">
                        <div class="card-header pb-0 px-3">
                            <h6 class="mb-0">Informações do usuário
                            </h6>
                        </div>
                        <div class="card-body pt-4 p-3">
                            <ul class="list-group">
                                <div class="ms-auto text-end">
                                    <a class=" text-light " href="javascript:;">Editar</a>
                                </div>
                                <li class="list-group-item border-0 d-flex p-4 mb-2 border-radius-lg">
                                    <div class="d-flex flex-column">

                                        <!-- Dados do perfil -->
                                        <!-- <h6 class="mb-3 text-sm">{{ Auth::User()->name}}</h6> -->
                                            <span class="mb-2 text-xs">Email: <span
                                                class="text-dark ms-sm-2 font-weight-bold">{{ Auth::User()->email}}</span></span>
                                            <span class="text-xs">Github: <span
                                                class="text-dark ms-sm-2 font-weight-bold">github.com/{{ Auth::User()->github }}</span></span><br>
                                            <span class="mb-2 text-xs">PIX: <span
                                                class="text-dark ms-sm-2 font-weight-bold">{{ Auth::User()->pix}}</span></span>
                                        @if(Auth()->user()->isAdmin == 0)
                                            <span class="mb-2 text-xs">Criou a conta em: <span
                                                class="text-dark ms-sm-2 font-weight-bold">{{ Auth::User()->created_at->format('d/m/Y')}}</span></span>
                                        @endif
                                    </div>

                                </li>
                            </ul>
                        </div>
                    </div>
            </div>
            </aside>

            <!-- Jogos cadastrados -->
            <aside class="jogosUser">
                <div class="col mt-4">
                    <div class="card">
                        <div class="card-header pb-0 px-3">
                            <h6 class="mb-0">Jogos cadastrados <span>(3) </span></h6>
                        </div>

                        <table id="example" class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Plataforma</th>
                                    <th scope="col">Preço</th>
                                    <th scope="col">Criado em</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jogos as $jogo)
                                @if($jogo->user_id === auth()->User()->id)
                                <tr>
                                        <td>{{$jogo->name}}</td>
                                        <td>{{$jogo->platform->name}}</td>
                                        <td>R${{$jogo->price}}</td>
                                        <td>{{$jogo->created_at->format('d/m/Y')}}</td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </aside>



            <footer class="footer pt-3  ">
                <div class="container-fluid">

                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>
