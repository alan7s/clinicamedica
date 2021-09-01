@extends('adminlte::page')

@section('autor')
    
@stop

@section('title', 'Cadastrar novo endereco ()')

@section('content_header')
    <ol class="breadcrumb">
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
                <h3>Observação:</h3>
                <p>Está página é somente para cadastros de novos endereços, caso você seja funcionário e queira acessar as outras funções, só irá conseguir acessá-las caso faça o cadastro ou login</p>
                @include('admin.pages.enderecos._partials.form')
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Cadastrar endereço</button>
                </div>
            </form>
        </div>
    </div>
@endsection

