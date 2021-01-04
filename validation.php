<?php

session_start();
$nome = $_POST['nome'];
if(empty($nome)) {
    $_SESSION['message-error'] = "Name's field cannot be empty!";
    header("location:index.php");
}

$idade = $_POST['idade'];
if(empty($idade)) {
    $_SESSION['message-error'] = "What's your age, please sir!";
    header("location:index.php");
}



echo $nome .' '. $idade;
