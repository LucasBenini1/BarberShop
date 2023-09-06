<?php
include("config.php");


$consulta = mysqli_query($conexao,"SELECT * FROM usuario");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lista.css">
    <title>Document</title>
</head>

<body>
    <table border="5">
       <tr id="tabela">
            <td>ID</td>
            <td>Nome</td>
            <td>Email</td>
            <td>Telefone</td>
            <td>Data</td>
            <td>Serviço</td>
      </tr>
      <?php while($dado = $consulta->fetch_array()){ ?>
      <tr>
            <td><?php echo $dado ["id"];?></td>
            <td><?php echo $dado ["nome"];?></td>
            <td><?php echo $dado ["email"];?></td>
            <td><?php echo $dado ["telefone"];?></td>
            <td><?php echo $dado ["data"];?></td>
            <td><?php echo $dado ["mensagem"];?></td>
      </tr>
      <?php } ?>
    </table>
</body>
</html>