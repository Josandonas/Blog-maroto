@extends('layouts.app')
@section('content')
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">

    <a class="navbar-brand justify-content-between" > <i class="fas fa-user-circle"></i>{{ Auth::user()->name }}</a>

      <ul class=" navbar-nav mr-right mt-2 mt-lg-0 ">

        <li class="nav-item">
            <a class="nav-link " href='poslog'><i class="fas fa-home"></i>Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href='about'><i class="fas fa-shopping-basket"></i>Loja</a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href='contato'><i class="fas fa-phone-square"></i> Contato </a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href='about'><i class="far fa-lightbulb"></i> Sobre </a>
        </li>

        <li>
          <a class="nav-item" href="{{ url('/logout') }}"  onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-out-alt"></i>Sair
          </a>
      </li>

</nav>


  <!-- Page Header -->
  <header class="masthead" style="background-image: url({{ asset('img/old.jpg') }})">
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
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur voluptates odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam ducimus consectetur?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum in officia voluptas voluptatibus, minus!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi aliquid ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste neque sit tempora!</p>
      </div>
    </div>
  </div>

  <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <ul class="list-inline text-center">
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fa-stack fa-lg">
                      <i class="fas fa-circle fa-stack-2x"></i>
                      <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fa-stack fa-lg">
                      <i class="fas fa-circle fa-stack-2x"></i>
                      <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                    </span>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <span class="fa-stack fa-lg">
                      <i class="fas fa-circle fa-stack-2x"></i>
                      <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                    </span>
                  </a>
                </li>
              </ul>
              <p class="copyright text-muted">Copyright &copy; Your Website 2019</p>
            </div>
          </div>
        </div>
      </footer>

  @endsection
