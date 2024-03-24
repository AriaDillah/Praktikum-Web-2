<?php
require_once 'header.php';
require_once 'sidebar.php';


// Buat array asosiatif nilai
$nilai1 = ["id" => 1, "nama" => "Aria Dillah", "nim" => "0110223076", "rombel" => "TI02-2023", "uts" => 70, "uas" => 70, "tugas" => 70];
$nilai2 = ["id" => 2, "nama" => "Haikal Sulton Alfatoni", "nim" => "0110223072", "rombel" => "TI02-2023", "uts" => 90, "uas" => 90, "tugas" => 90];
$nilai3 = ["id" => 3, "nama" => "Zaky Muhammad Hafizh", "nim" => "0110223057", "rombel" => "TI02-2023", "uts" => 80, "uas" => 80, "tugas" => 80];
$nilai4 = ["id" => 4, "nama" => "Royhan Audi Akbar", "nim" => "0110223058", "rombel" => "TI02-2023", "uts" => 98, "uas" => 95, "tugas" => 95];

// Buat array multidimensi
$kumpulan_nilai = [$nilai1, $nilai2, $nilai3, $nilai4];

?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tugas Praktikum</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Praktikum 01</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <h1>Tabel Nilai Mahasiswa</h1>
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
            <!-- /.card-body -->
            <div class="card-footer">
              Footer
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>