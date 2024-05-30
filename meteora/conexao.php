<?php

$dbhost = "localhost";
$dbname = "banco_lucas_projetos";
$dbuser = "lucas";
$dbpass = "31032006";

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($mysqli->connect_error) {
    echo "Falha na conexão com o MySQL: " . $mysqli->connect_error;
} else {
    echo "Conectado ao banco de dados MySQL com sucesso!";
}
