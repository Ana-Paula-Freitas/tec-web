@extends('layout.padrao')

@section('conteudo')

<h3 class="justify-center mt-4 mb-4">Usuários</h3>

<div class="row">

    @foreach($users as $user)

    <div class="col-sm-6 col-md-4 mb-3">
        <div class="card text-center">
            <div class="card-body">
                <p class="card-text">{{ $user->name }}</p>
                <a href="/usuarios/{{ $user->id }}" class="btn btn-primary">Visualizar</a>
            </div>
        </div>
    </div>

    @endforeach

</div>

@endsection
