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
    <title>Esportes</title>
</head>

<body>

    <div class="container ">
        <h1 class="blue-grey lighten-1 center-align">ESPORTES</h1>
        <table class="striped">
            <th>Nome</th>
            <th>Nascimento</th>
            <th>Posição jogada</th>
            <th>Perna dominante</th>
            <th></th>
            @foreach ($futeboll as $futebol)
                <tr>
                    <td>{{$futebol->name}}</td>
                    <td>{{$futebol->data_nasc}}</td>
                    <td>{{$futebol->posicao}}</td>
                    <td>{{$futebol->perna_dominante}}</td>
                    <td>
                        <a class="waves-effect waves-light btn" href="#">Matricula-se</a>
                        <a class="btn-floating btn-small waves-effect waves-light orange" href="#">
                            <i class="material-icons">remove_red_eye</i>
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