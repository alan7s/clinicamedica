@extends('adminlte::page')

@section('title', "Paciente {$profile->nome}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('profiles.index') }}">Profile</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('patients.profile.index', $profile->id) }}">{{$profile->nome}}</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('patients.profile.edit', [$profile->id, $patient->id]) }}">Editar</a></li>
    </ol>
    <h1>Editar paciente {{$profile->nome}}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('patients.profile.update', [$profile->id, $patient->id])}}" method="POST">
                @method('PUT')
                @include('admin.pages.profiles.patients._partials.form')
            </form>
        </div>
    </div>
@endsection