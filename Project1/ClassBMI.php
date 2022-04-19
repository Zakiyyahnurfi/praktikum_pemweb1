<?php
    class bmiPasien
    {
        public $nama,
        $berat,
        $tinggi,
        $umur,
        $jeniskelamin;

        public function hasilBMI()
        {
            return "<br>Nama : $this->nama <br><br>
                    Berat Badan : $this->berat <br><br>
                    Tinggi Badan : $this->tinggi <br><br>
                    Umur : $this->umur <br><br>
                    Jenis Kelamin : $this->jenisKelamin </br>";
        }
        public function statusBMI($BMI)
        {
            if ($BMI < 18.5) {
                return "<td>Kekurangan Berat Badan</td>";
            } else if ($BMI >= 18.5 && $BMI <= 24.9) {
                 return "<td>Normal</td>";
            } else if ($BMI >= 25.0 && $BMI <= 29.9) {
                return "<td>Kelebihan Berat Badan</td>";
            } else {
                return "<td>Kegemukan</td>";  
            }
        }
    }
if (isset($_GET["nama_lengkap"])) {
    $bmi = new bmiPasien;
    $bmi->nama = $_GET["nama_lengkap"];
    $bmi->berat = $_GET["berat_"];
    $bmi->tinggi = $_GET["tinggi_"];
    $bmi->umur = $_GET["umur_"];
    $bmi->jeniskelamin = $_GET["jenis_kelamin"];
}
$pasien1 = ['nama' => 'Azelia', 'kelamin' => 'Perempuan', 'umur' => 18, 'berat' => 41, 'tinggi' => 155];
$pasien2 = ['nama' => 'Maya', 'kelamin' => 'Perempuan', 'umur' => 19, 'berat' => 47, 'tinggi' => 160];
$pasien3 = ['nama' => 'Fredi', 'kelamin' => 'Laki-Laki', 'umur' => 19, 'berat' => 53, 'tinggi' => 165];
$pasien4 = ['nama' => $bmi->nama, 'kelamin' => $bmi->jeniskelamin, 'umur' => $bmi->umur, 'berat' => $bmi->berat, 'tinggi' => $bmi->tinggi];

$ar_pasien = [$pasien1, $pasien2, $pasien3, $pasien4];
?>