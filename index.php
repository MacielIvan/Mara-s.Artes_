<?php

    

    if(isset($_POST["submit"]))
    {
    include_once("config.php");
    
    $nome = $_POST["nome"];
    $numero = $_POST["numero_telefone"];
    $email = $_POST["email"];
    $modelo = $_POST["modelo"];
    $cor = $_POST["cor"];
    $tamanho = $_POST["tamanho"];

    $result = mysqli_query($conexao, "INSERT INTO pedidos(nome,numero,email,modelo,cor,tamanho)
    VALUES('$nome','$numero','$email','$modelo','$cor','$tamanho')");

    echo "<script>
    alert('Seu pedido foi enviado com sucesso')
    </script>";

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">            
</head>

<body>
    <div class="box">
        <form action="index.php" method="POST">
            <fieldset>
                <legend><b>Monte seu chinelo</b></legend>

                <br>
                <br>

                <div class="dados">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>

                <br>
                <br>

                <div class="dados">
                    <input type="tel" name="numero_telefone" id="numero_telefone" class="inputUser" required>
                    <label for="numero_telefone" class="labelInput">Número para contato</label>
                </div>

                <br>
                <br>

                <div class="dados">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">E-mail</label>
                </div>

                <br>
                <br>

                <div id="modeloBox">
                    <b>Escolha o modelo:</b>

                    <br>

                    <select class="customizar" name="modelo">
                        <option>Top Luxuosa</option>
                        <option>Top Simples</option>
                        <option>Slim Luxuosa</option>
                        <option>Slim Simples</option>
                    </select>
                </div>

                <br>
                <br>

                <div id="corBox">
                    <b>Escolha a cor:</b>

                    <br>

                    <select class="customizar" name="cor">
                        <option>Amarelo</option>
                        <option>Azul</option>
                        <option>Bege</option>
                        <option>Branco</option>
                        <option>Cinza</option>
                        <option>Coral</option>
                        <option>Laranja</option>
                        <option>Marrom</option>
                        <option>Preto</option>
                        <option>Rosa</option>
                        <option>Roxo</option>
                        <option>Verde</option>
                        <option>Vermelho</option>
                    </select>
                </div>

                <br>
                <br>

                <div id="tamanhoBox">
                    <b>Escolha o tamanho</b>

                    <br>
                    
                    <select class="customizar" name="tamanho">
                        <option>33/34</option>
                        <option>35/36</option>
                        <option>37/38</option>
                        <option>39/40</option>
                        <option>41/42</option>
                        <option>43/44</option>
                    </select>
                </div>

                <br>
                <br>

                <input type="submit" name="submit" id="submit" value="Enviar">
            </fieldset>
        </form>
    </div>
</body>
</html>