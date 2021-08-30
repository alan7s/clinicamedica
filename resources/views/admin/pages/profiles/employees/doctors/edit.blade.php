@extends('adminlte::page')

@section('title', "Editar {$employee->nome}")

@section('content_header')
    <ol class="breadcrumb">
        {{--<li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('profiles.index') }}">Perfis</a></li>
        {{--<li class="breadcrumb-item"><a href="{{ route('profiles.show', $profile->id) }}">{{$profile->nome}}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('employees.profile.create', $profile->id) }}">Funcionário</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('employees.profile.create', [$profile->id, $employee->id]) }}">Editar</a></li>--}}
    </ol>
    <h1>Editar médico: {{$employee->nome}}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('doctors.employee.profile.update', [$employee->id, $doctor->id])}}" method="POST">
                @method('PUT')
                @include('admin.pages.profiles.employees.doctors._partials.form')
            </form>
        </div>
    </div>
@endsection