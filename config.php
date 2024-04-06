<?php
    $dbHost='Localost';
    $dbUsername='root';
    $dbPassword='';
    $dbName='formulario-chinelos';

    $conexao = new msqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "Conexão realizada";
    }
?>