@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
    <a class="navbar-brand justify-content-between"  href='/' ><i class="fas fa-arrow-left"></i>Voltar</a>
    <ul class=" navbar-nav mr-right mt-2 mt-lg-0 ">
    <li class="nav-item">
        <a class="nav-link-active " ><i class="fas fa-sign-in-alt"></i>Login</a>
        </li>

    <li class="nav-item">
        <a class="nav-link " href='about2'><i class="far fa-lightbulb"></i> Sobre </a>
    </li>
</nav>
<br>
<header class="masthead" style="background-image: url( {{ asset('img/login.jpg') }})">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <center><div class="card-header" ><i class="fas fa-user-astronaut"></i>Login<i class="fas fa-user-astronaut"></i></div></center>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail: </label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-6 col-form-label text-md-right">Senha:</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12 offset-md-9">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember"> Lembre-se de mim </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-5 offset-md-4">
                                    <button type="submit" class="btn btn-success">Entrar</button></div>
                                <div class="col-md-9 offset-md-4">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}"><button type="button" class="btn btn-light">Esqueceu sua senha</button> </a>
                                    @endif
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
