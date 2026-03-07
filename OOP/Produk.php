<?php

class Produk {

    public $nama;
    public $harga;

    function __construct($nama, $harga){

        $this->nama = $nama;
        $this->harga = $harga;

    }

    public function getInfo(){

        return $this->nama . " - Rp" . $this->harga;

    }

}