@extends('adminlte::page')

@section('title', "Detalhes do {$profile->nome}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('profiles.index') }}">Profile</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('profiles.show', $profile->id) }}">Detalhes</a></li>
    </ol>
    <h1>Detalhes do <b>{{ $profile->nome }}</b></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>ID: </strong> {{ $profile->id }}
                </li>
                <li>
                    <strong>Nome: </strong> {{ $profile->nome }}
                </li>
                <li>
                    <strong>Email: </strong> {{ $profile->email }}
                </li>
                <li>
                    <strong>Telefone: </strong> {{ $profile->telefone }}
                </li>
                <li>
                    <strong>CEP: </strong> {{ $profile->cep }}
                </li>
                <li>
                    <strong>Logradouro: </strong> {{ $profile->logradouro }}
                </li>
                <li>
                    <strong>Bairro: </strong> {{ $profile->bairro }}
                </li>
                <li>
                    <strong>Cidade: </strong> {{ $profile->telefone }}
                </li>
                <li>
                    <strong>Estado: </strong> {{ $profile->telefone }}
                </li>
            </ul>
            <form action="{{ route('profiles.destroy', $profile->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Apagar {{ $profile->nome }}</button>
            </form>
        </div>
    </div>
@endsection    