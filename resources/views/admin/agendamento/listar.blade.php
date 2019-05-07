
@extends('admin.base-admin')


@section("principal")


    <h2>Agendamentos Cadastrados
        <a href="/admin/agendamento/novo" class="btn btn-primary">Cadastrar</a>
    </h2>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>ID</th>
                <th>Data e Hora</th>
                <th>Cliente</th>
                <th>Serviço</th>
                <th>Funcionario</th>
                <th>Valor</th>
                <th>Ações</th>
            </tr>
            </thead>

            <tbody>

            @foreach($dados as $servico)
                <tr>
                    <td>{{ $servico->id }}</td>
                    <td>{{ $servico->dataHora    }}</td>
                    <td>{{ $servico->cliente  }}</td>
                    <td>{{ $servico->servicos->nome  }}</td>
                    <td>{{ $servico->profissional->nome  }}</td>
                    <td>{{ $servico->valor  }}</td>
                    <td>
                        <a href="/admin/agendamento/editar/{{ $servico->id }}" class="btn btn-link">Editar</a>
                        <a href="/admin/agendamento/deletar/{{ $servico->id }}" class="btn btn-danger">Del</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>


@endsection
