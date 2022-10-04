<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Matricula - Natacao</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="assets/img//cad_produto.png" alt="">
        </div>
        <div class="form">
            <form action="{{route('vagas.storeNatacao')}}" method="POST">
                @csrf
                <div class="form-header">
                    <div class="title">
                        <h1>Matricula - Natacao</h1>
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
                        <label for="sabe_nadar">Sabe nadar ?</label>
                        <input id="sabe_nadar" type="text" name="sabe_nadar" class="validate" placeholder="Sim/Não" required>
                    </div>

                    <div class="input-box">
                        <label for="modalidade">Modalidade</label>
                        <input id="modalidade" type="text" name="modalidade" class="validate" placeholder="crawl/costas/peito/borboleta" required>
                    </div>
                </div>

                <div class="continue-button">
                      <button type="submit" name="acao" value="Cadastrar">Cadastrar </button></div>
                        <div><input type="hidden" name="form" value="f_form"></div>
                </div>

            </form>
        </div>
    </div>
</body>

</html>