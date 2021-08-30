@extends('adminlte::page')

@section('title', "Agendamentos")

@section('content_header')
    {{--<ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('profiles.index') }}">Perfis</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('employees.profile.index', $profile->id) }}">Funcionário</a></li>
    </ol>--}}
    <h1>Agendamentos CEFETMED</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @include('admin.includes.alerts')
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>ID Agendamento</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Data</th>
                        <th>Horário</th>
                        <th>Especialidade</th>
                        <th>Médico</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($agendamentos as $agenda)
                        <tr>
                            <td>
                                {{$agenda->id}}
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
                                {{$agenda->data}}
                            </td>
                            <td>
                                {{$agenda->horario}}
                            </td>
                            <td>
                               {{$doctors->where('id', $agenda->doctor_id)->first()->especialidade}}
                            </td>
                            <td>
                                {{$profiles->where('id', $employees->where('id', $doctors->where('id', $agenda->doctor_id)->first()->employee_id)->first()->profile_id)->first()->nome}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $agendamentos->appends($filters)->links() !!}
            @else
                {!! $agendamentos->links() !!}
            @endif
        </div>
    </div>
@stop