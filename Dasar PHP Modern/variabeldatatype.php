<?php
$productName = "Laptop";
$price = 15000000;
$diskon = 0.5;
$stock = 10;
$isReady = $stock > 0;

echo "Nama Produk: " . $productName . "\n";
echo "Harga: Rp " . number_format($price, 0, ',', '.') . "\n";
echo "Diskon: " . ($diskon * 100) . "%\n";
echo "Stok: " . $stock . "\n";
echo "Status: " . ($isReady ? "Tersedia" : "Tidak Tersedia") . "\n";
?>