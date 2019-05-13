<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PetApp</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">


</head>
<body>

<nav class="navbar navbar-expand-md navbar-light bg-light static-top">
    <a class="navbar-brand" href="#">PetApp</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">

    </div>
</nav>

<main role="main" class="container">

    <div class="jumbotron">
        <h1 class="display-4">Agende seu Serviço</h1>
        <p class="lead">Um serviço exclusivo para clientes PetApp!</p>
        <hr class="my-4">

        @if (isset($enviado) && $enviado == true)
            <div>
                Seu Serviço foi agendado e enviado o email para confirmação!
            </div>
        @else

        <form action ="/agendar" method="POST">
            @csrf

            <div class="form-row">
                <div class="col">
                    <select name="servico" class="form-control">
                        <option value=""> --Serviço --</option>

                        @foreach($servicos as $serv)
                            <option value="{{$serv->id}}">{{ $serv->nome}}</option>
                            @endforeach
                    </select>

                </div>


                <div class="col">
                    <select name="profissional" class="form-control @error('profissional') is-invalid @enderror">

                        <option value=""> --Profissional --</option>

                        @foreach($profissionais as $prof)
                            <option value="{{$prof->id}}">{{ $prof->nome}}</option>
                        @endforeach
                    </select>

                    @error("profissional")
                    <div class="invalid-feedback">
                        Selecione um profissional
                    </div>
                    @enderror
                </div>

                <div class="col">
                    <input type="datetime-local" name="data" class="form-control">
                </div>

                <div class="col">
                    <label>Valor</label>
                    <span class="border border-primary rounded p-2 float-right w-75 text-center">R$ 123,99</span>

                </div>

            </div>


            <hr>

            <div class="form-row">

                <div class="col">
                    <input type="text" name="cliente" class="form-control" placeholder="Seu nome">
                </div>

                <div class="col">
                    <input type="text" name="email" placeholder="Seu E-mail" class="form-control @error('email') is-invalid @enderror">
                    @error("email")
                    <div class="invalid-feedback">
                        Informe seu email corretamente
                    </div>
                    @enderror
                </div>

            </div>

            <hr>

            <div class="form-row float-right">
                <div class-="col">
                    <button type="submit" class="btn  btn-primary">Agendar</button>
                </div>

            </div>


        </form>
            @endif

    </div>

</main><!-- /.container -->

</body>
</html>
