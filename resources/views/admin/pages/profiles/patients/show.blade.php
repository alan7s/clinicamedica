@extends('adminlte::page')

@section('title', "Detalhes {$profile->nome}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('profiles.index') }}">profileos</a></li>
        <li class="breadcrumb-item"><a href="{{ route('profiles.show', $profile->id) }}">{{$profile->nome}}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('patients.profile.create', $profile->id) }}">Detalhes</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('patients.profile.create', [$profile->id, $patient->id]) }}">Detalhes</a></li>
    </ol>
    <h1>Editar {{$profile->nome}}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li><strong>Nome:</strong> {{$profile->nome}}</li>
            </ul>
        </div>
        <div class="card-footer">
            <form action="{{route('patients.profile.destroy', [$profile->id, $patient->id])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Deletar paciente {{$profile->nome}}</button>
            </form>
        </div>
    </div>
@endsection