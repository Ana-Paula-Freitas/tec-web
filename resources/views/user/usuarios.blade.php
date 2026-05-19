@extends('layout.padrao')

@section('conteudo')

<h3 class="justify-center mt-4 mb-4">Usuário</h3>

<div class="card text-center" style="width: 18rem;">
    <div class="card-body">
        <p class="card-text">{{ $user->name }}</p>
        <p class="card-text">{{ $user->email }}</p>
    </div>
</div>

@endsection