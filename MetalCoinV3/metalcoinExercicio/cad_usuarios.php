<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Cadatro</title>
    <link rel="icon" href="/img/logo.png">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/cadastro.css">
  </head>
  <body>
    <div class="cadastro">
        <label class="text_cadastro1">Metal Coin</label>
        <br>
        <label class="desc">Registre-se e ganhe 100 coins para gastar</label>
        <br>
        <label class="desc1">Da forma que desejar!</label>
    </div>
        <form action="crud/cad_usuario.php" method="post" id="formulario">
        <div>
          <label class="nome" for="inputNome">Nome</label>
          <input class="input1" type="text" name="nome">
        </div>
        <br>
        <div> 
          <label class="dt_nascimento" for="inputEmail">Data De Nascimento</label>
          <input class="text" type="text" name="dt_nascimento">
        </div>
        <br>
        <label class="text" for="inputEmail">Login</label>
        <input class="text" type="text" name="login">
        <br>
        <label class="text" for="inputEmail">Endereço</label>
        <input class="text" type="text" name="endereco">
        <br>
        <label class="text" for="inputEmail">Email</label>
        <input class="text" type="email" name="email">
        <br>
        <label class="text" for="inputSenha">Senha</label>
        <input class="text" type="password" name="senha">
        <br>
        <button><a class="text_style" href="listarUsuarios.php">listar</a></button>
        <input type="submit" value="CADASTRAR PESSOA">
        </form>
  </body>
</html>