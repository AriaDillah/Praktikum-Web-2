<?php
// Buat array asosiatif nilai
$nilai1 = ["id" => 1, "nama" => "Aria Dillah", "nim" => "0110223076", "rombel" => "TI02-2023", "uts" => 70, "uas" => 70, "tugas" => 70];
$nilai2 = ["id" => 2, "nama" => "Haikal Sulton Alfatoni", "nim" => "0110223072", "rombel" => "TI02-2023", "uts" => 90, "uas" => 90, "tugas" => 90];
$nilai3 = ["id" => 3, "nama" => "Zaky Muhammad Hafizh", "nim" => "0110223057", "rombel" => "TI02-2023", "uts" => 80, "uas" => 80, "tugas" => 80];
$nilai4 = ["id" => 4, "nama" => "Royhan Audi Akbar", "nim" => "0110223058", "rombel" => "TI02-2023", "uts" => 98, "uas" => 95, "tugas" => 95];

// Buat array multidimensi
$kumpulan_nilai = [$nilai1, $nilai2, $nilai3, $nilai4];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Nilai Siswa</title>
</head>

<!-- ... (previous HTML code) ... -->

<!-- ... (previous HTML code) ... -->

<!-- ... (previous HTML code) ... -->

<body>
    <div class="container">
    <h1 class="text-center">Daftar Nilai Siswa</h1>
        <table class="table">
            <thead class="thead-" style="background-color: pink; color: white;">
                <tr>
                    <th scope="col" style="color: blue;">No</th>
                    <th scope="col" style="color: blue;">Nama</th>
                    <th scope="col" style="color: blue;">NIM</th>
                    <th scope="col" style="color: blue;">Rombel</th>
                    <th scope="col" style="color: blue;">UTS</th>
                    <th scope="col" style="color: blue;">UAS</th>
                    <th scope="col" style="color: blue;">Tugas</th>
                    <th scope="col" style="color: blue;">Nilai Akhir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($kumpulan_nilai as $nilai): ?>

                    <tr>
                        <?php $nilai_akhir = ($nilai["uts"] + $nilai["uas"] + $nilai["tugas"]) / 3; ?>
                        <td><?= $nilai["id"]?></td>
                        <td><?= $nilai["nama"]?></td>
                        <td><?= $nilai["nim"]?></td>
                        <td><?= $nilai["rombel"]?></td>
                        <td><?= $nilai["uts"]?></td>
                        <td><?= $nilai["uas"]?></td>
                        <td><?= $nilai["tugas"]?></td>
                        <td><?= number_format($nilai_akhir, 2, ",", ".")  ?></td>
                    </tr>
                
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- ... (remaining HTML code) ... -->
</body>

</html>


</html>


</html>


</html>