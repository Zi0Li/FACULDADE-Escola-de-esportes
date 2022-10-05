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
    <title>Vôlei</title>
</head>

<body>

    <div class="container ">
        <h1 class="amber center-align">VÔLEI</h1>
        <table class="striped">
            <th>
                <a class="btn-floating btn-small waves-effect waves-light grey darken-3" href="{{ route('vagas.index')}}">
                <i class="material-icons">arrow_back</i>
            </th>
            <th>Nome</th>
            <th>Nascimento</th>
            <th>Peso</th>
            <th>Altura</th>
            <th></th>
            @foreach ($voleii as $volei)
                <tr>
                    <td></td>
                    <td>{{$volei->name}}</td>
                    <td>{{$volei->data_nasc}}</td>
                    <td>{{$volei->peso}}</td>
                    <td>{{$volei->altura}}</td>
                    <td>
                        <form action="{{route('vagas.deleteVolei', $volei->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <a class="btn-floating btn-small waves-effect waves-light blue" href="{{ route('vagas.editVolei', $volei->id)}}">
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