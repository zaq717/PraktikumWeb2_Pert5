<?php
class pengguna{
    protected $nama;
    protected $email;
    
    // Constructor kelas induk yang sudah diperbaiki
    public function __construct($nama, $email){
        $this->nama = $nama;
        $this->email = $email;
    }
    public function tampilData(){
        echo "Nama : ".$this->nama."<br>";
        echo "Email : ".$this->email."<br>";
    }
    public function tampilkanPeran(){
        echo "Peran : Pengguna Umum<br>";
    }
}

class mahasiswa extends pengguna{
    private $nim;
    private $prodi;
    public function __construct($nama, $email, $nim, $prodi){
        parent::__construct($nama, $email);
        $this->nim = $nim;
        $this->prodi = $prodi;
    }
    public function tampilData(){
        parent::tampilData();
        echo "NIM : ".$this->nim."<br>";
        echo "Prodi : ".$this->prodi."<br>";
    }
    public function tampilkanPeran(){
        echo "Peran : Mahasiswa Sistem Informasi<br>";
    }
}

class dosen extends pengguna{
    private $nidn;
    private $bidangKeahlian;
    public function __construct($nama, $email, $nidn, $bidangKeahlian){
        parent::__construct($nama, $email);
        $this->nidn = $nidn;
        $this->bidangKeahlian = $bidangKeahlian;
    }
    public function tampilData(){
        parent::tampilData();
        echo "NIDN : ".$this->nidn."<br>";
        echo "Bidang Keahlian : ".$this->bidangKeahlian."<br>";
    }
    public function tampilkanPeran(){
        echo "Peran : Dosen Sistem Informasi<br>";
    }
}

// 1. Class Administrasi mewarisi Pengguna
class administrasi extends pengguna{
    // Properti khusus kelas administrasi
    private $idPegawai;
    private $bagian;

    // 2. Menggunakan constructor dan parent::__construct()
    public function __construct($nama, $email, $idPegawai, $bagian){
        parent::__construct($nama, $email); // Memanggil constructor kelas pengguna
        $this->idPegawai = $idPegawai;
        $this->bagian = $bagian;
    }

    // 3. Method tampilData() untuk menampilkan data umum dan data administrasi
    public function tampilData(){
        parent::tampilData(); // Memanggil data nama dan email dari kelas pengguna
        echo "ID Pegawai : ".$this->idPegawai."<br>";
        echo "Bagian : ".$this->bagian."<br>";
    }

    // 4. Method tampilkanPeran() untuk menampilkan peran tenaga administrasi
    public function tampilkanPeran(){
        echo "Peran : Tenaga Administrasi Kampus<br>";
    }
}

// 5. Membuat object dan menguji hasil program
$mhs1 = new mahasiswa("Budi", "budi@gmail.com", "123456789", "Sistem Informasi");
$dosen1 = new dosen("Dr. Andi", "andi@gmail.com", "987654321", "Pemrograman Web");
$admin1 = new administrasi("Siti", "siti@gmail.com", "ADM007", "Keuangan & Kemahasiswaan");

echo "<h2>Data Mahasiswa</h2>";
$mhs1->tampilData();
$mhs1->tampilkanPeran();

echo "<h2>Data Dosen</h2>";
$dosen1->tampilData();
$dosen1->tampilkanPeran();

echo "<h2>Data Administrasi</h2>";
$admin1->tampilData();
$admin1->tampilkanPeran();
?>
