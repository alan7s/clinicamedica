@extends('adminlte::page')

@section('title', "Cadastrar novo funcionário")

@section('content_header')
    {{--<ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('profiles.index') }}">profile</a></li>
        <li class="breadcrumb-item"><a href="{{ route('profiles.show', $profile->id) }}">{{$profile->nome}}</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('employees.profile.create', $profile->id) }}">Detalhes</a></li>
    </ol>--}}
    <h1>Cadastrar novo funcionário</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                <form action="{{route('enderecos.search')}}" method="POST" class="form form-inline">
                    @csrf
                    <input type="text" name="filter" placeholder="Pesquisar" class="form-control" value="{{ $filters['filter'] ?? '' }}">
                    <button type="submit" class="btn btn-dark"><i class="fas fa-search"></i> Buscar endereço</button>
                </form>
            </div>
            <div>
                <form action="{{ route('funcionarios.store')}}" method="POST">
                    @include('admin.pages.cadastros.funcionarios._partials.form')
                </form>
            </div>
        </div>
    </div>
@endsection