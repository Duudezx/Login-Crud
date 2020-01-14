<?php

try {
    $conn = new PDO("$driver:host=$server;dbname=$database", $user, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //PDO::ERRMODE_SILENT
    //PDO::ERRMODE_WARNING
    //PDO::ERRMODE_EXCEPTION


    // Obrigando os nomes virem formatando padrão UTf8
    $conn->exec("set names utf8");
} 
catch ( PDOException $Exception ) {
    echo "Erro: " . $Exception->GetMessage( ) . "  -  cpf: " . $Exception->GetCode( ) ;
    die;
}

?>