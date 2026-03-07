<?php

require_once 'Produk.php';
require_once 'User.php';
require_once 'Order.php';
require_once 'TransferBank.php';
require_once 'Ewallet.php';

$user = new User("Rizki", 500000);

$produk = new Produk("Laptop", 350000);

$pembayaran = new Ewallet();

$order = new Order($user, $produk, $pembayaran);

$order->prosesOrder();

echo "Sisa saldo: ".$user->getSaldo();