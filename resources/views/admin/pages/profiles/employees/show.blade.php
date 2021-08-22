@extends('adminlte::page')

@section('title', "Detalhes {$employee->name}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('profiles.index') }}">profileos</a></li>
        <li class="breadcrumb-item"><a href="{{ route('profiles.show', $profile->id) }}">{{$profile->name}}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('employees.profile.create', $profile->id) }}">Detalhes</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('employees.profile.create', [$profile->id, $employee->id]) }}">Detalhes</a></li>
    </ol>
    <h1>Editar {{$employee->name}}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li><strong>Nome:</strong> {{$employee->name}}</li>
            </ul>
        </div>
        <div class="card-footer">
            <form action="{{route('employees.profile.destroy', [$profile->id, $employee->id])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Deletar o detalhe do {{$profile->name}}</button>
            </form>
        </div>
    </div>
@endsection