@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand"  href='\' ><i class="fas fa-arrow-left"></i>Voltar</a>
    </nav>
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link" ><i class="far fa-bell"></i>Redefinir Senha</a>
        </li>
    </ul>
</nav>

<header class="masthead" style="background-image: url( {{ asset('img/reset.jpg') }})">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <center><div style="background-image: url( {{ asset('img/re.jpg') }})" class="card-header"><p><i class="fa fa-bell" aria-hidden="true"></i> {{ __('Redefinir Senha') }}</div></center>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Insira seu E-mail:') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-warning"><i class="fas fa-external-link-alt"></i>
                                        {{ __('Enviar o link de redefinição de senha') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection
