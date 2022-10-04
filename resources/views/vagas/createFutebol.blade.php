<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Matricula - Futebol</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="assets/img//cad_produto.png" alt="">
        </div>
        <div class="form">
            <form action="{{route('vagas.storeFutebol')}}" method="POST">
                @csrf
                <div class="form-header">
                    <div class="title">
                        <h1>Matricula - Futebol</h1>
                        <div class="login-button">
                            <a href="{{ route('vagas.index') }}"><button type="button">Cancelar</button></a>  
                        </div>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="name">Nome</label>
                        <input id="name" name="name" type="text" class="validate" placeholder="Seu nome completo" required>
                    </div>

                    <div class="input-box">
                        <label for="rg">Rg</label>
                        <input id="rg" type="text" name="rg" class="validate" placeholder="xx.xxx.xxx-x" required>
                    </div>

                    <div class="input-box">
                        <label for="cpf">Cpf</label>
                        <input id="cpf" type="text" name="cpf" class="validate" placeholder="xxx.xxx.xxx-xx" required>
                    </div>

                    <div class="input-box">
                        <label for="data_nasc">Data de nascimento</label>
                        <input id="data_nasc" type="text" name="data_nasc" class="validate" placeholder="xx/xx/xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="perna_dominante">Perna dominante</label>
                        <input id="perna_dominante" type="text" name="perna_dominante" class="validate" placeholder="Direita/Esquerda" required>
                    </div>

                    <div class="input-box">
                        <label for="posicao">Posição jogada</label>
                        <input id="posicao" type="text" name="posicao" class="validate" placeholder="Goleira/Zagueiro/..." required>
                    </div>
                </div>

                <div class="continue-button">
                      <button type="submit" name="acao" value="Cadastrar">Cadastrar</button></div>
                        <div><input type="hidden" name="form" value="f_form"></div>
                </div>

            </form>
        </div>
    </div>
</body>

</html>