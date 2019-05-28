@extends('layouts.app')
@section('content')

<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">

      <a class="navbar-brand justify-content-between" >BNHA</a>


        <ul class=" navbar-nav mr-right mt-2 mt-lg-0 ">
          <li class="nav-item">
            <a class="nav-link " href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i>Login</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{ route('register') }}"><i class="fas fa-clipboard-list"></i>Registre-se</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href='about2'><i class="far fa-lightbulb"></i>Sobre</a>
          </li>
        </ul>
  </nav>

  <header class="masthead" style="background-image: url( {{ asset('img/home-bg.png') }})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>BNHA</h1>
            <span class="subheading">Comunidade e Loja</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->

<div class="container-fluid">
    <div class="card border-primary text-white bg-dark mb-3 " class="mx-auto">
      @foreach( $postagens as $posts )
          <img class="card-img-top" src="/storage/{{$posts->arquivo}}">
          <div class="card-body">
          <center><h2 class="card-title"> {{ $posts->nomePost }} </h2></center>
            <p class="card-text">{{ $posts->texto }}</p>
            <footer class="blockquote-footer">
              <small>
                <cite title="Título da fonte">{{$posts->nusuario}}</cite>
              </small>
            </footer>
          </div>
      @endforeach
      @foreach( $comentarios as $coment )
          <div>
            <center><h4>Comentários <i class="fas fa-comments"></i></h4></center>
          </div>
          <img class="card-img-top" src="/storage/{{$coment->arquivo}}">
          <div class="card-body">
            <p class="card-text">{{ $coment->texto_comentario}}</p>
            <footer class="blockquote-footer">
              <small>
                <cite title="Título da fonte">{{$coment->autor}}</cite>
              </small>
            </footer>
          </div>      
      @endforeach
    </div>
</div>
  <!-- Footer -->
  <footer>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <ul class="list-inline text-center">
                <li class="list-inline-item">
                  <a href="https://twitter.com/BokuNoHeroBr">
                    <span class="fa-stack fa-lg">
                      <i class="fas fa-circle fa-stack-2x"></i>
                      <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/bokunoherobrasil/">
                    <span class="fa-stack fa-lg">
                      <i class="fas fa-circle fa-stack-2x"></i>
                      <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                    </span>
                  </a>
                </li>
              </ul>
              <p class="copyright text-muted">Copyright &copy; BNH 2019</p>
            </div>
          </div>
        </div>
      </footer>
  @endsection


