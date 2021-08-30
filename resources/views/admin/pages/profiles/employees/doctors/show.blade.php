@extends('adminlte::page')

@section('title', "Detalhes {$profile->where('id', $employee->profile_id)->first()->nome}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        {{--<li class="breadcrumb-item"><a href="{{ route('profiles.index') }}">profileos</a></li>
        <li class="breadcrumb-item"><a href="{{ route('profiles.show', $profile->id) }}">{{$profile->nome}}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('employees.profile.create', $profile->id) }}">Detalhes</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('employees.profile.create', [$profile->id, $employee->id]) }}">Detalhes</a></li>--}}
    </ol>
    <h1>Detalhes do Médico {{$profile->where('id', $employee->profile_id)->first()->nome}}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li><strong>ID:</strong> {{$doctor->id}}</li>
                <li><strong>Especialidade:</strong> {{$doctor->especialidade}}</li>
                <li><strong>CRM:</strong> {{$doctor->crm}}</li>
            </ul>
        </div>
        <div class="card-footer">
            <form action="{{route('doctors.employee.profile.destroy', [$employee->id, $doctor->id])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Deletar o médico {{$profile->where('id', $employee->profile_id)->first()->nome}}</button>
            </form>
        </div>
    </div>
@endsection