<header>
    <div class="container" id="nav-container">
        <nav class="navbar navbar-expand-lg fixed-top">
            <a href="#" class="navbar-brand">
                <img id ="logo" src="img/logo.png" alt="Meu Condomínio"> Meu Condomínio
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation"> {{-- Toggle tava caps lock --}}
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="{{route('site.index')}}" id="home-menu">Home</a>
                    <a class="nav-item nav-link" href="{{route('site.quemsomos')}}" id="about-menu">Sobre</a>
                    <a class="nav-item nav-link" href="{{route('site.servicos')}}" id="services-menu">Serviços</a>
                    <a class="nav-item nav-link" href="{{route('site.time')}}" id="team-menu">Time</a>
                    <a class="nav-item nav-link" href="{{route('site.clientes')}}" id="clientes-menu">Clientes</a>
                    <a class="nav-item nav-link" href="{{route('site.contato')}}" id="contact-menu">Contato</a>
                </div>

            </div>
        </nav>
    </div>
</header>
