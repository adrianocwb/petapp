@extends('admin.base-admin')


@section("principal")

    <h2>Cadastrar novo serviço</h2>

    <form class="form-horizontal" action="/admin/servicos/cadastro" method ="post">
        <fieldset>
        @csrf


        <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="nome">Nome</label>
                <div class="col-md-4">
                    <input id="nome" name="nome" type="text" placeholder="" class="form-control input-md" required="">

                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="nome">Valor</label>
                    <div class="col-md-4">
                        <input id="valor" name="valor" type="text" placeholder="" class="form-control input-md" required="">

                    </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="btn-cadastrar"></label>
                <div class="col-md-4">
                    <button id="btn-cadastrar" name="btn-cadastrar" class="btn btn-success">Cadastrar</button>
                </div>
            </div>

        </fieldset>
    </form>

@endsection