@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1> Situação <i class="fab fa-grav fa-1x  "></i> </h1> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Você está Logado! <i class="far fa-smile-beam fa-spin"></i> 

                </div>
                <div class="card-footer text-muted">
                    <a href="home/poslog"><button  type="button" class="btn btn-success btn-lg">Explorar</button></a>
                    <button type="button" class="btn btn-danger btn-lg">Sair</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
