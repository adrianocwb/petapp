@extends('admin.base-admin')


@section("principal")

    <h2>Cadastrar novo Serviço</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            Erro ao Cadastrar
        </div>
        @endif

        </divclass>

    <form class="form-horizontal" action="/admin/servicos/cadastro" method="post">
        <fieldset>
            @csrf


            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="nome">Nome</label>
                <div class="col-md-4">
                    <input id="nome" name="nome" type="text" value="{{old('nome')}}" placeholder=""
                           class="form-control input-md" required="">

                    @error('nome')
                    <div>O nome do serviço deve ter pelo menos 3 caracteres </div>
                    @enderror

                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="nome">Valor</label>
                <div class="col-md-4">
                    <input name="valor" type="text" value="{{old('valor')}}" placeholder=""
                           class="form-control input-md" required="">

                    @error('valor')
                    <div clas>{{ $message }}</div>
                    @enderror

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