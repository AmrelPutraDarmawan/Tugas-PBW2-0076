<?php
require_once "mahasiswa.php";


$mahasiswa1 = new Mahasiswa("Amrel Putra Darmawan", "23.240.0076", 3.0, "Teknik Informatika", "3P41");

echo "NAMA : $mahasiswa1->nama" . PHP_EOL;
echo "NIM : $mahasiswa1->nim" . PHP_EOL;
echo "KELAS : $mahasiswa1->kelas" . PHP_EOL;
echo "IPK : $mahasiswa1->ipk" . PHP_EOL;
echo "JURUSAN : $mahasiswa1->jurusan" . PHP_EOL;
echo PHP_EOL; 
echo $mahasiswa1->infomahasiswa() . PHP_EOL;
echo PHP_EOL; 
var_dump($mahasiswa1);


$mahasiswa2 = new Mahasiswa("Sudarso Lupio", "23.240.0087", 3.5, "Sistem Informasi", "3P21");

echo "NAMA : $mahasiswa2->nama" . PHP_EOL;
echo "NIM : $mahasiswa2->nim" . PHP_EOL;
echo "KELAS : $mahasiswa2->kelas" . PHP_EOL;
echo "IPK : $mahasiswa2->ipk" . PHP_EOL;
echo "JURUSAN : $mahasiswa2->jurusan" . PHP_EOL;
echo PHP_EOL; 
echo $mahasiswa2->infomahasiswa() . PHP_EOL;
echo PHP_EOL; 
var_dump($mahasiswa2);
?>
