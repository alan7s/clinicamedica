@extends('adminlte::page')

@section('title', "Detalhes do {$profile->nome}")

@section('content_header')
    <h1>Detalhes do <b>{{ $profile->nome }}</b></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Nome: </strong> {{ $profile->nome }}
                </li>
                <li>
                    <strong>codigo: </strong> {{ $profile->id }}
                </li>
                <li>
                    <strong>email: </strong> {{ $profile->email }}
                </li>
                <li>
                    <strong>telefone: </strong> {{ $profile->telefone }}
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