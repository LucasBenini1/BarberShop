<?php
if(isset($_POST['submit']))
{


include_once('config.php');


$nome = $_POST['nomecompleto'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$data = $_POST['data'];
$mensagem = $_POST['mensagem'];



$result = mysqli_query($conexao, "INSERT INTO usuario (nome, email, telefone, data, mensagem) VALUES ('$nome', '$email', '$telefone', '$data', '$mensagem')") or die('Erro ao conectar ao banco de dados');

}

?>


<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="produtos.css">

    

    <title>Document</title>
</head>

<header id="home">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet"> para importar uma fonte com link -->
    <div class="caixa">
        <div class="menubar"></div>
        <h1><img src="imagens/logo.png" class="logo1" alt="Logo da barbearia "></h1>
        <nav>
            <ul class="menuoption">
                <li><a href="#home">Home</a></li>
                <li><a href="produtos.html">Produtos</a></li>
                <li><a href="#contato">Contato</a></li>
                <li><a href="login.html">Editar</a></li>

            </ul>
            <div>
        </nav>

    </div>
    
</header>
<section id="contato">
    <h3>Contato</h3>
    <form action="carrinho.php" method="POST">
        <label for="nomecompleto">Nome Completo</label>
        <input type="text" id="nomecompleto" name="nomecompleto" class="input-padrao" required placeholder="Seu nome completo">
        <!-- required = obrigatorio, placeholder = coloca texto -->
        <label for="email">Email</label>
        <input type="email" id="email" name="email"class="input-padrao" required placeholder="seuemail@email.com">
        

        <label for="telefone">Telefone</label>
        <input type="tel" id="telefone" name="telefone"class="input-padrao" required placeholder="(XX)XXXXXXX">

        <label for="mensagem">Qual será o(s) serviço realizado?</label>
        <textarea cols="80" rows="10" id="mensagem" name="mensagem"class="input-padrao" required placeholder="Quais serão os serviços?"></textarea>

        <label for="data">Data</label>
        <input type="date" id="data" name="data"class="input-padrao" required>


        <label class="checkbox"><input type="checkbox" checked> Gostaria de receber novidades por email?</label>


        <input  type="submit" name="submit" id="submit">
        

    </form>
    <div id="carrinho1">
        <table>
            <th>
                <strong>
                     Carrinho:
                </strong>
            </th>
        </table>
    </div>

    <div id="itens"> </div>
    <div>Total: <span id="total"></span> </div>

    <script>
        var total = 0;
        var i = 0;
        var valor = 0;

        for (i = 1; i <= 99; i++) {
            var prod = localStorage.getItem("produto" + i + "");
            if (prod != null) {

                document.getElementById("itens").innerHTML += localStorage.getItem("qtd" + i) + " x ";
                document.getElementById("itens").innerHTML += localStorage.getItem("produto" + i);
                document.getElementById("itens").innerHTML += " ";
                document.getElementById("itens").innerHTML += "R$: " + localStorage.getItem("valor" + i) + "<hr>";


                valor = parseFloat(localStorage.getItem("valor" + i));
                total = (total + valor);
            }
        }

        document.getElementById("total").innerHTML = total.toFixed(2); 
    </script>


    <button type="button" onclick=" localStorage.clear(); location.reload();" id="carrinnn"> Limpar carrinho </button>

    <br><br>

   
    <footer>
        <br>
        <img src="imagens/logo.png" id="logo2" alt="logo da barbearia">

    </footer>