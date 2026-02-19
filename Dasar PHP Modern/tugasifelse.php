<?php

$price = 500000;

if ($price > 1000000){
    echo "Mahal";
}else if ($price >500000 && $price <= 1000000){
    echo "Sedang";
}else{
    echo "Murah";
};

echo "\n";

$result = match($price){
    $price > 1000000 => "Mahal",
    $price > 500000 && $price <= 1000000 => "Sedang",
    default => "Murah"
};

echo $result;