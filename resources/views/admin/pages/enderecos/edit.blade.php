@extends('adminlte::page')

@section('title', "Editar o endereço")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('enderecos.index') }}">Endereço</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('enderecos.edit', $endereco->id) }}">Editar</a></li>
    </ol>
    <h1>Editar o endereço</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('enderecos.update', $endereco->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('admin.pages.enderecos._partials.form')
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Atualizar endereço</button>
                </div>
            </form>
        </div>
    </div>
@endsection