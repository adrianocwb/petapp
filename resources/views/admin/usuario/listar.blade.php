
@extends('admin.base-admin')


@section("principal")


    <h2>Usuários cadastrados
        <a href="/admin/usuarios/novo" class="btn btn-primary">Cadastrar</a>
    </h2>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Data de Cadastro</th>
                <th>Ações</th>
            </tr>
            </thead>

            <tbody>

            @foreach($dados as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->created_at }}</td>
                    <td></td>

                </tr>
            @endforeach

            </tbody>
        </table>
    </div>


@endsection
