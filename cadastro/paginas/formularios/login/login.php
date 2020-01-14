<form action='' method='POST' name='login' id='login'>    
    <p>
        cpf: 
            <input type='text' id='txtcpf' name='txtcpf' placeholder='CPF' maxlength="11" autofocus/>
        Senha: 
            <input type='password' id='txtsenha' name='txtsenha' placeholder='Digite sua senha' maxlength="30" />
    </p>
    <p> 
        <button type='reset' name='btnlimpar' class="btn">Limpar</button>
        <button name='btlogar' class="btn"> Logar </button >
        <p>
            <p>
            <h2>
                Não tem cadastro
            </h2>
            </p>
                <a class='btna' href='http://localhost:8080/cadastro/index-cadastrar.php'> Cadastrar-se </a>
        </p>
        <input type="hidden" name='hdncontrole' value='tabajara-never-ends'>
    </p>
</form>