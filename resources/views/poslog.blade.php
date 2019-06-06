  @extends('layouts.app')
  @section('content')
  <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">

        <a class="navbar-brand justify-content-between" > <i class="fas fa-user-circle"></i>{{ Auth::user()->name }}</a>

          <ul class=" navbar-nav mr-right mt-2 mt-lg-0 ">
            <li class="nav-item">
              <a class="nav-link " href='contato'><i class="fas fa-phone-square"></i> Contato </a>
            </li>

            <li class="nav-item">
              <a class="nav-link "  href='chat'><i class="fas fa-comments"></i> Chat</a>
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
    <p>



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

  <center>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalLongoExemplo">Publicar<i class="fas fa-pencil-alt"></i></button>
  </center>

  <br>

 


@foreach( $posts as $post )
  <div class="container">
    <div class="card text-white bg-dark mb-3 " class="mx-auto">
            <div class="card-header bg-dark">
              <div class="d-flex justify-content-end">
                  <a href="/apagarpostagem/{{$post->id}}" class="btn btn-sm btn-outline-danger">Apagar<i class="fas fa-trash-alt"></i></a>
              </div>
            </div>
              <img class="card-img-top" src="/storage/{{$post->arquivo}}">
              <div class="card-body">
                <center><h2 class="card-title"> {{ $post->nomePost }} </h2></center>
                  <p class="card-text">{{ $post->texto }}</p>                
                    <small>
                      <cite title="Título da fonte">{{$post->nusuario}}</cite>
                    </small>
              <div>
                <center> <a href="/postaqui/{{$post->id}}" class="btn btn-success btn-lg btn-block">Ver Publicação</a></center>
              </div>
              </div>
    </div>
  </div>                                       
@endforeach
<div> {!! $posts->render() !!}
  <br>
  <!-- O lugar onde as imgens aparecem tal que são configuradas por aqui -->


<div class="container" class="album py-5 bg-dark mb-3">
  <div class="card text-white bg-dark mb-3 ">
      <center><div class="card-header text-white bg-dark mb-3"><i class="fas fa-images"></i> Galeria<i class="fas fa-images"></i></div></center>
      <div class="row">
            @foreach($posts as $post )
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6">            
                <a href="/postaqui/{{$post->id}}"><img class="card-img-top" src="/storage/{{$post->arquivo}}" class="img-responsive"></a>

            </div>
            @endforeach
      </div>
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
            <p class="copyright text-muted">Copyright &copy; BNHA 2019</p>
          </div>
        </div>
      </div>
    </footer>
    <!--Fim Footer -->
  @endsection
