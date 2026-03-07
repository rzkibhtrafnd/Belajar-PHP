<?php
// Menampilkan angka 1 sampai 50, dengan atura:
// - Jika angka habis dibagi 3, tampilkan "Fizz"
// - Jika angka habis dibagi 5, tampilkan "Buzz"
// - Jika angka habis dibagi 3 dan 5, tampilkan "FizzBuzz"
// - Selain itu, tampilkan angkanya

for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz\n";
    } elseif ($i % 3 == 0) {
        echo "Fizz\n";
    } elseif ($i % 5 == 0) {
        echo "Buzz\n";
    } else {
        echo $i . "\n";
    }
}

