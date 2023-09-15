<?php

const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DBNAME = 'login';


$mysqli = new mysqli(HOST,USERNAME,PASSWORD,DBNAME);


//Procurar um verificador mais eficiênte
/*
if ($mysqli->error) {
    echo 'Ocorreu um erro na conexão: '. $mysqli->error;
}
else{
    echo 'A conexão foi bem sucedida!';
}
*/

