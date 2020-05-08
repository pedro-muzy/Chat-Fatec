<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat - 4º ADS</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
</head>

<body>

    <div class="container">

        <br><br>
        <center><h1>Chat com Fila / Pilha <i class="medium material-icons">chat</i></h1></center>
        <br><br>

        <div class="card-panel #eeeeee grey lighten-3 teal row"><!-- Base -->

            <div class="col m4 l4"><!-- Grupo -->
                <ul class="collection z-depth-3">
                    <li class="collection-item avatar"><!-- Dionta -->
                        <img src="images/dionatan.jpg" alt="" class="circle">
                        <span class="title"><b>Dionatan Novais</b></span>
                        <p>Beta tester</p>
                    </li><!-- Fim Dionta -->

                    <li class="collection-item avatar"><!-- Eduardo -->
                        <img src="images/eduardo.jpg" alt="" class="circle">
                        <span class="title"><b>Eduardo Straitenberger</b></span>
                        <p>Técnico em eletrônica<p>
                    </li><!-- Fim Eduardo -->

                    <li class="collection-item avatar"><!-- Leo -->
                        <img src="images/leonardo.png" alt="" class="circle">
                        <span class="title"><b>Leonardo Gomes</b></span>
                        <p>Maior traira da Fatec</p>
                    </li><!-- Fim Leo -->

                    <li class="collection-item avatar"><!-- Muzy -->
                        <img src="images/pedro-muzy.png" alt="" class="circle">
                        <span class="title"><b>Pedro Muzy</b></span>
                        <p>Disponível</p>
                    </li><!-- Fim Muzy -->

                    <li class="collection-item avatar"><!-- Saloma -->
                        <img src="images/salomao.jpg" alt="" class="circle">
                        <span class="title"><b>Salomão Ribeiro</b></span>
                        <p>Pica no C</p>
                    </li><!-- Fim Saloma -->
                </ul>
            </div><!-- Fim Grupo -->

            <div class="card-panel #ffffff white teal col m8 l8 z-depth-3" style="height:423px;"><!-- Mensagens -->

                <div class="row" style="height:330px; overflow-y: scroll;"><!-- Baloes -->

                    <p class="col m12 l12"><!-- Mensagem Pessoa 1 -->
                        <span class="card-panel teal white" style="float:left; max-width:80%; margin-left:15px;">
                            Aqui vai ser a mensagem da pessoa número 1
                        </span>
                    </p><!-- Fim Mensagem Pessoa 1 -->

                    <p class="col m12 l12"><!-- Mensagem Pessoa 2 -->
                        <span class="card-panel teal #eceff1 blue-grey lighten-5" style="float:right; max-width:80%; margin-right:15px;">
                            Aqui vai ser a mensagem ou resposta da pessoa número 2
                        </span>
                    </p><!-- Fim Mensagem Pessoa 2 -->

                    <p class="col m12 l12"><!-- Mensagem Pessoa 2 -->
                        <span class="card-panel teal #eceff1 blue-grey lighten-5" style="float:right; max-width:80%; margin-right:15px;">
                            Exemplo de caso a mesma pessoa envie duas mensagens seguidas
                        </span>
                    </p><!-- Fim Mensagem Pessoa 2 -->

                    <p class="col m12 l12"><!-- Mensagem Pessoa 1 -->
                        <span class="card-panel teal white" style="float:left; max-width:80%; margin-left:15px;">
                            OK
                        </span>
                    </p><!-- Fim Mensagem Pessoa 1 -->

                </div><!-- Fim Baloes -->

                <div class="row"><!-- Inputs -->

                    <div class="input-field col m9 l9"><!--Texto-->
                        <input placeholder="Digite sua mensagem aqui..." id="input_msg" type="text" style="border-radius:5px; border:1px solid #ccc; padding-left:5px;">
                    </div><!--Fim Texto-->
                    
                    <div class="col m2 l1"><!--Botao Enviar-->
                        <button class="btn waves-effect waves-light" type="submit" title="Enviar mensagem" name="enviar" style="margin-top:20px;">
                            <i class="material-icons">send</i>
                        </button>
                    </div><!--Fim Botao Enviar-->

                    <div class="col m1 l1"><!--Botao Trocar Usuario-->
                        <button class="btn waves-effect waves-light" type="submit" title="Trocar usuário que enviará a mensagem" name="trocar_usuario" style="margin-top:20px;">
                            <i class="material-icons">people</i>
                        </button>
                    </div><!--Fim Botao Trocar Usuario-->

                    <div class="col m1 l1"><!-- Botao Download-->
                        <button class="btn waves-effect waves-light" title="Baixar backup das mensagens" type="submit" name="download" style="margin-top:20px;">
                            <i class="material-icons">file_download</i>
                        </button>
                    </div><!--Fim Botao Download-->

                </div><!-- Fim imputs -->

            </div><!-- Fim Mensagens -->
            
        </div><!--Fim Base-->
    </div>

    <script type="text/javascript" src="js/materialize.min.js"></script>

</body>

</html>