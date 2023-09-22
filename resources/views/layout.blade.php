<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=devide-width, initial-scale=1">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

        <title>Demonstração Laravel 10</title>

    </head>
    <body>
        <div class="containerHome">
            <div class="column-01">
                <a href="{{route('homepage.index')}}"><h2 style="color:white">Home</h2></a>
                <a href="{{route('cadastro.index')}}" class="button">Cadastrar Clientes</a>
                <a href="{{route('drive.index')}}" class="button">Integração Google Drive</a>
                <a href="#" class="button">Entrevistas e Currículos</a>
            </div>
            <div class="column-02">
                @yield('content')
            </div>
        </div>
    </body>

</html>
