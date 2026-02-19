<?php
$users = [
    [
        "id" => 1,
        "name" => "Alice",
        "email" => "alice@example.com",
        "is_active" => true
    ],
    [
        "id" => 2,
        "name" => "Bob",
        "email" => "bob@example.com",
        "is_active" => false
    ],
    [
        "id" => 3,
        "name" => "Charlie",
        "email" => "charlie@example.com",
        "is_active" => true
    ]
];

// Tampilkan user ke-2, Tampilkan hanya email semua user
echo "User ke-2: " . $users[1]['name'] . "\n";
echo "Email semua user:\n";
foreach ($users as $user) {
    echo "- " . $user['email'] . "\n";
}
?>