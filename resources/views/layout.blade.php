<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=devide-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

        <title>Demonstração Laravel 10</title>

    </head>
    <body>
        <div class="container">
            <div class="column-01">
                <a href="{{route('homepage.index')}}"><h2 style="color:white">Home</h2></a>
                <a href="{{route('cadastro.index')}}" class="button">Cadastrar Clientes</a>
                <a href="#" class="button">Buscar Arquivos Drive</a>
                <a href="#" class="button">Entrevistas e Registro de Currículo</a>
            </div>
            <div class="column-02">
                @yield('content')
            </div>
        </div>
    </body>

</html>
