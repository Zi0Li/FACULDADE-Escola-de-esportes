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
    <title>Natação</title>
</head>

<body>

    <div class="container ">
        <h1 class="light-blue center-align">NATAÇÃO</h1>
        <table class="striped">
            <th>
                <a class="btn-floating btn-small waves-effect waves-light grey darken-3" href="{{ route('vagas.index')}}">
                <i class="material-icons">arrow_back</i>
            </th>
            <th>Nome</th>
            <th>Nascimento</th>
            <th>Sabe nadar?</th>
            <th>Modalidade</th>
            <th></th>
            @foreach ($natacaoo as $natacao)
                <tr>
                    <td></td>
                    <td>{{$natacao->name}}</td>
                    <td>{{$natacao->data_nasc}}</td>
                    <td>{{$natacao->sabe_nadar}}</td>
                    <td>{{$natacao->modalidade}}</td>
                    <td>
                        <form action="{{route('vagas.deleteNatacao', $natacao->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <a class="btn-floating btn-small waves-effect waves-light blue" href="{{ route('vagas.editNatacao', $natacao->id)}}">
                                <i class="material-icons">edit</i>
                            </a>
                            <button type="submit" class="btn-floating btn-small waves-effect waves-light red">
                                <i class="material-icons">clear</i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach    
        </table>
    </div>
</body>

</html>