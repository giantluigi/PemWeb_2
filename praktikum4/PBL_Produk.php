<?php

class Produk {
    public $kode;
    public $nama;
    public $harga;
    public $stok;
    public $discount; // dalam persen (%)

    public function __construct($kode, $nama, $harga, $stok, $discount) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
        $this->discount = $discount;
    }

    // Pengembangan: Nilai Stok = Harga x Stok
    public function hitungNilaiStok() {
        return $this->harga * $this->stok;
    }

    // Tambahan: harga setelah discount
    public function hitungHargaDiskon() {
        return $this->harga - ($this->harga * $this->discount / 100);
    }

    public function tampilkanData() {
        echo "Kode Produk  : " . $this->kode . "<br>";
        echo "Nama Produk  : " . $this->nama . "<br>";
        echo "Harga        : Rp" . number_format($this->harga, 0, ',', '.') . "<br>";
        echo "Discount     : " . $this->discount . "%<br>";
        echo "Harga Diskon : Rp" . number_format($this->hitungHargaDiskon(), 0, ',', '.') . "<br>";
        echo "Stok         : " . $this->stok . "<br>";
        echo "Nilai Stok   : Rp" . number_format($this->hitungNilaiStok(), 0, ',', '.') . "<br>";
    }
}

$produk1 = new Produk("P001", "Laptop", 7000000, 10, 10);
$produk2 = new Produk("P002", "Mouse", 150000, 25, 5);

echo "<h3>Data Produk 1</h3>";
$produk1->tampilkanData();

echo "<h3>Data Produk 2</h3>";
$produk2->tampilkanData();

?>