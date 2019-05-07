@extends('admin.base-admin')


@section("principal")

    <h2>Editar funcionário</h2>

    <form class="form-horizontal" action="/admin/funcionarios/salvar" method="post">
        @csrf

        <fieldset>


            <div class="form-group">
                <label class="col-md-2 control-label" for="nome">Id</label>
                    #{{  $dados->id }}
                <input name="id" type="hidden" value="{{  $dados->id }}">
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label" for="nome">Data de Cadastro</label>
                {{  $dados->created_at->format('Y-m-d  H:i:s') }}
            </div>
          

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="nome">Nome</label>
                <div class="col-md-4">
                    <input id="nome" name="nome" type="text" value="{{ $dados->nome }}" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="btn-cadastrar"></label>
                <div class="col-md-4">
                    <button id="btn-cadastrar" name="btn-cadastrar" class="btn btn-success">Salvar</button>
                </div>
            </div>

        </fieldset>
    </form>

@endsection