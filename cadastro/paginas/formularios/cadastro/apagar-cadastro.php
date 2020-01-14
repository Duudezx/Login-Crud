<?php

?> 
<form action='' method='POST' name='apagar-cadastro' id='apagar-cadastro'>
    <p>
        CPF:
            <input type='text' id='txtcpf' name='txtcpf'  placeholder='CPF' autofocus/>
        Nome: 
            <input type='text' id='txtnome' name='txtnome' placeholder='Nome e Sobrenome' />
        E-mail: 
            <input type='email' id='txtemail' name='txtemail' placeholder='ex.email@email.com' />
    </p>
    <p>
        Fixo: 
            <input type='tel' id='txtfixo' name='txtfixo' placeholder='ex. (xx)xxxx-xxxx' minlength="8" maxlength="11" onkeypress="return somenteNumeros(event)" />
        Celular: 
            <input type='tel' id='txtcelular' name='txtcelular' placeholder='ex. (xx)xxxxx-xxxx' minlength="8" maxlength="11" onkeypress="return somenteNumeros(event)" />
        Senha: 
            <input type='text' id='txtsenha' name='txtsenha' placeholder='Digite sua senha' />
        </p>
    <p>
        <button type='reset' name='btnlimpar' class="btn">Limpar </button>
        <button name='btnapagar' class="btn">Apagar </button>
            <p>
                <a class='btna' href='http://localhost:8080/cadastro/index-login.php'> Home </a>
            </p>
        <input type="hidden" name='hdncontrole' value='tabajara-never-ends'>
    </p>
</form>