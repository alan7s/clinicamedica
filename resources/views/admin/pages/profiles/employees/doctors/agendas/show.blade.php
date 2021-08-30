@extends('adminlte::page')

@section('title', "Agenda")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        {{--<li class="breadcrumb-item"><a href="{{ route('profiles.index') }}">profileos</a></li>
        <li class="breadcrumb-item"><a href="{{ route('profiles.show', $profile->id) }}">{{$profile->nome}}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('employees.profile.create', $profile->id) }}">Detalhes</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('employees.profile.create', [$profile->id, $employee->id]) }}">Detalhes</a></li>--}}
    </ol>
    <h1>Agenda</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li><strong>ID:</strong> {{$agenda->id}}</li>
                <li><strong>Data:</strong> {{$agenda->data}}</li>
                <li><strong>Horário:</strong> {{$agenda->horario}}</li>
                <li><strong>Nome:</strong> {{$agenda->nome}}</li>
                <li><strong>Email:</strong> {{$agenda->email}}</li>
                <li><strong>Telefone:</strong> {{$agenda->telefone}}</li>
                <li><strong>CRM:</strong> {{$agenda->doctor_id}}</li>
            </ul>
        </div>
        <div class="card-footer">
            <form action="{{route('agendas.doctor.employee.profile.destroy', [$doctor->id, $agenda->id])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Deletar agendamento</button>
            </form>
        </div>
    </div>
@endsection