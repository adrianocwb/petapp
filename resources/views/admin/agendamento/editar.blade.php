@extends('admin.base-admin')


@section("principal")


    <h2>Editar Agendamento</h2>

    <form class="form-horizontal" action="/admin/servicos/salvar" method="post">
        @csrf

        <fieldset>


            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="cliente">Nome no Cliente</label>
                <div class="col-md-4">
                    <input id="cliente" name="cliente" type="text" placeholder="" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="datahora">Data e hora do Serviço</label>
                <div class="col-md-4">
                    <input id="datahora" name="datahora" type="text" placeholder="" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="valor">Valor Cobrado</label>
                <div class="col-md-4">
                    <input id="valor" name="valor" type="text" placeholder="" class="form-control input-md">

                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="funcionario">Profissional</label>
                <div class="col-md-4">
                    <select id="funcionario" name="funcionario" class="form-control">
                        <option value="1">Ana</option>
                        <option value="2">Pedro</option>
                        <option value="">José</option>
                    </select>
                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="servico">Serviço</label>
                <div class="col-md-4">
                    <select id="servico" name="servico" class="form-control">
                        <option value="1">Banho</option>
                        <option value="2">Tosa</option>
                        <option value="">Consulta</option>
                    </select>
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