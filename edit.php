<?php
$idedit = $_POST['idedit'];
$nomeedit = $_POST['nomeedit'];
$emailedit = $_POST['emailedit'];
$telefoneedit = $_POST['telefoneedit'];
$dataedit = $_POST['dataedit'];
$msgedit = $_POST['msgedit'];

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName='trabalho';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);


$result_usuario = "UPDATE usuario SET nome = '$nomeedit',email = '$emailedit',telefone = '$telefoneedit',data = '$dataedit',mensagem = '$msgedit' WHERE id = '$idedit'";
$resultado_usuario = mysqli_query($conexao, $result_usuario);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Editado com sucesso! Para voltar à página principal clique <a href="carrinho.php">aqui!</a> <br><br>
    Editado com sucesso! Para acessar a lista clique <a href="lista.php">aqui!</a>
</body>
</html>