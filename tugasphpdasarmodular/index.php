<?php

header("Content-Type: application/json");

// Load files
require_once "helpers/response.php";
require_once "data/products.php";
require_once "data/users.php";
require_once "functions/product.php";
require_once "functions/user.php";

$type = $_GET["type"] ?? null;

if ($type === "products") {

    $id = $_GET["id"] ?? null;
    $available = $_GET["available"] ?? null;
    $price = $_GET["max_price"] ?? null;

    if ($id) {

        $product = findProductById($products, $id);

        if (!$product) {
            responseJson(false, null, "Produk tidak ditemukan", 404);
        }

        responseJson(true, $product);

    } elseif ($available) {

        $result = filterProductsByStock($products);
        responseJson(true, $result);

    } elseif ($price) {

        $result = filterProductsByMaxPrice($products, $price);
        responseJson(true, $result);

    } else {

        responseJson(true, $products);

    }

} elseif ($type === "users") {

    $email = $_GET["email"] ?? null;

    if ($email) {

        $user = findUserByEmail($users, $email);

        if (!$user) {
            responseJson(false, null, "User tidak ditemukan", 404);
        }

        responseJson(true, $user);

    } else {

        responseJson(true, $users);

    }

} else {

    responseJson(false, null, "Gunakan type=products atau type=users", 400);
}
?>