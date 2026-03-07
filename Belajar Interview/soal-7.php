<?php
// Class Mahasiswa
class Mahasiswa{
    public $nama;
    public $nim;
    public $jurusan;

    function displayData(){
        echo "Nama: " . $this->nama;
        echo "NIM: " . $this->nim;
        echo "Jurusan: " . $this->jurusan;
    }

}

$mhs = new Mahasiswa();
$mhs->nama = "Budi";
$mhs->nim = "123456";
$mhs->jurusan = "Informatika";
$mhs->displayData();
