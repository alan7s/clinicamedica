@extends('adminlte::page')

@section('title', 'Endereços')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('enderecos.index') }}">Endereços</a></li>
    </ol>
    <h1>Endereços <a href="{{route('enderecos.create')}}" class="btn btn-dark"><i class="fas fa-plus-square"></i></a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{route('enderecos.search')}}" method="POST" class="form form-inline">
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
                        <th>CEP</th>
                        <th>Logradouro</th>
                        <th>Bairro</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($enderecos as $endereco)
                        <tr>
                            <td>
                                {{$endereco->id}}
                            </td>
                            <td>
                                {{$endereco->cep}}
                            </td>
                            <td>
                                {{$endereco->logradouro}}
                            </td>
                            <td>
                                {{$endereco->bairro}}
                            </td>
                            <td>
                                {{$endereco->cidade}}
                            </td>
                            <td>
                                {{$endereco->estado}}
                            </td>
                            <td>
                                <a href="{{ route('enderecos.edit', $endereco->id) }}" class="btn btn-info"><i class="fas fa-pen-square"></i></a>
                                <a href="{{ route('enderecos.show', $endereco->id) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $enderecos->appends($filters)->links() !!}
            @else
                {!! $enderecos->links() !!}
            @endif
        </div>
    </div>
@stop