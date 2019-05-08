@extends('layouts.app')

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BNHA</title>  
    </head>
    <body>

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
            <a class="nav-link " href="about.html"><i class="far fa-lightbulb"></i>Sobre</a>
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


    

       <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Custom scripts for this template -->
      <script src="js/clean-blog.min.js"></script>
      
    </body>

</html>
