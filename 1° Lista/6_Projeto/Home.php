<?php

session_start();

if (!isset($_SESSION['password']) == true and !isset($_SESSION['email']) == true ) {
    unset($_SESSION['email']);
    unset($_SESSION['passowrd']);
    header("Location:Login.php");
}
$logado = $_SESSION['email'];


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>
        Parabens!, Você logou com sucesso!
    </h1>
    
</body>
</html>