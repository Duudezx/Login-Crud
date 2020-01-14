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

        // $comandoSQL = para atualizar cadastro
        if(!is_null($cpf ) && is_numeric($cpf ) ){
            $comandoSQL = 'UPDATE tb_contato ' ;
            $comandoSQL = $comandoSQL . ' SET ' ;
            $comandoSQL = $comandoSQL . ' cd_cpf = ' . $conn->quote($cpf)  . ', ';    
            $comandoSQL = $comandoSQL . ' nm_usuario = ' . $conn->quote($nome)  . ', ';          
            $comandoSQL = $comandoSQL . ' ds_email = ' . $conn->quote($email)  . ', ';         
            $comandoSQL = $comandoSQL . ' cd_fixo = ' . $conn->quote($fixo)  . ', ';           
            $comandoSQL = $comandoSQL . ' cd_celular = ' . $conn->quote($celular)  . ' ';           
            $comandoSQL = $comandoSQL . ' where cd_usuario = ' . $conn->quote($cpf);

            $linhasafetadas = $conn->exec($comandoSQL);

            echo 'Sucesso!|' . $linhasafetadas;
    
            }else{
                echo 'Erro: Operação Inválida!!, Parâmetros INCORRETOS Digite novamente!' ;
            }
    
        } catch (PDOException $Exception) {
            echo "Erro: " . $Exception->getMessage( ) . " - cpf: " . $Exception->getCode( ) ;
        }
        
    }else {
        //Não Veio e vou retornar um erro; 
        echo 'Erro!';
        echo 'Sem Controle!';
    }
    
?>