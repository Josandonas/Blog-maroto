@extends('layouts.app')
@section('content')
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
        <a class="navbar-brand justify-content-between" ></a>
      <ul class=" navbar-nav mr-right mt-2 mt-lg-0 ">

        <li class="nav-item">
            <a class="nav-link " href='\'><i class="fas fa-home"></i>Home</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link " href='about'><i class="far fa-lightbulb"></i> Sobre </a>
        </li>


</nav>


  <!-- Page Header -->
  <header class="masthead" style="background-image: url({{ asset('img/aboutimg.png') }})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Sobre o Site</h1>
            <span class="subheading">Este blog foi montado por 2 amigos que amam Boku no Hero/My Hero Academya para
            trazer novidades a respeito do mangá e anime e disponibilizar produtos personalizados da franquia.</span>
          </div>
        </div>
      </div>
    </div>
  </header>


  <hr>

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
                  <p class="copyright text-muted">Copyright &copy; BNHA 2019</p>
                </div>
              </div>
            </div>
          </footer>

  @endsection
