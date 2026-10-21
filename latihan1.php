<?php
class pengguna{
    public $nama;
    public $email;
    public function tampilData(){
        echo "Nama : ".$this->nama."<br>";
        echo "Email : ".$this->email."<br>";
    }
}
$pengguna1 = new pengguna();
$pengguna1->nama = "Rizky";
$pengguna1->email = "Rizky@gmail.com";
$pengguna1->tampilData();
?>