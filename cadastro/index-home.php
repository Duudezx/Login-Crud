<!DOCTYPE html>
<html>

<head>
    <?php
    include('header.php');
    ?>
    <title>Home</title>
</head>

<body>
    <h1>Bem Vindo!</h1>
    <h2>Escolha uma das opções abaixo: </h2>
    <div id='forms'>
        <?php
        include('paginas/home/home.php');
        ?>
    </div>
    <div class="bg">
    </div>
</body>

</html>
<?php
include('footer.php');
?>