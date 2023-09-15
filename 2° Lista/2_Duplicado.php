<?php

$array = [1,2,2,3,3,4,5,6,7,8,9];

function removeDuplicate($array){
    $nova_array = array_unique($array);
    return $nova_array;
}

$array_filtrada = removeDuplicate($array);

foreach ($array_filtrada as $value) {
    echo $value;
}

?>