<?php

header("Content-Type: application/json");

$products = [
    [
        "id" => 1,
        "name" => "Laptop",
        "price" => 15000000,
        "stock" => 10
    ],
    [
        "id" => 2,
        "name" => "Smartphone",
        "price" => 5000000,
        "stock" => 20
    ],
    [
        "id" => 3,
        "name" => "Headphones",
        "price" => 1000000,
        "stock" => 30
    ]
];

function findProductById($products, $id) {
    foreach ($products as $product) {
        if ($product["id"] == $id) {
            return $product;
        }
    }

    return null;
}

// Menampilkan Produk dengan harga <= 5000000 harus seperti ini index.php?max_price=500000
function filterProductsByPrice($products, $maxPrice) {
    $result = [];
    foreach ($products as $product) {
        if ($product["price"] <= $maxPrice) {
            $result[] = $product;
        }
    }
    return $result;
}

$id = $_GET['id'] ?? null;
$available = $_GET['available'] ?? null;
$price = $_GET['max_price'] ?? null;

if ($id){
    $product = findProductById($products, $id);

    if($product){
        echo json_encode([
            "status" => true,
            "data" => $product
        ]);
    } else {
        echo json_encode([
            "status" => false,
            "message" => "Product not found"
        ]);
    }
} elseif($available){
    $result = [];

    foreach ($products as $product) {
        if ($product['stock'] > 0) {
            $result[] = $product;
        }
    }

    echo json_encode([
        "status" => true,
        "data" => $result
    ]);
} elseif($price){
    $result = filterProductsByPrice($products, $price);

    echo json_encode([
        "status" => true,
        "data" => $result
    ]);
} else{
    echo json_encode([
        "status" => true,
        "data" => $products
    ]);
}
?>
