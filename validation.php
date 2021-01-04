<?php

session_start();

$categorias = array(
    'infantil',
     'adolescente', 
    'adulto'
);


$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)) { $_SESSION['message-error'] = 'O nome não pode ser vazio, por favor preencha-o novamente'; }
else if(strlen($nome) < 3) { $_SESSION['message-error'] = 'O nome não pode conter menos de 3 caracteres'; }
else if(strlen($nome) > 40) { $_SESSION['message-error'] = 'O nome não pode conter mais de 40 caracteres'; }
header("location:index.php");

if(!is_numeric($idade)) { $_SESSION['message-error'] = 'Informe um número para idade'; }
header("location:index.php");



