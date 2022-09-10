<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Meu Condomínio &amp; Site</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="dorne-load"></div>
    </div>

    <!-- ***** Search Form Area ***** -->
    <div class="dorne-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Buscar">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg">
                        <a class="navbar-brand" href="/"><img src="img/core-img/logo.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                <li class="nav-item active">
                                    <a class="nav-item nav-link" href="{{route('site.index')}}" id="home-menu">Home</a>
                                    {{-- <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a> --}}
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu 1 <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="index.html">Home</a>
                                        <a class="dropdown-item" href="explore.html">Explore</a>
                                        <a class="dropdown-item" href="listing.html">Listing</a>
                                        <a class="dropdown-item" href="single-listing.html">Single Listing</a>
                                        <a class="dropdown-item" href="contact.html">Contact</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu 2 <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                        <a class="dropdown-item" href="index.html">Home</a>
                                        <a class="dropdown-item" href="explore.html">Explore</a>
                                        <a class="dropdown-item" href="listing.html">Listing</a>
                                        <a class="dropdown-item" href="single-listing.html">Single Listing</a>
                                        <a class="dropdown-item" href="contact.html">Contact</a>
                                    </div>
                                </li>
                                <li class="nav-item">                                    
                                    <a class="nav-item nav-link" href="{{route('site.quemsomos')}}" id="about-menu">Sobre</a>
                                </li>

                                <li class="nav-item">                                    
                                    <a class="nav-item nav-link" href="{{route('site.servicos')}}" id="services-menu">Serviços</a>
                                </li>

                                 <li class="nav-item">                                    
                                    <a class="nav-item nav-link" href="{{route('site.time')}}" id="team-menu">Time</a>
                                </li>

                                <li class="nav-item">                                    
                                    <a class="nav-item nav-link" href="{{route('site.clientes')}}" id="clientes-menu">Clientes</a>
                                </li>

                                <li class="nav-item">                                    
                                    <a class="nav-item nav-link" href="{{route('site.contato')}}" id="contact-menu">Contato</a>
                                </li>                    

                            </ul>
                            <!-- Search btn -->
                            <div class="dorne-search-btn">
                                <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i> Buscar</a>
                            </div>
                            <!-- Signin btn -->
                            <div class="dorne-signin-btn">
                                <a href="#">Login / Cadastro</a>
                            </div>
                            <!-- Add listings btn -->
                            <div class="dorne-add-listings-btn">
                                <a href="#" class="btn dorne-btn">+ Boleto</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->    

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
    
</body>

</html>
<header>
    {{-- <div class="container" id="nav-container">
        <nav class="navbar navbar-expand-lg fixed-top">
            <a href="#" class="navbar-brand">
                <img id ="logo" src="img/logo.png" alt="Meu Condomínio"> Meu Condomínio
            </a> --}}
            {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" 
            aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation"> 
                <span class="navbar-toggler-icon"></span>
            </button> --}}
            {{-- <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="{{route('site.index')}}" id="home-menu">Home</a>
                    <a class="nav-item nav-link" href="{{route('site.quemsomos')}}" id="about-menu">Sobre</a>
                    <a class="nav-item nav-link" href="{{route('site.servicos')}}" id="services-menu">Serviços</a>
                    <a class="nav-item nav-link" href="{{route('site.time')}}" id="team-menu">Time</a>
                    <a class="nav-item nav-link" href="{{route('site.clientes')}}" id="clientes-menu">Clientes</a>
                    <a class="nav-item nav-link" href="{{route('site.contato')}}" id="contact-menu">Contato</a>
                </div> --}}
{{-- 
            </div>
        </nav>
    </div> --}}
</header>
