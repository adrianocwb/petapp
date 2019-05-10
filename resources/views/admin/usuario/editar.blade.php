@extends('admin.base-admin')


@section("principal")

    <h2>Editar Usuário</h2>

    <form class="form-horizontal" action="/admin/usuarios/salvar" method="post">
        @csrf

        <fieldset>



          

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="nome">Nome</label>
                <div class="col-md-4">
                    <input id="nome" name="nome" type="text" value="{{ $dados->nome }}" class="form-control input-md" required="">

                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="nome">Email</label>
                <div class="col-md-4">
                    <input  name="valor" type="text" value="{{ $dados->valor }}"  class="form-control input-md" required="">

                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="nome">Alterar Senha</label>
                <div class="col-md-4">
                    <input  name="valor" type="text" value="{{ $dados->valor }}"  class="form-control input-md" required="">

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