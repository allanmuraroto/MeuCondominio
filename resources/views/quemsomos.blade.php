@extends('site.layouts.basico')

@section('titulo','Quem Somos')

@section('conteudo')
<div id="about-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="main-title">Sobre meu Condomínio</h3>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="img/recepcao.jpg" alt="Mc">
            </div>
            <div class="col-md-6">
                <h3 class="about-title">Administrando seu futuro</h3>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <ul id="about-list">
                    <li><i class="fas fa-check"></i>Atendimento rápido</li>
                    <li><i class="fas fa-check"></i>Competência em administrar</li>
                    <li><i class="fas fa-check"></i>Suporte 24 horas</li>
                    <li><i class="fas fa-check"></i>Preço baixo</li>
                <ul>
            </div>
        </div>
    </div>
</div>
@endsection
