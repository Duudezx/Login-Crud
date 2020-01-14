<?php
//cadastrar
//Objetivo salvar os contatos recebidos via POST 
    require_once('..\..\includes\conexao\connection.php');

if(isset($_POST['hdncontrole']))  {
    //veio uma requisição via POST do lugar correto(em teoria)

    if (isset( $_POST['txtcpf']) || isset( $_POST['txtnome']) || isset( $_POST['txtemail']) || isset( $_POST['txtfixo']) || isset( $_POST['txtcelular']) || isset( $_POST['txtsenha'])) {

        if (!empty($_POST['txtcpf']) && !empty($_POST['txtnome']) && !empty($_POST['txtemail']) && !empty($_POST['txtfixo']) && !empty($_POST['txtcelular']) && !empty($_POST['txtsenha']))  {
                
            echo 'Sucesso!';
            echo '<br>';
            echo $_POST['txtcpf'];
            echo '<br>';
            echo $_POST['txtnome'];
            echo '<br>';
            echo $_POST['txtemail'];
            echo '<br>';
            echo $_POST['txtfixo'];
            echo '<br>';
            echo $_POST['txtcelular'];
            echo '<br>';
            echo $_POST['txtsenha'];
    
        }else{
            echo 'ERRO!';
            echo '<br>';
            echo 'Algum campo esta em Branco!';
    }
    try {
        //validar parametro de entrada.
        $cpf = $_POST['txtcpf'];
        $nome = $_POST['txtnome'];
        $celular = $_POST['txtcelular'];
        $email = $_POST['txtemail'];
        $fixo = $_POST['txtfixo'];
        $senha = $_POST['txtsenha'];

        $comandoSQL = 'insert into tb_contato (cd_cpf, nm_usuario, cd_celular, ds_email, cd_fixo, cd_senha) VALUES ' ;

        $comandoSQL = $comandoSQL . ' (' . $conn->quote($cpf) . ', ';
        $comandoSQL = $comandoSQL . $conn->quote($nome) . ', ';
        $comandoSQL = $comandoSQL . $conn->quote($celular) . ', ';
        $comandoSQL = $comandoSQL . $conn->quote($email) . ', ';
        $comandoSQL = $comandoSQL . $conn->quote($fixo) . ', ';
        $comandoSQL = $comandoSQL . $conn->quote($senha) . ')';

        //Para fins de debug aka verificar se o cpf SQL está sendo gerado de forma adequada!
        //echo $comandoSQL ; 
        //die;

        $linhasafetadas = $conn->exec($comandoSQL);

        //echo 'Sucesso!|' . $linhasafetadas;
    } catch (PDOException $Exception) {
        echo "Erro: " . $Exception->getMessage( ) . "  -  cpf: " . $Exception->getCode( ) ;
    }
}
    }else{
        //Não Veio e vou retornar um erro; 
        echo 'ERRO!'; 
        }
        
?>