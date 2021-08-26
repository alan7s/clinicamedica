@extends('adminlte::page')

@section('title', 'Cadastrar novo perfil')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('profiles.index') }}">Profile</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('profiles.create') }}">Cadastrar</a></li>
    </ol>
    <h1>Cadastrar novo perfil</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('profiles.store') }}" class="form" method="POST">
                @csrf

                @include('admin.pages.profiles._partials.form')
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Cadastrar perfil</button>
                </div>
            </form>
        </div>
    </div>
@endsection