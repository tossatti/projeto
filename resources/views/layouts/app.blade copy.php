<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        {{-- <!-- CSS -->
        <link rel="stylesheet" href="{{asset('bootstrap/dist/css/bootstrap.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        
        
        <!-- @vite(['resources/scss/app.scss','resourses/js/app.js']) -->
        <!-- /CSS -->--}}
        <link rel="stylesheet" href="{{asset('bootstrap-5.3.3/dist/css/bootstrap.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        
         
        
    </head>
    <body>
        <div class="wrapper">
            <!-- menu  -->
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" >Meka</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <!-- <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li> -->
                            <!-- item do dropdown - colaborador -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Colaborador</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('colaborador.index') }}">Lista de Colaboradores</a>
                                    </li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('colaborador.create') }}">Cadastrar Colaborador</a>
                                    </li>
                                </ul>
                            </li><!-- / item do dropdown -->
                            <!-- item do dropdown - Almoxarifado -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Almoxarifado</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#">Almoxarifado</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Another action</a>
                                    </li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </li>
                                </ul>
                            </li><!-- / item do dropdown - Almoxarifado -->
                            <!-- item do dropdown - Financeiro -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Financeiro</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#">Financeiro</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Another action</a>
                                    </li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </li>
                                </ul>
                            </li><!-- / item do dropdown - Financeiro -->
                            <!-- item do dropdown - Contratos -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Contratos</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#">Contratos</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Another action</a>
                                    </li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </li>
                                </ul>
                            </li><!-- / item do dropdown - Contratos -->
                            <!-- item do dropdown - Obras -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Obras</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#">Obras</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Another action</a>
                                    </li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </li>
                                </ul>
                            </li><!-- / item do dropdown -->
                            <li class="nav-item">
                                <a class="nav-link disabled" aria-disabled="true">Data/hora atual: {{\Carbon\Carbon::now()->format('d/m/Y H:i') }} </a>
                            </li>
                        </ul><!-- / fim dos itens de dropdown -->
                        <!-- pesquisa -->
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Procurar">
                            <button class="btn btn-outline-success" type="submit">Procurar</button>
                        </form><!-- / pesquisa -->
                    </div>
                </div>
            </nav><!-- / menu -->
        </div>

        <!-- container para conteúdo -->
        <div class="container border" id="conteúdo"> <!-- container para conteúdo -->
            @yield('content')
        </div><!-- /container para conteúdo -->
        



    <!-- CSS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <!--<script src="../../../public/bootstrap/dist/js/bootstrap.min.js"></script>-->
    
    <!-- / CSS -->

    

    </body>
</html>
