<?php

function sapa($nama) {
    return "Halo, " . $nama . "!";
}

echo sapa("Dunia") . "\n";

function totalPrice(array $products): int{
    $total = 0;
    foreach ($products as $product) {
        $total += $product['price'];
    }
    return $total;
}

$products = [
    [
        "id" => 1,
        "name" => "Laptop",
        "price" => 15000000
    ],
    [
        "id" => 2,
        "name" => "Smartphone",
        "price" => 5000000
    ],
    [
        "id" => 3,
        "name" => "Headphones",
        "price" => 1000000
    ]
];
echo "Total Harga: " . totalPrice($products) . "\n";

function findProductById(array $products, int $id): ?array{
    foreach ($products as $product) {
        if ($product['id'] === $id) {
            return $product;
        }
    }
    return null;
}

$product = findProductById($products, 2);
if ($product) {
    echo "Produk Ditemukan: " . $product['name'] . "\n";
} else {    echo "Produk Tidak Ditemukan\n";
}
?>
