@extends('adminlte::page')

@section('title', "Detalhes do {$profile->name}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('profiles.index') }}">profile</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('profiles.show', $profile->id) }}">{{$profile->nome}}</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('patients.profile.index', $profile->id) }}">Detalhes</a></li>
    </ol>
    <h1>Detalhes do {{$profile->nome}}<a href="{{route('patients.profile.create', $profile->id)}}" class="btn btn-dark"><i class="fas fa-plus-square"></i></a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @include('admin.includes.alerts')
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Peso</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($patients as $patient)
                        <tr>
                            <td>
                                {{$patient->id}}
                            </td>
                            <td>
                                {{$patient->peso}}
                            </td>
                            <td>
                                <a href="{{ route('patients.profile.edit', [$profile->id, $patient->id]) }}" class="btn btn-info"><i class="fas fa-pen-square"></i></a>
                                <a href="{{ route('patients.profile.show', [$profile->id, $patient->id]) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $patients->appends($filters)->links() !!}
            @else
                {!! $patients->links() !!}
            @endif
        </div>
    </div>
@stop