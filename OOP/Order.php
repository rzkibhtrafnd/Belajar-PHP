<?php

class Order {

    private $user;
    private $produk;
    private $pembayaran;

    function __construct($user, $produk, $pembayaran){

        $this->user = $user;
        $this->produk = $produk;
        $this->pembayaran = $pembayaran;

    }

    public function prosesOrder(){

        $harga = $this->produk->harga;

        if($this->user->getSaldo() < $harga){

            echo "Saldo tidak cukup";
            return;

        }

        $this->user->kurangiSaldo($harga);

        $this->pembayaran->bayar($harga);

        echo "Pembelian berhasil untuk produk ".$this->produk->nama."<br>";

    }

}