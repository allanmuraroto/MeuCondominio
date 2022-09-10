@extends('site.layouts.basico')

@section('titulo','Serviços')

<!-- ***** Welcome Area Start ***** -->
    <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero-1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="hero-content">
                        <h2>Conheça nossas Especialidades</h2>
                        <h4>Texto!</h4>
                    </div>
                    <!-- Hero Search Form -->
                    <div class="hero-search-form">
                        <!-- Tabs -->
                        <div class="nav nav-tabs" id="heroTab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places" role="tab" aria-controls="nav-places" aria-selected="true">Alugar</a>
                            <a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab" aria-controls="nav-events" aria-selected="false">Vender</a>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Social Btn -->
        <div class="hero-social-btn">
            <div class="social-title d-flex align-items-center">
                <h6>Siga nossas Redes Sociais</h6>
                <span></span>
            </div>
            <div class="social-btns">
                <a href="#"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
            </div>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->
<br/><br/><br/>
@section('conteudo')
  <!-- ***** Sobre resumo ***** -->
    <section class="dorne-about-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-content text-center">
                        <h2>Nossas <br><span>Especialidades</span></h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever 
                        since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever 
                        since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Sobre resumo End ***** -->

    <div id="services-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="main-title">Nossas Especialidades</h3>
                </div>
                <div class="col-md-4 service-box">
                    <i class="fas fa-mobile-alt"></i>
                    <h4>Aplicativo Nativo</h4>
                    <p>Utilize nosso aplicativo em qualquer lugar!</p>
                </div>
                <div class="col-md-4 service-box">
                    <i class="fas fa-shopping-cart"></i>
                    <h4>Clube de vantagens</h4>
                    <p>Serviços na palma da mão, descontos exclusivos!</p>
                </div>
                <div class="col-md-4 service-box">
                    <i class="fas fa-paint-brush"></i>
                    <h4>Área de lazer</h4>
                    <p>Repleto de atividades!</p>
                </div>
                <div class="col-md-4 service-box">
                    <i class="fab fa-google"></i>
                    <h4>Lider em buscas</h4>
                    <p>Somos o site mais recomendado por todos os buscadores!</p>
                </div>
                <div class="col-md-4 service-box">
                    <i class="fas fa-hands-helping"></i>
                    <h4>Suporte 24 horas</h4>
                    <p>Estamos aqui para ajudar!</p>
                </div>
                <div class="col-md-4 service-box">
                    <i class="fas fa-server"></i>
                    <h4>Base de dados Sólida</h4>
                    <p>Seus dados estão seguros com a gente</p>
                </div>
            </div>
        </div>
    </div>

@endsection
