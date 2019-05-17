<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'BNHA') }}</title>

    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/clean-blog.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/clean-blog.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Bootstrap core CSS
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
     <!-- Custom fonts for this template -->

    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/clean-blog.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/clean-blog.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
</head>
<body>
    <main class="py-4">
        @yield('content')
    </main>

     </body>

  <!-- Modal -->
    <form>
        <div class="modal fade" id="ModalLongoExemplo" tabindex="-1" role="dialog" aria-labelledby="TituloModalLongoExemplo" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="TituloModalLongoExemplo">Nova Postagem <i class="fas fa-align-justify"></i></h5>
                        <button type="button" class="btn btn-danger" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Título</label>
                            <input class="form-control" type="text" placeholder="Digite um Titulo">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Conteúdo</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Digite algo"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success">Publicar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
 </html>
