@extends('adminlte::page')

@section('title', "Agenda")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('profiles.index') }}">profile</a></li>
        {{--<li class="breadcrumb-item active"><a href="{{ route('profiles.show', $profile->id) }}">{{$profile->nome}}</a></li>--}}
        {{--<li class="breadcrumb-item active"><a href="{{ route('employees.profile.index', $profile->id) }}">Detalhes</a></li>--}}
    </ol>
    <h1>Agenda do médico<a href="{{route('agendas.doctor.employee.profile.create', [$doctors->id])}}" class="btn btn-dark"><i class="fas fa-plus-square"></i></a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @include('admin.includes.alerts')
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Data</th>
                        <th>Horário</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>CRM</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($agendas as $agenda)
                        <tr>
                            <td>
                                {{$agenda->id}}
                            </td>
                            <td>
                                {{$agenda->data}}
                            </td>
                            <td>
                                {{$agenda->horario}}
                            </td>
                            <td>
                                {{$agenda->nome}}
                            </td>
                            <td>
                                {{$agenda->email}}
                            </td>
                            <td>
                                {{$agenda->telefone}}
                            </td>
                            <td>
                                {{$agenda->doctor_id}}
                            </td>
                            <td>
                                {{--<a href="{{ route('employees.profile.edit', [$employee->id]) }}" class="btn btn-info"><i class="fas fa-pen-square"></i></a>
                                <a href="{{ route('employees.profile.show', [$employee->id]) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>--}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $agendas->appends($filters)->links() !!}
            @else
                {!! $agendas->links() !!}
            @endif
        </div>
    </div>
@stop