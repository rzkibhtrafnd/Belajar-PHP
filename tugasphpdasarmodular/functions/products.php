<?php
function findProductById($products, $id){
    foreach ($products as $product){
        if ($product["id"] == $id){
            return $product;
        }
    }
    return null;
}

function filterProductsByStock($products){
    $result = [];
    foreach ($products as $product){
        if ($product["stock"] > 0){
            $result[] = $product;
        }
    }
    return $result;
}

function filterProductsByMaxPrice($products, $price){
    $result = [];
    foreach ($products as $product){
        if ($product["price"] <= $price){
            $result[] = $product;
        }
    }
    return $result;
}
?>