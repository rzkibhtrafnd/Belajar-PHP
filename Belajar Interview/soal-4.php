<?php
// Tampilkan Bilangan Prima
function checkPrima($number){
    if($number <= 1){
        return "Bukan bilangan prima";
    }
    for($i = 2; $i <= sqrt($number); $i++){
        if($number % $i == 0){
            return "Bukan bilangan prima";
        }
    }
    return "Bilangan prima";
}

echo checkPrima(7);