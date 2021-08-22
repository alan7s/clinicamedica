@extends('adminlte::page')

@section('title', 'Cadastrar Novo profileo')

@section('content_header')
    <h1>Cadastrar Novo profileo</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('profiles.store') }}" class="form" method="POST">
                @csrf

                @include('admin.pages.profiles._partials.form')
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
@endsection