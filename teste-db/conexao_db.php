<?php

try {
    $conexao = new PDO('mysql:host=localhost;dbname=banco_lucas_projetos', 'root', '312006');
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $erro) {
    echo "Erro: " . $erro->getMessage();
}