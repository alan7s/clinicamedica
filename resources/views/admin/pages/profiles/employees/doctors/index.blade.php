@extends('adminlte::page')

@section('title', "Detalhes do médico ")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('profiles.index') }}">profile</a></li>
        {{--<li class="breadcrumb-item active"><a href="{{ route('profiles.show', $profile->id) }}">{{$profile->nome}}</a></li>--}}
        {{--<li class="breadcrumb-item active"><a href="{{ route('employees.profile.index', $profile->id) }}">Detalhes</a></li>--}}
    </ol>
    <h1>Detalhes do médico {{$profile->where('id', $employee->profile_id)->first()->nome}} <a href="{{route('doctors.employee.profile.create', [$employee->id])}}" class="btn btn-dark"><i class="fas fa-plus-square"></i></a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @include('admin.includes.alerts')
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Especialidade</th>
                        <th>CRM</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($doctors as $doctor)
                        <tr>
                            <td>
                                {{$doctor->id}}
                            </td>
                            <td>
                                {{$doctor->especialidade}}
                            </td>
                            <td>
                                {{$doctor->crm}}
                            </td>
                            <td>
                                <a href="{{ route('agendas.doctor.employee.profile.index', [$doctor->id]) }}" class="btn btn-info"><i class="fas fa-calendar-alt"></i></a>
                                <a href="{{ route('doctors.employee.profile.edit', [$employee->id, $doctor->id]) }}" class="btn btn-info"><i class="fas fa-pen-square"></i></a>
                                <a href="{{ route('doctors.employee.profile.show', [$employee->id, $doctor->id]) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $doctors->appends($filters)->links() !!}
            @else
                {!! $doctors->links() !!}
            @endif
        </div>
    </div>
@stop