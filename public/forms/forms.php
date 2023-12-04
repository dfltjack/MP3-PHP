<?php

if ($_REQUEST['nome'] == '' || strlen($_REQUEST['nome']) <= 3) {
    echo 'O Campo Nome é inválido';

    return;
}
else if ($_REQUEST['email'] == '' || strlen($_REQUEST['email']) <= 3) {
    echo 'O Campo email é inválido';

    return;
}
else if ($_REQUEST['senha'] == '' || strlen($_REQUEST['senha']) <= 3) {
    echo 'O Campo senha é inválido';

    return;
}
else if ($_REQUEST['sexo'] == '' || strlen($_REQUEST['sexo']) <= 3) {
    echo 'O Campo sexo é inválido';

    return;
}
else if ($_REQUEST['estado'] == '' || strlen($_REQUEST['estado']) <= 3) {
    echo 'O Campo estado é inválido';

    return;
}
else if ($_REQUEST['descricao'] == '' || strlen($_REQUEST['descricao']) <= 3) {
    echo 'O Campo descricao é inválido';

    return;
}

echo "Nome: {$_REQUEST['nome']}";
echo "<hr>";
echo "E-Mail: {$_REQUEST['email']}";
echo "<hr>";
echo "Senha: {$_REQUEST['senha']}";
echo "<hr>";
echo "Concordou? " . isset($_REQUEST['concordo']) && $_REQUEST['concordo'] != '' ? 'Sim' : 'Não';
echo "<hr>";
echo "Sexo: {$_REQUEST['sexo']}";
echo "<hr>";
echo "Estado: {$_REQUEST['estado']}";
echo "<hr>";
echo "Descrição: {$_REQUEST['descricao']}";


/*
echo "Nome: {$_POST['nome']}";
echo "<hr>";
echo "E-Mail: {$_POST['email']}";
echo "<hr>";
echo "Senha: {$_POST['senha']}";
echo "<hr>";
echo "Concordou? " . isset ($_POST['concordo']) && $_POST['concordo'] != '' ? 'Sim' : 'Não';
echo "<hr>";
echo "Sexo: {$_POST['sexo']}";
echo "<hr>";
echo "Estado: {$_POST['estado']}";
echo "<hr>";
echo "Descrição: {$_POST['descricao']}";
*/

// var_dump($_GET['nome']);
// echo "<br>";
// var_dump($_GET['email']);
// echo "<br>";
// var_dump($_GET['senha']);
