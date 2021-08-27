@extends('adminlte::page')

@section('title', 'Cadastrar novo endereco')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('enderecos.index') }}">Endereco</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('enderecos.create') }}">Cadastrar</a></li>
    </ol>
    <h1>Cadastrar novo endereco</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('enderecos.store') }}" class="form" method="POST">
                @csrf

                @include('admin.pages.enderecos._partials.form')
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Cadastrar endereco</button>
                </div>
            </form>
        </div>
    </div>
@endsection