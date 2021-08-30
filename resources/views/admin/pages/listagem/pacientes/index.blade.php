@extends('adminlte::page')

@section('title', "Funcionários")

@section('content_header')
    {{--<ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('profiles.index') }}">Perfis</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('employees.profile.index', $profile->id) }}">Funcionário</a></li>
    </ol>--}}
    <h1>Pacientes CEFETMED</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @include('admin.includes.alerts')
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>ID Paciente</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>CEP</th>
                        <th>Logradouro</th>
                        <th>Bairro</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>Peso</th>
                        <th>Altura</th>
                        <th>Tipo Sanguineo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($patients as $patient)
                        <tr>
                            <td>
                                {{$patient->id}}
                            </td>
                            <td>
                                {{$profiles->where('id', $patient->profile_id)->first()->nome}}
                            </td>
                            <td>
                                {{$profiles->where('id', $patient->profile_id)->first()->email}}
                            </td>
                            <td>
                                {{$profiles->where('id', $patient->profile_id)->first()->telefone}}
                            </td>
                            <td>
                                {{$profiles->where('id', $patient->profile_id)->first()->cep}}
                            </td>
                            <td>
                                {{$profiles->where('id', $patient->profile_id)->first()->logradouro}}
                            </td>
                            <td>
                                {{$profiles->where('id', $patient->profile_id)->first()->bairro}}
                            </td>
                            <td>
                                {{$profiles->where('id', $patient->profile_id)->first()->cidade}}
                            </td>
                            <td>
                                {{$profiles->where('id', $patient->profile_id)->first()->estado}}
                            </td>
                            <td>
                                {{$patient->peso}}
                            </td>
                            <td>
                                {{$patient->altura}}
                            </td>
                            <td>
                                {{$patient->tiposanguineo}}
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