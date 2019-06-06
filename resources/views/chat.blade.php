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
              <a class="nav-link " href='contato'><i class="fas fa-phone-square"></i> Contato </a>
            </li>

            <li class="nav-item">
              <a class="nav-link-active" ><i class="fas fa-comments"></i> Chat</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link " href='about'><i class="far fa-lightbulb"></i> Sobre </a>
            </li>

            <li class="nav-item">
              <a  href="{{ url('/logout') }}"  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  <i class="fas fa-sign-out-alt"></i>Sair
              </a>
          </li>

    </nav>
  <br>
 @if(session('sucesso'))
    <div class="alert alert-success" role="alert">
            {{session('sucesso')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>
    @endif
    @if(session('erro'))
    <div class="alert alert-danger" role="alert">
            {{session('erro')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>
    @endif

<div class="container-fluid">
    <div class="card-body text-white bg-dark mb-3">
        <center><div class="card-header text-white bg-dark mb-3">Enviar mensagem<i class="fas fa-paper-plane"></i></center>    
      <form class="container-fluid" action="/mensagemEmail" method="POST">
                  @csrf
              <div class="form-group">
                  <label for="exampleFormControlSelect1">Para:</label>
                  <textarea class="form-control" name="destinatario" rows="1" placeholder="Nome do usuário ou E-mail"></textarea>
              </div>

              <div class="form-group">
                  <label for="mensagem"> Assunto:</label>
                  <textarea class="form-control" name="assunto" rows="3" placeholder="Digite algo"></textarea>
              </div>

              <div class="form-group">
                  <label for="mensagem">Escreva sua Mensagem:</label>
                  <textarea class="form-control" name="mensagem" id="exampleFormControlTextarea1" rows="3" placeholder="Digite algo"></textarea>
              </div>
              <div class="form-group">
                  <center><button type="submit" class="btn btn-primary">Enviar</button></center> 
              </div>

          </form>
          <center><div class="card-footer text-white bg-dark mb-3">Plus Ultra<i class="fas fa-fist-raised"></i> </div></center>
    </div>
</div> 
<div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
              <div class="carousel-item active">
                  <a  href="https://www.subway.com/pt-BR">
                      <img src="{{ asset('img/anu2.png') }}" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                      <!-- aqui onde deve ser realizado o texto caso haja necessidade-->
                      </div>
                  </a>
              </div>


          <div class="carousel-item">
              <a href="https://www.samsung.com/br/pc/notebook-expert-x50-np350xaa-xf3br/">
                  <img src="{{ asset('img/anu4.png') }}" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                  <!-- aqui onde deve ser realizado o texto caso haja necessidade-->
                  </div>
              </a>
          </div>

        <div class="carousel-item">
          <a href="https://www.samsung.com/br/smartphones/galalxy-m20-m205/SM-M205MDAKZTO/">
              <img src="{{ asset('img/anu3.png') }}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
              <!-- aqui onde deve ser realizado o texto caso haja necessidade-->
              </div>
          </a>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
<br>
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
