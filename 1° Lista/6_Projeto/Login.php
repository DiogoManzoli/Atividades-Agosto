<?php

session_start();

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])) {

    require_once('./conn.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = $mysqli->query("SELECT * FROM users WHERE email = '$email'");

    $lista = mysqli_fetch_array($sql);
    $hash = $lista['password'];

    if (mysqli_num_rows($sql) < 1) {
        unset($_SESSION['email']);
        unset($_SESSION['passowrd']);
        header("location:Login.php");

    } elseif (password_verify($password, $hash)) {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $passowrd;
        header("location:Home.php");

    } else {
        header("location:Login.php");
    }
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
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Senha">
            <button type="submit" name="submit"> Logar </button>
            <a id="link" href="Cadastro.php"> Você não possui uma conta?</a>
        </form>

    </main>


    <footer>

    </footer>

</body>

</html>