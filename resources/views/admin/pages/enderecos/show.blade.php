@extends('adminlte::page')

@section('title', "Detalhes do endereço")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('enderecos.index') }}">Endereco</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('enderecos.show', $endereco->id) }}">Deletar</a></li>
    </ol>
    <h1>Detalhes do endereço</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>ID: </strong> {{ $endereco->id }}
                </li>
                <li>
                    <strong>CEP: </strong> {{ $endereco->cep }}
                </li>
                <li>
                    <strong>Logradouro: </strong> {{ $endereco->logradouro }}
                </li>
                <li>
                    <strong>Bairro: </strong> {{ $endereco->bairro }}
                </li>
                <li>
                    <strong>Cidade: </strong> {{ $endereco->cidade }}
                </li>
                <li>
                    <strong>Estado: </strong> {{ $endereco->estado }}
                </li>
            </ul>
            <form action="{{ route('enderecos.destroy', $endereco->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Apagar {{ $endereco->nome }}</button>
            </form>
        </div>
    </div>
@endsection    