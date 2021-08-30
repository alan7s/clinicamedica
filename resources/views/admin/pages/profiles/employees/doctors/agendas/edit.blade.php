@extends('adminlte::page')

@section('title', "Editar")

@section('content_header')
    <ol class="breadcrumb">
        {{--<li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('profiles.index') }}">Perfis</a></li>
        {{--<li class="breadcrumb-item"><a href="{{ route('profiles.show', $profile->id) }}">{{$profile->nome}}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('employees.profile.create', $profile->id) }}">Funcionário</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('employees.profile.create', [$profile->id, $employee->id]) }}">Editar</a></li>--}}
    </ol>
    <h1>Editar agenda</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('agendas.doctor.employee.profile.update', [$doctor->id, $agenda->id])}}" method="POST">
                @method('PUT')
                @include('admin.pages.profiles.employees.doctors.agendas._partials.form')
            </form>
        </div>
    </div>
@endsection