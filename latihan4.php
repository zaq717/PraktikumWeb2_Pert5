<?php
class pengguna{
    public function tampilkanPeran(){
        echo "Peran : Pengguna Sistem Informasi<br>";
    }
}
class mahasiswa extends pengguna{
    public function tampilkanPeran(){
        echo "Peran : Mahasiswa Sistem Informasi<br>";
    }
}
class dosen extends pengguna{
    public function tampilkanPeran(){
        echo "Peran : Dosen Sistem Informasi<br>";
    }
}
class admin extends pengguna{
    public function tampilkanPeran(){
        echo "Peran : Admin Sistem Informasi<br>";
    }
}
$mhs1=new mahasiswa();
$dosen1=new dosen();
$admin1=new admin();

$dosen1->tampilkanPeran();
$mhs1->tampilkanPeran();
$admin1->tampilkanPeran();
?>