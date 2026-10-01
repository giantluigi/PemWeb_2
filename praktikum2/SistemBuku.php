<?php
class Buku
{
    public $kode;
    public $judul;
    public $penulis;
    public $tahun;

    public function tampilkanData()
    {
        echo "Kode Buku : " . $this->kode . "<br>";
        echo "Judul : " . $this->judul . "<br>";
        echo "Penulis : " . $this->penulis . "<br>";
        echo "Tahun Terbit : " . $this->tahun . "<br>";
    }
}
$buku = new Buku();
$buku->kode = "001";
$buku->judul = "Penenang Jiwa";
$buku->penulis = "Joko Tole";
$buku->tahun = 2009;
$buku->tampilkanData();
?>