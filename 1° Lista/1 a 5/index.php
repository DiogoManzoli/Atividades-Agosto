<?php
//Obs: Deixei o sql pronto para criar o banco de dados, está no arquivo sql.txt e já possui exemplos para testar

require "./conn.php";

//Clientes
$Clientes = mysqli_query($mysqli, "SELECT * FROM clientes WHERE idade > 30");

//Produtos
$Produtos = mysqli_query($mysqli, "SELECT * FROM produtos WHERE preco <= 50");

//Pedidos
$Pedidos = mysqli_query($mysqli, "SELECT * FROM pedidos");

//Funcionários
$Funcionarios = mysqli_query($mysqli, "SELECT * FROM funcionarios WHERE cargo = 'gerente'");

//Produtos2 
$produtos2 = mysqli_query($mysqli, "SELECT * FROM produtos2");


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <hr>
    <h4>Consulta para selecionar todos os clientes
        com idade acima de 30 anos:</h4>
    <!--1° Tabela Clientes -->

    <?php

    while ($listClientes = $Clientes->fetch_assoc()) {

        echo $listClientes['id_cliente'];
        echo PHP_EOL;
        echo $listClientes['nome'];
        echo PHP_EOL;
        echo $listClientes['idade'];
        echo '<br>';
    }

    ?>
    <hr>
    <h4>Consulta para selecionar todos os produtos
        cujo preço seja igual ou inferior a 50:</h4>
    <!--2° Tabela Produtos -->


    <?php


    while ($ListProdutos = $Produtos->fetch_assoc()) {

        echo $ListProdutos['id_produto'];
        echo PHP_EOL;
        echo $ListProdutos['nome'];
        echo PHP_EOL;
        echo $ListProdutos['preco'];
        echo '<br>';
    }


    ?>

    <hr>
    <h4>Consulta para selecionar todos os
        funcionários que tenham o cargo de "Gerente":</h4>
    <!--3° Tabela Funcionários -->


    <?php

    while ($ListFuncionarios = $Funcionarios->fetch_assoc()) {
        echo $ListFuncionarios['id_funcionario'];
        echo PHP_EOL;
        echo $ListFuncionarios['nome'];
        echo PHP_EOL;
        echo $ListFuncionarios['cargo'];
        echo '<br>';
    }


    ?>

    <hr>
    <h4>Escreva uma consulta para selecionar todos os
        pedidos que tenham sido realizados em 2023:</h4>
    <!--4°Tabela Pedidos -->


    <?php

    while ($ListPedidos = $Pedidos->fetch_assoc()) {

        if (str_contains($ListPedidos['data'], '2023')) {
            echo $ListPedidos['id_pedido'];
            echo PHP_EOL;
            echo $ListPedidos['valor'];
            echo PHP_EOL;
            echo $ListPedidos['status'];
            echo PHP_EOL;
            echo $ListPedidos['data'];
            echo '<br>';
        }
    
    }

    ?>
    <hr>
    <h4>Consulta para atualizar a
        quantidade em estoque de um produto específico (por exemplo,
        id_produto = 1) para um novo valor (por exemplo, 50):
    </h4>
    <!--5° Tabela produtos2 -->



    <form action="" method="post">
        <input type="number" name="id" placeholder="id">
        <input type="nome" name="name" placeholder="Nome do Produto">
        <input type="number" name="valor" placeholder="Valor">
        <button type="submit" name="update">ATUALIZAR</button>
    </form>

    <?php

    if (isset($_POST['update']) && !empty($_POST['name']) && !empty($_POST['valor'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $valor = $_POST['valor'];

        $update = mysqli_query($mysqli, "UPDATE produtos2 SET nome = '$name', quantidade_estoque = '$valor'  WHERE id_produto = $id");
    }

    //Essa função que eu usei abaixo foi só pra mostrar que sei outra prossibilidade de pegar as linhas da tabela.
    while ($ListaProdutos2 = mysqli_fetch_array($produtos2)) {
        echo $ListaProdutos2['id_produto'];
        echo PHP_EOL;
        echo $ListaProdutos2['nome'];
        echo PHP_EOL;
        echo $ListaProdutos2['quantidade_estoque'];
        echo PHP_EOL;
        echo '<br>';
    }



    ?>


</body>

</html>