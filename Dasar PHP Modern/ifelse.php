<?php

$stock = 10;

// If Standar
if ($stock > 0){
    echo "Tersedia";
}else{
    echo "Tidak Tersedia";
};

// Match
$result = match($stock){
    $stock > 0 => "Tersedia",
    default => "Tidak Tersedia"
};

// Real Case Role User
$role = "admin";

$message = match($role){
    "admin" => "Selamat datang, Admin!",
    "editor" => "Selamat datang, Editor!",
    "user" => "Selamat datang, User!",
    default => "Role tidak dikenali."
};

echo "\n" . $message;