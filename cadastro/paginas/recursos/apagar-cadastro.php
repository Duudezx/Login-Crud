<?php
require_once('..\..\includes\conexao\connection.php');

if (isset($_POST['hdncontrole'])) {
    try {
    
        $cpf = $_POST['txtcpf'];
        $nome = $_POST['txtnome'];
        $celular = $_POST['txtcelular'];
        $email = $_POST['txtemail'];
        $fixo = $_POST['txtfixo'];
        $senha = $_POST['txtsenha'];
        

         // $comandoSQL = para deletar a partir do cpf
        if(!is_null($cpf ) && is_numeric($cpf ) ){
            $comandoSQL = 'DELETE from tb_contato ' ;
            $comandoSQL = $comandoSQL . ' where cd_cpf = ' . $conn->quote($cpf);


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