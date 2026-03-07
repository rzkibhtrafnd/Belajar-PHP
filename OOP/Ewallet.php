<?php

require_once 'Pembayaran.php';

class Ewallet implements Pembayaran {

    public function bayar($jumlah){

        echo "Pembayaran menggunakan E-Wallet sebesar Rp".$jumlah."<br>";

    }

}