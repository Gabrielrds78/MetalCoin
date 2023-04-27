<!DOCTYPE html>
<html lang="pt-br">
<head>
<head>
    <title>Login</title>
    <link rel="icon" href="/img/logo.png">
    <meta charset="utf-8">
  </head>
</head>
<body style="width: 920px;" >
<div class="loginpg">
    <label class="metalcoin">Metal Coin</label>
    <label class="textlogin" >Login</label>
</div>
<form action="crud/cad_produto.php" method="post">
    <label class="login" >Nome</label>
    <input class="barralogin" type="text" name="nome" id="">
    <label class="senha">Link</label>
    <input class="barrasenha" type="text" name="link" id="">
    <label class="senha">valor</label>
    <input class="barrasenha" type="text" name="valor" id="">
    <input class="bnt_cad" type="submit" value="CADASTRAR PRODUTO">
    <a class="criarconta" href="cad_usuarios.php">Ainda nao tem uma conta?<br> Cadastre-se já!</a>
</form>
</body>
</html>