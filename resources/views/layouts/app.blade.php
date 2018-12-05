<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
        <link rel="stylesheet" href="../public/css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
        <title>Sistema - @yield('title')</title>
    </head>
<body>
@section('esq')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 menubar">
                <ul>
                    <li><img src="imgs/user.png" width="15px;"><a href="{{ url('/') }}"> {{ $usuario['nome'] }} </a></li> 
                    <li><img src="imgs/peito.png" width="20px;"><a href="{{ url('/peito') }}"> Treino Peito</a></li>
                    <li><img src="imgs/peito.png" width="20px;"><a href="{{ url('/costas') }}"> Treino Costas</a></li>
                    <li><img src="imgs/peito.png" width="20px;"><a href="{{ url('/triceps') }}"> Treino Triceps</a></li>
                    <li><img src="imgs/peito.png" width="20px;"><a href="#"> Treino </a></li>
                    <li><img src="imgs/peito.png" width="20px;"><a href="#"> Treino </a></li>
                    <li><img src="imgs/logout.png" width="20px;"><a href="{{ url('/logout') }}"> Logout </a></li>
                </ul>
            </div>
            <div class="col-10">
                @yield('conteudo')
            </div>
        </div>
    </div>
</body>
</html>
@show