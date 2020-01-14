<?php
require_once('..\..\includes\conexao\connection.php');


if (isset($_POST['hdncontrole'])) {
    try {
    
        $cpf = $_POST['txtcpf'];
        $senha = $_POST['txtsenha'];
        

        $comandoSQL = 'SELECT * FROM tb_contato WHERE cd_cpf= $cpf AND cd_senha= $senha';

        if($comandoSQL)
            {
                header('location: cadastro/index-home.php');
            }
        else
            {
                header('location: login.php');
            }

        $linhasafetadas = $conn->exec($comandoSQL);

        echo 'Sucesso!|' . $linhasafetadas;

        } else{
        echo 'Erro: Operação Inválida!!, Parâmetros INCORRETOS Digite novamente!' ;
        }
    
    }catch (PDOException $Exception) {
         echo "Erro: " . $Exception->getMessage( ) . "  -  cpf: " . $Exception->getCode( ) ;
    }

}else {
            //Não Veio e vou retornar um erro; 
            echo 'Erro!';
            echo 'Sem Controle!';
        }


?>

