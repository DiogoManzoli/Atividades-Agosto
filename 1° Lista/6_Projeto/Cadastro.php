<?php

//Obs: O diferencial do meu projeto é que eu utilizei sessões, por isso n foquei muito no css.


if (isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {

    require_once("./conn.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $inserindoDados = $mysqli->query("INSERT INTO users VALUES(NULL,'$name','$email','$password')");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

    <header>
        <nav>
            <h1></h1>
            <ul>
                <a href=""></a>
                <a href=""></a>
                <a href=""></a>
            </ul>
        </nav>
    </header>


    <main>

        <form action="" method="post">
            <input type="text" name="name" placeholder="Nome Completo">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Senha">
            <button name="submit" type="submit"> Cadastrar </button>
            <a id="link" href="Login.php"> Possui uma conta? </a>
        </form>

    </main>


    <footer>

    </footer>

</body>

</html>