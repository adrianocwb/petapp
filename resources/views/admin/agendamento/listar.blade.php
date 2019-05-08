
@extends('admin.base-admin')


@section("principal")

    <style>
        .cancelado
        {
            text-decoration:line-through;
            color:silver;
        }


    </style>


    <h2>Agendamentos Cadastrados
        <a href="/admin/agendamento/novo" class="btn btn-primary">Cadastrar</a>
    </h2>
    <form action="/admin/agendamento">
    <div class="card">

        <div class="card-body row">


            <div class="form-group col-3">
             <select name ="status" class="form-control">
              <option value="">-- Status --</option>
              <option value="NOVO">NOVO</option>
              <option value="CANCELADO">CANCELADO</option>
              <option value="CONFIRMADO">CONFIRMADO</option>
             </select>

            </div>

            <div class="form-group col-3">
                <select name ="servico" class="form-control">
                    <option value="">-- Serviços --</option>
                    @foreach($servicos as $servico)
                        <option value="{{$servico->id}}"
                        @if($servico->id == request("servico"))
                            selected
                                @endif
                        >{{$servico->nome}}</option>
                        @endforeach
                </select>
            </div>

            <div class="form-group col-3">
                <select name ="profissional" class="form-control">
                    <option value="">-- Profissional --</option>
                    @foreach($profissionais as $prof)
                        <option value="{{$prof->id}}"
                                @if($prof->id == request("profissional"))
                                selected
                                @endif
                        >{{$prof->nome}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Filtrar</button>
        </div>
    </div>
</form>


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
                <tr @if ($servico->status == "CANCELADO")
                class="cancelado"
                @endif>

                    <td>{{ $servico->dataHora->format('d/m/Y')    }}</td>
                    <td>{{ $servico->cliente  }}</td>
                    <td>{{ $servico->servicos->nome  }}</td>
                    <td>{{ $servico->profissional->nome  }}</td>
                    <td>{{ $servico->valor  }}</td>
                    <td>
                        @if ($servico-> status == "NOVO")
                        <a href="/admin/agendamento/confirmar/{{ $servico->id }}" class="btn btn-success">Confirmar</a>
                        <a href="/admin/agendamento/cancelar/{{ $servico->id }}" class="btn btn-danger">Cancelar</a>
                            @else
                            {{$servico->status}}
                        @endif
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>


@endsection
