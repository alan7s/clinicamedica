@extends('adminlte::page')

@section('title', "Funcionário {$profile->nome}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('profiles.index') }}">Profile</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('employees.profile.index', $profile->id) }}">{{$profile->nome}}</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('employees.profile.show', [$profile->id, $employee->id]) }}">Deletar</a></li>
    </ol>
    <h1>Deletar funcionário {{$profile->nome}}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li><strong>ID:</strong> {{$employee->id}}</li>
                <li><strong>Data contrato:</strong> {{$employee->datacontrato}}</li>
                <li><strong>Salário:</strong> {{$employee->salario}}</li>
                <li><strong>SenhaHash:</strong> {{$employee->senhahash}}</li>
            </ul>
        </div>
        <div class="card-footer">
            <form action="{{route('employees.profile.destroy', [$profile->id, $employee->id])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>Deletar funcionário {{$profile->nome}}</button>
            </form>
        </div>
    </div>
@endsection