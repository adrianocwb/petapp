
@extends('admin.base-admin')


@section("principal")


    <h2>Serviços cadastrados
        <a href="/admin/servicos/novo" class="btn btn-primary">Cadastrar</a>
    </h2>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Valor</th>
                <th>Ações</th>
            </tr>
            </thead>

            <tbody>

            @foreach($dados as $servico)
                <tr>
                    <td>{{ $servico->id }}</td>
                    <td>{{ $servico->nome }}</td>
                    <td>{{ $servico->valor  }}</td>
                    <td>
                        <a href="/admin/servicos/editar/{{ $servico->id }}" class="btn btn-link">Editar</a>
                        <a href="/admin/servicos/deletar/{{ $servico->id }}" class="btn btn-danger">Del</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>


@endsection
