  @extends('layouts.app')
  @section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" > <i class="fas fa-user-circle"></i>{{ Auth::user()->name }}</a>
  </nav>
  <ul class="nav navbar-nav ml-auto">
  	 <li class="nav-item">
      <a class="nav-link "  href='/poslog'> <i class="fas fa-users"></i>Blog</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href='loja'> <i class="fas fa-store"></i>Loja </a>
    </li>

    <li class="nav-item active">
      <a class="nav-link " href="#"> <i class="fas fa-shopping-bag"></i>Sacola</a>
    </li>

<!--     <li class="nav-item">
      <a class="nav-link " href='pedi'> <i class="fas fa-list-ol"></i>Pedidos</a>
    </li> -->

    <li class="nav-item">
      <a class="nav-link " href='about'><i class="far fa-lightbulb"></i> Sobre </a>
    </li>

    <li class="nav-item">
      <a href="{{ url('/logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button type="button" class="btn btn-danger ">Sair <i class="fas fa-sign-out-alt"></i></button></a>
    </li>
  </ul>
</nav>

<br>

<form action="{{ route( "pede") }}" method="POST">
@csrf
<div class="container">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Nome do Produto</th>
        <th scope="col">Valor</th>
        <th scope="col">Retirar</th>
      </tr>
    </thead>
    <tbody>
@foreach( $prod as $produto )
      <tr>
          <th scope="row">{{ $produto->id }}</th>
          <td>{{ $produto->nome }}</td>
          
          <td>R$ {{ $produto->valor }},00 </td>
          
        
        <td><a href="/apagarprod/{{$produto->id}}" class="btn btn-sm btn-outline-danger">Apagar<i class="fas fa-trash-alt"></i></a></td>
        
      </tr>
@endforeach            
    </tbody>
  </table>
    <center><h3><div>Total: R$ {{$total}},00 </div></h3></center>

    <div id="gerarpdf"><button type="submit" href='pede' class="btn btn-success btn-lg btn-block">Finalizar Compra</button></div>
  </form>
</div>
<br>
<br>
<div class="container d-none">
  <div id="submit">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Código</th>
          <th scope="col">Nome do Produto</th>
          <th scope="col">Valor</th>
        </tr>
      </thead>
      <tbody>
@foreach( $prod as $produto )
        <tr>
          <th scope="row">{{ $produto->id }}</th>
          <td>{{ $produto->nome }}</td>
          <td>R$ {{ $produto->valor }},00 </td>
        </tr>
@endforeach            
      </tbody>
    </table>
      <center><h3><div>Total: R$ {{$total}},00 </div></h3></center>
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
<script> 
  document.getElementById('gerarpdf').onclick = printDiv       
  function printDiv(e){
      var printContents = document.getElementById('submit').innerHTML;
      var originalContents = document.body.innerHTML;
      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
  }
</script>
  @endsection