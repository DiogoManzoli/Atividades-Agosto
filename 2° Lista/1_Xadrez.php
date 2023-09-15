<?php
//É necessário verificar se as duas torres possue uma letra ou um número igual.

//Foi utilizado uma função chamada similar_text que verifica se as duas strings possuem algum caractere similar.
function torreAtaca( $torre1,  $torre2){

    if (similar_text($torre1,$torre2) == 1) {
        return "TRUE";
    }
    else{
        return "FALSE";
    }
    
}

echo torreAtaca($torre1,$torre2);


