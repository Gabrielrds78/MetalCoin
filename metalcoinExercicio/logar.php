<?php
include("conn.php");

$login = $_POST ["login"];
$senha = $_POST  ["senha"];

$usuario = $pdo->prepare('SELECT * FROM usuario where login=:login AND senha=:senha');
$usuario->execute(array(':login'=>$login, ':senha'=>$senha));

$rowTable = $usuario->fetchAll();

if (empty($rowTable)) {
    echo "<script>
          alert('Usuario e/ou senha invalidos')
          </script>";
} else {
    $sessao = $rowTable[0];

    if(!isset($_SESSION)) {
        session_start();
    }
    $_SESSION['idadmin_usuario'] = $sessao['idusuario'];
    $_SESSION['email'] = $sessao['email'];
    $_SESSION['adm'] = $sessao['adm'];

    header("Location: listarUsuarios.php");
}

?>