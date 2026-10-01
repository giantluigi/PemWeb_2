<?php
$nim = "202457201023";
$nama = "Giantluigi Azka Zain";
$prodi = "Sistem Informasi";
$semester = 5;

function tampilkanData($nim, $nama, $prodi, $semester)
{
    echo "NIM : " . $nim . "<br>";
    echo "Nama : " . $nama . "<br>";
    echo "Prodi : " . $prodi . "<br>";
    echo "Semester : " . $semester . "<br>";
}

tampilkanData($nim, $nama, $prodi, $semester);
?>