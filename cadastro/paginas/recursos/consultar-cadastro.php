<?php
//salvar-contatos
//Objetivo salvar os contatos recebidos via POST 
    require_once('..\..\includes\conexao\connection.php');

    if(isset($_POST['hdncontrole']))  {
        //veio uma requisição via POST do lugar correto(em teoria)

        try {
            

            $comandoSQL = 'SELECT * FROM tb_contato';

            $dados = $conn->query( $comandoSQL );

            $result = $dados->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode( $result , JSON_PRETTY_PRINT ) ;


            echo 'Sucesso!';
        } catch (PDOException $Exception) {
            echo "Erro: " . $Exception->getMessage( ) . "  -  Cpf: " . $Exception->getCode( ) ;
        }

        
    }else{
            //Não Veio e vou retornar um erro; 
            echo 'ERRO!'; 
            }


?>