<?php

header("Content-Type: application/json");

$products = [
    ["id"=>1,"name"=>"Laptop","price"=>10000000,"stock"=>5],
    ["id"=>2,"name"=>"Mouse","price"=>200000,"stock"=>0],
    ["id"=>3,"name"=>"Keyboard","price"=>500000,"stock"=>10]
];

$users = [
    ["id"=>1,"name"=>"Riz","email"=>"riz@mail.com","role"=>"admin"],
    ["id"=>2,"name"=>"Budi","email"=>"budi@mail.com","role"=>"user"],
    ["id"=>3,"name"=>"Sinta","email"=>"sinta@mail.com","role"=>"user"]
];

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

function findUserByEmail($users, $email){
    foreach ($users as $user){
        if ($user["email"] == $email){
            return $user;
        }
    }
    return null;
}

$type = $_GET['type'] ?? null;

if ($type === "products") {

    $id = $_GET['id'] ?? null;
    $available = $_GET['available'] ?? null;
    $price = $_GET['max_price'] ?? null;

    if ($id) {

        $product = findProductById($products, $id);

        if ($product) {
            echo json_encode(["status"=>true,"data"=>$product]);
        } else {
            echo json_encode(["status"=>false,"message"=>"Produk tidak ditemukan"]);
        }

    } elseif ($available) {

        $result = filterProductsByStock($products);
        echo json_encode(["status"=>true,"data"=>$result]);

    } elseif ($price) {

        $result = filterProductsByMaxPrice($products, $price);
        echo json_encode(["status"=>true,"data"=>$result]);

    } else {

        echo json_encode(["status"=>true,"data"=>$products]);

    }

} elseif ($type === "users") {

    $email = $_GET['email'] ?? null;

    if ($email) {

        $user = findUserByEmail($users, $email);

        if ($user) {
            echo json_encode(["status"=>true,"data"=>$user]);
        } else {
            echo json_encode(["status"=>false,"message"=>"User tidak ditemukan"]);
        }

    } else {

        echo json_encode(["status"=>true,"data"=>$users]);

    }

} else {

    echo json_encode([
        "status"=>false,
        "message"=>"Parameter type tidak valid. Gunakan type=products atau type=users"
    ]);

}
?>