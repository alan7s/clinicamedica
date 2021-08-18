@extends('adminlte::page')

@section('title', 'Cadastrar Funcionário')

@section('content_header')
    <h1>Cadastrar Novo Funcionário</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('employees.store') }}" class="form" method="POST">
                @include('admin.pages.employees._partials.form')
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
@endsection