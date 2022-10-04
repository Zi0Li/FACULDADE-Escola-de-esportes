<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Basquete</title>
</head>

<body>

    <div class="container ">
        <h1 class="red darken-4 center-align">BASQUETE</h1>
        <table class="striped">
            <th>
                <a class="btn-floating btn-small waves-effect waves-light grey darken-3" href="{{ route('vagas.index')}}">
                <i class="material-icons">arrow_back</i>
            </th>
            <th>Nome</th>
            <th>Nascimento</th>
            <th>Peso</th>
            <th>Altura</th>
            <th>Posição</th>
            <th></th>
            @foreach ($basquetee as $basquete)
                <tr>
                    <td></td>
                    <td>{{$basquete->name}}</td>
                    <td>{{$basquete->data_nasc}}</td>
                    <td>{{$basquete->peso}}</td>
                    <td>{{$basquete->altura}}</td>
                    <td>{{$basquete->posicao}}</td>
                    <td>
                        <a class="btn-floating btn-small waves-effect waves-light blue" href="#">
                            <i class="material-icons">edit</i>
                        </a>
                        <a class="btn-floating btn-small waves-effect waves-light red" onclick  ="JavaScript:location.href='#'">
                            <i class="material-icons">clear</i>
                        </a>
                    </td>
                </tr>
            @endforeach    
        </table>
    </div>
</body>

</html>