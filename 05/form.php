<?php
// Handling form submission and displaying result
if (isset($_POST["submit"])){
    require_once "class.php";

    $nim = $_POST["nim"];
    $pilih = $_POST["pilih"];
    $nilai = $_POST["nilai"];

    $nilaiUjian = new formnilai($nim, $pilih, $nilai);
    $result = $nilaiUjian->statusNilai();

    echo "<h2>Hasil Nilai Mahasiswa</h2>";
    echo "<p>NIM: " . $nim . "</p>";
    echo "<p>MATKUL: " . $pilih . "</p>";
    echo "<p>Nilai: " . $nilai . "</p>";
    echo "<p>Grade: " . $result['grade'] . "</p>";
    echo "<p>Keterangan: " . $result['keterangan'] . "</p>";
}
?>