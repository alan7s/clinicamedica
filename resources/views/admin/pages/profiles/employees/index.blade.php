@extends('adminlte::page')

@section('title', "Funcionário {$profile->nome}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('profiles.index') }}">Perfis</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('employees.profile.index', $profile->id) }}">Funcionário</a></li>
    </ol>
    <h1>Funcionário {{$profile->nome}}<a href="{{route('employees.profile.create', $profile->id)}}" class="btn btn-dark"><i class="fas fa-plus-square"></i></a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @include('admin.includes.alerts')
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Data contrato</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr>
                            <td>
                                {{$employee->id}}
                            </td>
                            <td>
                                {{$employee->datacontrato}}
                            </td>
                            <td>
                                <a href="{{ route('doctors.employee.profile.index', [$employee->id]) }}" class="btn btn-info"><i class="fas fa-info-circle"></i></a>
                                <a href="{{ route('employees.profile.edit', [$profile->id, $employee->id]) }}" class="btn btn-info"><i class="fas fa-pen-square"></i></a>
                                <a href="{{ route('employees.profile.show', [$profile->id, $employee->id]) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $employees->appends($filters)->links() !!}
            @else
                {!! $employees->links() !!}
            @endif
        </div>
    </div>
@stop