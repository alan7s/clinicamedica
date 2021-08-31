@extends('adminlte::page')

@section('title', "Cadastrar novo paciente")

@section('content_header')
    {{--<ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('profiles.index') }}">profile</a></li>
        <li class="breadcrumb-item"><a href="{{ route('profiles.show', $profile->id) }}">{{$profile->nome}}</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('employees.profile.create', $profile->id) }}">Detalhes</a></li>
    </ol>--}}
    <h1>Cadastrar novo paciente</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('pacientes.store')}}" method="POST">
                @include('admin.pages.cadastros.pacientes._partials.form')
            </form>
        </div>
    </div>
@endsection