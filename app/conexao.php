<?php
    $host = "127.0.0.1";
    $username = "rooter";
    $password = "root";
    $dbname = "db_cadastro";

    $conexao = new mysqli($host, $username, $password, $dbname);

    if ($conexao->connect_error) {
        die("Falha de conexao");
    } else {                                            
        echo "Conexao bem sucedida";
    }
