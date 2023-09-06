<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form_alteracao.css">
    <link rel="stylesheet" href="delete.php">
    <title>Document</title>
</head>

<body>
    <h1>Editar cadastro de usuários</h1>

<form method="POST" action="edit.php" >
    
    Id <input type="text" name="idedit" placeholder="Qual o ID no DB?"><br><br>

    Nome <input type="text" name="nomeedit"placeholder="Qual será o nome?"><br><br>


    Email <input type="text" name="emailedit"placeholder="Qual será o email?"><br><br>



    Telefone <input type="tel" name="telefoneedit"placeholder="Qual será o telefone?"><br><br>



    Data <input type="date" name="dataedit"><br><br>



    Qual será o serviço? <input type="text" name="msgedit"placeholder="Qual será o novo serviço?"><br><br>


   <input type="submit" value="Editar">


</form>
<footer>
<a href="lista.php">Lista de cadastros</a>
</footer>