<?php

$host = 'localhost';
$usename = 'root';
$password = '';
$dbname = 'agosto';

$mysqli = new mysqli($host,$usename,$password,$dbname);

/*

if (mysqli_connect_errno()) {
    echo "Ocorreu um eror na conexão:". mysqli_connect_errno();
}
else{
    echo "A conexão ocorreu com sucesso";
}

*/
