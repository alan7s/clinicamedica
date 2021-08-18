@extends('adminlte::page')

@section('title', 'Perfis')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('employees.index') }}">Funcionários</a></li>
    </ol>
    <h1>Funcionários <a href="{{route('employees.create')}}" class="btn btn-dark"><i class="fas fa-plus-square"></i></a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{route('plans.search')}}" method="POST" class="form form-inline">
                @csrf
                <input type="text" name="filter" placeholder="Pesquisar" class="form-control" value="{{ $filters['filter'] ?? '' }}">
                <button type="submit" class="btn btn-dark"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nome</th>
                        <th>Data Contrato</th>
                        <th>Salario</th>
                        <th>SenhaHash</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr>
                            <td>
                                {{$employee->id}}
                            </td>
                            <td>
                                {{$employee->nome}}
                            </td>
                            <td>
                                {{$employee->datacontrato}}
                            </td>
                            <td>
                                {{$employee->salario}}
                            </td>
                            <td>
                                {{$employee->senhahash}}
                            </td>
                            <td>
                                {{--<a href="{{ route('details.employee.index', $employee->url) }}" class="btn btn-info"><i class="fas fa-info-circle"></i></a>
                                <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-info"><i class="fas fa-pen-square"></i></a>
                                <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>--}}
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