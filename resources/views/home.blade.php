@extends('layouts.app')
@section('content')

<header class="masthead" style="background-image:url({{ asset('img/contimg.png') }})">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1> Situação <i class="fab fa-grav fa-1x  "></i> </h1> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Você está Logado! <i class="far fa-smile-beam fa-spin"></i>
                    <h3> Bem Vindo!! {{ Auth::user()->name }}</h3>
                </div>
                <div class="card-footer text-muted" align="center">
                  <a href="home/poslog"><button  type="button" class="btn btn-success btn-lg">Continuar para o Fórum</button></a>
                </div>
                <div align="center"> 
                  <a href="{{ url('/logout') }}"  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"><button type="button" class="btn btn-danger btn-lg ">Sair <i class="fas fa-skull-crossbones "></i></button></a>
                </div>
            </div>
        </div>
    </div>
</div>
</header>

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
