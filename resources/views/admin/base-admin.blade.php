<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Dashboard Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="/css/app.css" rel="stylesheet">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark static-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">PetApp</a>

    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="#">Sign out</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin">
                            <span data-feather="home"></span>
                            Painel <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/agendamento">
                            <span data-feather="file"></span>
                            Agendamentos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/servicos">
                            <span data-feather="shopping-cart"></span>
                            Serviços
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/funcionarios">
                            <span data-feather="users"></span>
                            Profissionais
                        </a>
                    </li>

                </ul>

            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

            @yield('principal')

        </main>
    </div>
</div>

<script src="/js/app.js"></script>

</body>
</html>
