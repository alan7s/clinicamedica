@extends('adminlte::page')

@section('title', "Adicionar novo detalhe ao ")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        {{--<li class="breadcrumb-item"><a href="{{ route('profiles.index') }}">profile</a></li>
        <li class="breadcrumb-item"><a href="{{ route('profiles.show', $profile->id) }}">{}</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('employees.profile.create', $profile->id) }}">Detalhes</a></li>--}}
    </ol>
    <h1>Cadastrar {{$profile->where('id', $employee->profile_id)->first()->nome}} como médico</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('doctors.employee.profile.store', $employee->id)}}" method="POST">
                @include('admin.pages.profiles.employees.doctors._partials.form')
            </form>
        </div>
    </div>
@endsection