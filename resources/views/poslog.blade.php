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
                <a href="/apagarpostagem/{{$post['post']->id}}" class="btn btn-sm btn-outline-danger">Apagar<i class="fas fa-trash-alt"></i></a>
            </div>
          </div>
            <img class="card-img-top" src="/storage/{{$post['post']->arquivo}}">
            <div class="card-body">
              <center><h2 class="card-title"> {{ $post['post']->nomePost }} </h2></center>
                <p class="card-text">{{ $post['post']->texto }}</p>                
                  <small>
                    <cite title="Título da fonte">-{{$post['post']->nusuario}}</cite>
                  </small>
            </div>
          <div class="text-center">
                  <form action="/comentar" method="POST"  enctype="multipart/form-data">
                  @csrf
                    <div class="container-fluid">
                      <div class="modal-header">
                          <h5 class="modal-title" id="coment">Comentários<i class="far fa-comment-alt"></i></h5>
                      </div>
                                            <div class="card-body">
                          <div class="form-group">
                              <label for="exampleFormControlTextarea1">Conteúdo do Comentário</label>
                              <textarea class="form-control" name="texto" id="exampleFormControlTextarea1" rows="3" placeholder="Digite algo"></textarea>
                          </div>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="arquivo" name="arquivo">
                            <label class="custom-file-label" for="arquivo">Escolha um arquivo</label>
                          </div>
                          <input type="hidden" name="nome" value="{{ Auth::user()->name }}">
                          <input type="hidden" name="idpost" value="{{ $post['post']->id }}">
                              <br>
                              <br>                        
                            <div class="d-flex justify-content-end">
                              <br>
                              <br>
                              <button type="submit" class="btn btn-primary">Comentar</button>
                            </div>
                      </div>
                    </div>
                  </form>
            </div>
  @foreach( $post['comentarios'] as $coment )
        <div class="card text-white bg-dark mb-3 " class="mx-auto">
          <div class="card-body">
                  <img class="card-img-top" src="/storage/{{$coment->arqui}}">
                  <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <a href="/apagarcomentario/{{$coment->id}}" class="btn btn-sm btn-outline-danger">Apagar Comentário<i class="fas fa-trash-alt"></i></a>
                    </div>
                    <p class="card-text">{{ $coment->texto_comentario}}</p>
                      <small>
                        <cite title="Título da fonte">{{$coment->autor}}</cite>
                      </small>
                  </div>
            </div>
          </div>
@endforeach
  </div>
</div>
@endforeach

  <br>
  <!-- O lugar onde as imgens aparecem tal que são configuradas por aqui -->


      <div class="album py-5 bg-dark mb-3">
          <center><div class="card-header text-white bg-dark mb-3"><i class="fas fa-images"></i> Galeria<i class="fas fa-images"></i></div></center>
        <div class="container">
          <div class="card text-white bg-dark mb-3 ">
              <div class="row">
                   @foreach($posts as $post )
                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6">            
                      <img class="card-img-top" src="/storage/{{$post['post']->arquivo}}" class="img-responsive">
                    <div class="card-body">
                    </div>
                    </div>
                    @endforeach
              </div>
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
