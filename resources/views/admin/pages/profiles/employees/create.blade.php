@extends('adminlte::page')

@section('title', "Adicionar novo detalhe ao {$profile->nome}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('profiles.index') }}">profile</a></li>
        <li class="breadcrumb-item"><a href="{{ route('profiles.show', $profile->id) }}">{{$profile->nome}}</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('employees.profile.create', $profile->id) }}">Detalhes</a></li>
    </ol>
    <h1>Adicionar novo detalhe ao {{$profile->nome}}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('employees.profile.store', $profile->id)}}" method="POST">
                @include('admin.pages.profiles.employees._partials.form')
            </form>
        </div>
    </div>
@endsection