<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    @vite(['resources/js/app.js'])
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="ms-3" style="text-decoration: none; color: whitesmoke; font-size: 1.5em;" href="/lancamentos">Gestor Financeiro</a>
        <ul class="navbar-nav mr-auto ms-5">
            <li class="nav-item">
                <a class="nav-link" href="/lancamentos">Lançamentos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/novo-lancamento">Adicionar Lançamento</a>
            </li>
        </ul>
    </nav>
    <div class="container">
    <h1 class="mt-2">{{ $title }}</h1>
        {{ $slot }}
    </div>

</body>
</html>

