<?php
// Class Mobil
class Mobil{
    public $merk;
    public $warna;
    public $tahun;

    function jalan(){
        echo "Mobil sedang berjalan";
    }
}

$mobil = new Mobil();
$mobil->jalan();