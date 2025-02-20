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
    
        <!-- menu  -->
        <nav class="navbar fixed-top" >
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <caption><h4 class="offcanvas-title text-center">Meka <br> Engenharia</h4></caption>
                        {{-- <img src="meka2.png" class="img-thumbnail img-fluid rounded mx-auto d-block">--}}
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Fechar menu"></button>
                    </div>
                    <div class="offcanvas-body" >
                        <ul class="navbar-nav justify-content-end flex-grow-1">
                            <!-- item do dropdown - colaborador -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Colaborador</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('colaborador.index') }}">Listar colaboradores</a></li>
                                    <li><a class="dropdown-item" href="{{ route('colaborador.create') }}">Cadastrar colaboradores</a></li>
                                </ul>
                            </li><!-- /item do dropdown - colaborador -->
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
                                <a class="nav-link disabled" aria-disabled="true">{{\Carbon\Carbon::now()->format('d/m/Y H:i') }} </a>
                            </li>
                        </ul><!-- / fim dos itens de dropdown -->
                    </div>
                </div>
            </div>
        </nav>
        <!-- /menu  -->        
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
