
@extends('admin.base-admin')


@section("principal")


    <h2>Funcionarios cadastrados
        <a href="/admin/funcionarios/novo" class="btn btn-primary">Cadastrar</a>
    </h2>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Data Cadastro</th>
                <th>Ações</th>
            </tr>
            </thead>

            <tbody>

            @foreach($dados as $funcionario)
                <tr>
                    <td>{{ $funcionario["id"] }}</td>
                    <td>{{ $funcionario["nome"] }}</td>
                    <td>{{ $funcionario["created_at"]  }}</td>
                    <td>
                        <a href="/admin/funcionarios/editar/{{ $funcionario["id"] }}" class="btn btn-link">Editar</a>
                        <a href="/admin/funcionarios/deletar/{{ $funcionario["id"] }}" class="btn btn-danger">Del</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>


@endsection
