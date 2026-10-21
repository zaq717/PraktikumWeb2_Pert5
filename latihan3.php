<?php
class pengguna{
    public $nama;
    public $email;
    public function __construct($nama, $email){
        $this->nama = $nama;
        $this->email = $email;
    }
    public function tampilData(){
        echo "Nama : ".$this->nama."<br>";
        echo "Email : ".$this->email."<br>";
    }
}
class mahasiswa extends pengguna{
    public $nim;
    public $prodi;
    public function __construct($nama, $email, $nim, $prodi){
        parent::__construct($nama, $email);
        $this->nim = $nim;
        $this->prodi = $prodi;
    }
    public function tampilData(){
        parent::tampilData();
        echo "NIM : ".$this->nim."<br>";
        echo "Prodi : ".$this->prodi."<br><br>";
    }
}
$mhs1=new mahasiswa("Rizky", "Riz@gmail.com", "123456", "Sistem Informasi");
$mhs1->tampilData();
$mhs2=new mahasiswa("Andi", "Andi@gmail.com", "123457", "Sistem Informasi");
$mhs2->tampilData();
?>