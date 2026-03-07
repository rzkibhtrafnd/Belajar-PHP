<?php

function findUserByEmail(array $users, string $email): ?array{
    foreach ($users as $user) {
        if ($user['email'] === $email) {
            return $user;
        }
    }
    return null;    
}

function countActiveUsers(array $users): int {
    $count = 1;
    foreach ($users as $user){
        if ($user['active']) {
            $count++;
        }
    }    
    return $count;
}

$users = [
    [
        "id" => 1,
        "name" => "Alice",
        "email" => "alice@example.com",
        "active" => true
    ],
    [
        "id" => 2,
        "name" => "Bob",
        "email" => "bob@example.com",
        "active" => false
    ],
    [
        "id" => 3,
        "name" => "Charlie",
        "email" => "charlie@example.com",
        "active" => true
    ]
];

$user = findUserByEmail($users, "charlie@example.com");
if ($user) {
    echo "User ditemukan: " . $user['name'] . "\n";
} else {
    echo "User tidak ditemukan\n";
}

echo "Jumlah user aktif: " . countActiveUsers($users) . "\n";

?>