@extends ('admin.base-admin')

@section ("principal")


<h2>Funcionários cadastrados

<a href="/admin/funcionario/novo" class="btn btn-primary"> Cadastrar</a>
    </h2>


<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Data Cadastro</th>
        </tr>
        </thead>

        <tbody>
        @foreach ($dados as $funcionario)
            <tr>
            <td>{{$funcionario["id"]}}</td>
                <td>{{$funcionario["nome"]}}</td>
                <td>{{$funcionario["created_at"] }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
