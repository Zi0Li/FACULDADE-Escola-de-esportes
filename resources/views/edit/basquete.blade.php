<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Editar - Basquete</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="/img/basquete.jpg" alt="">
        </div>
        <div class="form">
            <form action="{{route('vagas.updateBasquete', $basquete->id)}}" method="POST">
                @method('put')
                @csrf
                <div class="form-header">
                    <div class="title">
                        <h1>Editar - {{$basquete->name}}</h1>
                        <div class="login-button">
                            <a href="{{ route('vagas.index') }}"><button type="button">Cancelar</button></a>  
                        </div>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="name">Nome</label>
                        <input id="name" name="name" type="text" class="validate" value="{{$basquete->name}}" required>
                    </div>

                    <div class="input-box">
                        <label for="rg">Rg</label>
                        <input id="rg" type="text" name="rg" class="validate" value="{{$basquete->rg}}" required>
                    </div>

                    <div class="input-box">
                        <label for="cpf">Cpf</label>
                        <input id="cpf" type="text" name="cpf" class="validate" value="{{$basquete->cpf}}" required>
                    </div>

                    <div class="input-box">
                        <label for="data_nasc">Data de nascimento</label>
                        <input id="data_nasc" type="text" name="data_nasc" class="validate" value="{{$basquete->data_nasc}}" required>
                    </div>

                    <div class="input-box">
                        <label for="peso">Peso</label>
                        <input id="peso" type="text" name="peso" class="validate" value="{{$basquete->peso}}" required>
                    </div>

                    <div class="input-box">
                        <label for="altura">Altura</label>
                        <input id="altura" type="text" name="altura" class="validate" value="{{$basquete->altura}}" required>
                    </div>

                    <div class="input-box">
                        <label for="posicao">Posição jogada</label>
                        <input id="posicao" type="text" name="posicao" class="validate" value="{{$basquete->posicao}}" required>
                    </div>
                </div>

                <div class="continue-button">
                      <button type="submit" name="acao" value="Cadastrar">Editar</button></div>
                        <div><input type="hidden" name="form" value="f_form"></div>
                </div>

            </form>
        </div>
    </div>
</body>

</html>