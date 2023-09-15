<?php

//Obs: Deixei o código sql pronto no arquivo sql.txt, só copiar e colar para criar o banco. 

//Conexão com banco de dados:

const HOST = 'localhost';
const DBNAME = 'banco';
const PASSWORD = '';
const USERNAME = 'root';

$mysqli = new mysqli(HOST,USERNAME,PASSWORD,DBNAME);

/*
if ($mysqli->error) {
    echo "Ocurre um erro na conexão: ". $mysqli->error;
}
else{
    echo "Conexão efetuada com sucesso!";
}
*/

//Inserindo Comentários

if (isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['comment'])  ) {

    $name = $_POST['name'];
    $comment = $_POST['comment'];

    $sql_insert = mysqli_query($mysqli,"INSERT INTO comments VALUES(NULL,'$name','$comment')");

    //$sql_insert = $mysqli->query("INSERT INTO comments VALUES(NULL,'$name','$comment')");
    header('Location:index.php');

}