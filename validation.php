<?php

$nome = $_POST['nome'];
if(!isset($nome)) {
    echo 'Conteúdo não pode estar vazio';
}
$idade = $_POST['idade'];

echo $nome .' '. $idade;
