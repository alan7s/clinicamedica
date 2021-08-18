@extends('adminlte::page')

@section('title', 'Perfis')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('profiles.index') }}">Perfis</a></li>
    </ol>
    <h1>Perfis <a href="{{route('profiles.create')}}" class="btn btn-dark"><i class="fas fa-plus-square"></i></a></h1>
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
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>CEP</th>
                        <th>Logradouro</th>
                        <th>Bairro</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($profiles as $profile)
                        <tr>
                            <td>
                                {{$profile->id}}
                            </td>
                            <td>
                                {{$profile->nome}}
                            </td>
                            <td>
                                {{$profile->email}}
                            </td>
                            <td>
                                {{$profile->telefone}}
                            </td>
                            <td>
                                {{$profile->cep}}
                            </td>
                            <td>
                                {{$profile->logradouro}}
                            </td>
                            <td>
                                {{$profile->bairro}}
                            </td>
                            <td>
                                {{$profile->cidade}}
                            </td>
                            <td>
                                {{$profile->estado}}
                            </td>
                            <td>
                                {{--<a href="{{ route('details.profile.index', $profile->url) }}" class="btn btn-info"><i class="fas fa-info-circle"></i></a>
                                <a href="{{ route('profiles.edit', $profile->codigo) }}" class="btn btn-info"><i class="fas fa-pen-square"></i></a>--}}
                                <a href="{{ route('profiles.employees', $profile->id) }}" class="btn btn-info"><i class="fas fa-info-circle"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $profiles->appends($filters)->links() !!}
            @else
                {!! $profiles->links() !!}
            @endif
        </div>
    </div>
@stop