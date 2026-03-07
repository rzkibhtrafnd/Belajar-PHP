<?php

require_once 'Pembayaran.php';

class TransferBank implements Pembayaran {

    public function bayar($jumlah){

        echo "Pembayaran menggunakan Transfer Bank sebesar Rp".$jumlah."<br>";

    }

}