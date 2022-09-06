@extends('site.layouts.basico')

@section('titulo', 'Home')

@section('conteudo')


<main>
    <div class="container-fluid">
        <div id="mainSlider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                <li data-target="#mainSlider" data-slide-to="1"></li>
                <li data-target="#mainSlider" data-slide-to="2"></li>
                <li data-target="#mainSlider" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/banner01.jpg')}}" class="d-block w-100" alt="Projetos">
                    <div class="carousel-caption d-nome d-md-block">
                        <h2>Quer administrar seu condomínio?</h2>
                        <p>Conte conosco</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('img/banner02.jpg')}}" class="d-block w-100" alt="Projetos">
                    <div class="carousel-caption d-nome d-md-block">
                        <h2>Quer administrar seu condomínio?</h2>
                        <p>Conte conosco</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('img/banner03.jpg')}}" class="d-block w-100" alt="Projetos">
                    <div class="carousel-caption d-nome d-md-block">
                        <h2>Quer administrar seu condomínio?</h2>
                        <p>Conte conosco;</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('img/banner04.jpg')}}" class="d-block w-100" alt="Projetos">
                    <div class="carousel-caption d-nome d-md-block">
                        <h2>Quer administrar seu condomínio?</h2>
                        <p>Conte conosco;</p>
                    </div>
                </div>
            </div>
            <a href="#mainSlider" class="carousel-control-prev" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a href="#mainSlider" class="carousel-control-next" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div id="data-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 circle-box">
                        <div id="circleA">
                            <p>projetos entregues</p>
                        </div>
                    </div>
                    <div class="col-md-3 circle-box">
                        <div id="circleB">
                            <p>projetos entregues</p>
                        </div>
                    </div>
                    <div class="col-md-3 circle-box">
                        <div id="circleC">
                            <p>projetos entregues</p>
                        </div>
                    </div>
                    <div class="col-md-3 circle-box">
                        <div id="circleD">
                            <p>projetos entregues</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection


