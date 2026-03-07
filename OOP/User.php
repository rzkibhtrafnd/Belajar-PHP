<?php

class User {

    public $nama;
    private $saldo;

    function __construct($nama, $saldo){

        $this->nama = $nama;
        $this->saldo = $saldo;

    }

    public function getSaldo(){

        return $this->saldo;

    }

    public function kurangiSaldo($jumlah){

        $this->saldo -= $jumlah;

    }

}