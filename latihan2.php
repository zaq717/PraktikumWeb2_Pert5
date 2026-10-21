<?php
class pengguna
{
    public $nama;
    public $email;
    public function tampilData()
    {
        echo "Nama : " . $this->nama . "<br>";
        echo "Email : " . $this->email . "<br>";
    }
}
class mahasiswa extends pengguna
{
    public $nim;
    public $prodi;
    public function tampilData()
    {
        parent::tampilData();
        echo "NIM : " . $this->nim . "<br>";
        echo "Prodi : " . $this->prodi . "<br>";
    }
}
$mahasiswa1 = new mahasiswa();
$mahasiswa1->nama = "Rizky";
$mahasiswa1->email = "Rizky@gmail.com";
$mahasiswa1->nim = "123456";
$mahasiswa1->prodi = "Sistem Informasi";
$mahasiswa1->tampilData();
?>