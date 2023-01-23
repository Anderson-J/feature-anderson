<?php
    if ($_SERVER["REQUEST_METHOD"] == "post") {
        $nome = $_POST["nome"];
        $cep = $_POST["cep"];
        $endereco = $_POST["endereco"];
        
            $stmt = $conexao->stmt_init();
            
                $stmt->prepare(
                    'INSERT INTO cdt_cadastro
                    (cdt_nome, cdt_cep, cdt_endereco)
                    VALUES (?, ?, ?)'
                );
            
                $stmt->bind_param('sis', $nome, $cep, $endereco);
            
                $stmt->execute();
    }