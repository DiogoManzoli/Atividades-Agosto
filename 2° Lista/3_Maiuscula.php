<?php

$nomes = ['diOGO','LuCas','jorge','Maria'];


function arrayFiltrada($array){

    $array_filtrada = [];

    foreach ($array as $value) {

        $maiuscula = ucwords(strtolower($value));
        array_push($array_filtrada,$maiuscula);
       
    }
    return $array_filtrada;
}

print_r(arrayFiltrada($nomes));


/*função mb_convert_case(). O primeiro argumento é a string a ser convertida, o segundo o modo respectivamente todas maiúsculas, todas minúsculas
e iniciais maiúsculas (MB_CASE_UPPER, MB_CASE_LOWER, e MB_CASE_TITLE)*/