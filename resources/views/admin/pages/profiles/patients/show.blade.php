@extends('adminlte::page')

@section('title', "Dados de {$profile->nome}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('profiles.index') }}">Profile</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('patients.profile.index', $profile->id) }}">{{$profile->nome}}</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('patients.profile.show', [$profile->id, $patient->id]) }}">Deletar</a></li>
    </ol>
    <h1>Dados de {{$profile->nome}}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li><strong>ID Paciente:</strong> {{$patient->id}}</li>
                <li><strong>Peso:</strong> {{$patient->peso}}</li>
                <li><strong>Altura:</strong> {{$patient->altura}}</li>
                <li><strong>Tipo Sanguineo:</strong> {{$patient->tiposanguineo}}</li>
            </ul>
        </div>
        <div class="card-footer">
            <form action="{{route('patients.profile.destroy', [$profile->id, $patient->id])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Deletar estes dados de {{$profile->nome}}</button>
            </form>
        </div>
    </div>
@endsection