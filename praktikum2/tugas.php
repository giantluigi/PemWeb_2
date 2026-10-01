<?php
class Kendaraan
{
    public $nomor;
    public $merk;
    public $jenis;
    public $status;

    public function tampilkanData()
    {
        echo "Nomor : " . $this->nomor . "<br>";
        echo "Merk : " . $this->merk . "<br>";
        echo "Jenis : " . $this->jenis . "<br>";
        echo "Status : " . $this->statusKendaraan() . "<br><br>";
    }

    public function statusKendaraan()
    {
        return $this->status;
    }
}

class Pelanggan
{
    public $id;
    public $nama;
    public $alamat;
    public $kendaraanDisewa;

    public function tampilkanData()
    {
        echo "ID : " . $this->id . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Alamat : " . $this->alamat . "<br>";
        echo "Kendaraan Disewa : " . $this->kendaraanDisewa . "<br><br>";
    }

    public function sewaKendaraan($kendaraan)
    {
        if ($kendaraan->statusKendaraan() === "Tersedia") {
            $kendaraan->status = "Disewa";
            $this->kendaraanDisewa = $kendaraan->merk . " (" . $kendaraan->nomor . ")";
            return "Kendaraan berhasil disewa.";
        }

        return "Kendaraan tidak tersedia.";
    }
}

$kendaraan1 = new Kendaraan();
$kendaraan1->nomor = "K001";
$kendaraan1->merk = "Toyota Avanza";
$kendaraan1->jenis = "Mobil";
$kendaraan1->status = "Tersedia";

$kendaraan2 = new Kendaraan();
$kendaraan2->nomor = "K002";
$kendaraan2->merk = "Honda Beat";
$kendaraan2->jenis = "Motor";
$kendaraan2->status = "Tersedia";

$pelanggan1 = new Pelanggan();
$pelanggan1->id = "P001";
$pelanggan1->nama = "Andi";
$pelanggan1->alamat = "Malang";
$pelanggan1->kendaraanDisewa = "-";

$pelanggan2 = new Pelanggan();
$pelanggan2->id = "P002";
$pelanggan2->nama = "Budi";
$pelanggan2->alamat = "Malang";
$pelanggan2->kendaraanDisewa = "-";

echo "<h3>Data Kendaraan</h3>";
$kendaraan1->tampilkanData();
$kendaraan2->tampilkanData();

echo "<h3>Proses Rental</h3>";
echo $pelanggan1->sewaKendaraan($kendaraan1) . "<br><br>";

echo "<h3>Data Pelanggan</h3>";
$pelanggan1->tampilkanData();
$pelanggan2->tampilkanData();

echo "<h3>Status Kendaraan Setelah Disewa</h3>";
$kendaraan1->tampilkanData();
?>