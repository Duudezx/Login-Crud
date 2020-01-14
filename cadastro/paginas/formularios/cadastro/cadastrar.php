<?php

?> 
<form action='' method='POST' name='cadastrar' id='cadastrar'>    
    <p>
        CPF:
            <input type='text' id='txtcpf' name='txtcpf' placeholder='xxx.xxx.xxx-xx' autofocus/>
        Nome:
            <input type='text' id='txtnome' name='txtnome'  placeholder='Nome e Sobrenome'/>
        E-mail:
            <input type='text' id='txtemail' name='txtemail' placeholder='ex. email@email.com' />
    </p>
    <p>
        Fixo:
            <input type='text' id='txtfixo' name='txtfixo' minlength='8' maxlength='11' placeholder='ex. (xx)xxxx-xxxx' onkeypress="return somenteNumeros(event)"/>
        Celular: 
            <input type='text' id='txtcelular' name='txtcelular' minlength='9' maxlength='11' placeholder='ex. (xx)xxxxx-xxxx' onkeypress="return somenteNumeros(event)" />
        Senha: 
            <input type='text' id='txtsenha' name='txtsenha' placeholder='Digite sua senha' />
        </p>
    <p> 
        <button type='reset' name='btlimpar' class='btn' > Limpar</button >
        <button name='btsalvar' class='btn' > Salvar </button >
    <p>
        <a class='btna' href='http://localhost:8080/cadastro/index-login.php'> Home </a>
    </p>
        <input type="hidden" name='hdncontrole' value='tabajara-never-ends'>
    </p>
</form>