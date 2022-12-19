
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Formulário Gerador PDO</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body bgcolor="black" style="color: white;">
    <div class="section no-pad-bot" id="index-banner">
      <div class="container">
        <div class="row"> 
          <?php
          session_start();
          if (isset($_SESSION['msg']) and !empty($_SESSION['msg'])){
            ?>
            <div class='mensagem center white-text pink darken-1' style='margin-top:3%; margin-bottom: -1%'>
              Arquivo criado com SUCESSO! Clique <b><u><a style="color:white" href="gerados/<?=$_GET['nome']?>.zip">AQUI</a></u></b> para realizar o download dos arquivos gerados.
            </div>
            <?php
            unset($_SESSION['msg']);
            session_destroy();
          }
          ?>
        </div>
        <div class="row" style="padding-top: 1%;">
          <h3 align="center">Gerador de DAO e Classes</h3>
        </div>
        <div style="padding-bottom: 1%">
          <h6 style="color: #d81b60" align="center">Formulário que gera DAO's e Classes com PDO!</h6>
        </div>
        <hr width="100%" size="1px"></hr>
        <div class="container" style="padding-top: 10%">
          <form method="POST" action="gerar.php">
            <div class="row">
              <div class="col s2"></div>
              <div class="input-field col s8">
                <input placeholder="localhost (Exemplo)" id="host" type="text" name="host" >
                <label for="host" class="lbl" style="color: #d81b60">Endereço do Banco:</label>
              </div>
            </div>
            <div class="row">
              <div class="col s2"></div>
              <div class="input-field col s8">
                <input placeholder="Nome_do_Banco (Nome do banco salvo em seu phpMyAdmin)" id="nomebd" type="text" name="nomebd" required>
                <label for="nomebd" class="lbl" style="color: #d81b60">Nome do Banco:</label>
              </div>
            </div>
            <div class="row">
              <div class="col s2"></div>
              <div class="input-field col s8">
                <input placeholder='root (Caso deixe em branco o padrão é "root")' id="usuario" type="text" name="usuario">
                <label for="usuario" class="lbl" style="color: #d81b60">Usuário do Banco:</label>
              </div>
            </div>
            <div class="row">
              <div class="col s2"></div>
              <div class="input-field col s8">
                <input placeholder="(Caso deixe em branco o padrão será sem senha)" id="senha" type="text" name="senha">
                <label for="senha" class="lbl" style="color: #d81b60">Senha do Banco:</label>
              </div>
              <div class="col s4"></div>
            </div>
            <div class="row center" style="padding-top: 5%;padding-bottom: 15%">
              <button type="submit" class="button" id="button">Gerar Classes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
     <?php include("rodape.php"); ?>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    
    <script src="js/materialize.js"></script>
    
  </body>
  </html>
