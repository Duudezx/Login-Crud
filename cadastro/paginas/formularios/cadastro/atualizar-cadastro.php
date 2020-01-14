<?php

?> 
<form action='' method='POST' name='atualizar-cadastro' id='atualizar-cadastro'>
    <p>
        cpf: 
            <input type='text' id='txtcpf' name='txtcpf' placeholder='CPF' autofocus/>
        Nome:
            <input type='text' id='txtnome' name='txtnome'  placeholder='Nome e Sobrenome' />
        E-mail:
            <input type='email' id='txtemail' name='txtemail' placeholder='ex. email@email.com' />
    </p>
    <p>
        Fixo:
            <input type='tel' id='txtfixo' name='txtfixo' minlength='8' maxlength='11' placeholder='ex. (xx)xxxx-xxxx' onkeypress="return somenteNumeros(event)"/>
        Celular: 
            <input type='tel' id='txtcelular' name='txtcelular' minlength='9' maxlength='11' placeholder='ex. (xx)xxxxx-xxxx' onkeypress="return somenteNumeros(event)"/>
        Senha: 
            <input type='text' id='txtsenha' name='txtsenha' placeholder='Digite sua senha' />
        </p>
    <p> 
        <button type='reset' name='btnlimpar' class="btn">Limpar</button>
        <button name='btalterar' class="btn"> Alterar </button >
            <p>
                <a class='btna' href='http://localhost:8080/cadastro/index-login.php'> Home </a>
            </p>
        <input type="hidden" name='hdncontrole' value='tabajara-never-ends'>
    </p>
</form>