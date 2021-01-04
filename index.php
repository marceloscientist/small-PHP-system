<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Inscrição de Competidores de Natação</h1>

    <?php 
     echo isset($_SESSION['message-error'])? $_SESSION['message-error']:'';
     $_SESSION['message-error'] = '' 
     ?>
    <br>
    <form action="validation.php" method="post">
      <p><label for="name">Nome Completo</label>
        <input type="text" name="nome" id="nome"></p>

     <p><label for="idade">Nome Completo</label>
        <input type="text" name="idade" id="idade"></p>

        <button type="submit">Inscrever-se</button>
    </form>
</body>
</html>

