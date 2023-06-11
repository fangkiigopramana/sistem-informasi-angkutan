<?php
  include_once 'database/config.php';
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php 
    include 'partial/head.php';
    ?>
?>
</head>

<body style="background-color: #8ecae6;">

  <?php 
    include 'partial/header.php';
    include 'partial/sidebar.php';
  ?>

  <main id="main" class="main">

    <!-- Start Page Title -->
    <div class="pagetitle">
      <h1>Daftar Angkutan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item">Daftar Angkutan</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Berikut ini daftar angkutan yang tersedia :</h5> 
              <!-- Modal Dialog Scrollable -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable">
                Tambah data
              </button>
              <div class="modal fade" id="modalDialogScrollable" tabindex="-1">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Form tambah data angkutan</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="col-lg-12">

                        <div class="card">
                          <div class="card-body">
                            
                            <!-- Vertical Form -->
                            <form class="row g-3" method="post" action="./kelola/angkutan/add.php">
                              <div class="col-12">
                                <label for="nama_angkutan" class="form-label">Nama Angkutan</label>
                                <input type="text" class="form-control" name="nama_angkutan" placeholder="Ketik di sini..." required>
                              </div>
                              <div class="col-12">
                                <label for="merk" class="form-label">Merk</label>
                                <input type="text" class="form-control" name="merk" placeholder="Ketik di sini..." required>
                              </div>
                              <div class="col-12">
                                <label for="no_kendaraan" class="form-label">No. Kendaraan</label>
                                <input type="text" class="form-control" name="no_kendaraan" placeholder="Ketik di sini..." required>
                              </div>
                              <div class="col-12">
                                <label for="rute" class="form-label">Rute</label>
                                <select class="form-select" name="rute" aria-label="Default select example" required>
                                  <?php foreach ($data_rute as $rute) {  ?>
                                  <!-- <option selected value="">Pilih bahan bakar</option> -->
                                  <option value=<?php echo $rute["id_rute"] ?>><?php echo $rute["asal"] . " - " . $rute["tujuan"] ?></option>
                                  <?php } ?>
                                </select>
                              </div>
                              <div class="col-12">
                                <label for="kapasitas" class="form-label">Kapasitas Penumpang</label>
                                <input type="number" step="any" class="form-control" name="kapasitas" required>
                              </div>
                              <div class="col-12">
                                <label for="tanggal_berangkat" class="form-label">Tanggal berangkat</label>
                                <input type="date" class="form-control" name="tanggal_berangkat" required>
                              </div>
                              <div class="col-12">
                                <label for="tanggal_berangkat" class="form-label">Jam berangkat</label>
                                <input type="time" class="form-control" name="jam_berangkat" required>
                              </div>
                              <div class="col-12">
                                <label for="jam_tiba" class="form-label">Jam tiba</label>
                                <input type="time" class="form-control" name="jam_tiba" required>
                              </div>
                              <div class="col-12">
                                <label for="harga_tiket" class="form-label">Harga tiket</label>
                                <input type="number" class="form-control" name="harga_tiket" required>
                              </div>
                              <div class="text-left">
                                <button type="submit" name="send" class="btn btn-success">Submit</button>
                              </div>
                            </form><!-- Vertical Form -->

                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Modal Dialog Scrollable-->
               
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama angkutan</th>
                    <th scope="col">No. kendaraan</th>
                    <th scope="col">Merk</th>
                    <th scope="col">Rute</th>
                    <th scope="col">Kapasitas</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Berangkat</th>
                    <th scope="col">Tiba</th>
                    <th scope="col">Tiket</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                  <?php 
                  $no = 1;
                  while($res = mysqli_fetch_array($data_angkutan_rute)) { ?>
                  <tr>
                    <th scope="row"><?php echo $no ?></th>
                    <td><?php echo $res["nama_angkutan"] ?></td>
                    <td><?php echo $res["no_kendaraan"] ?></td>
                    <td><?php echo $res["merk"] ?></td>
                    <td><?php echo $res["asal"] . " - " . $res["tujuan"] ?></td>
                    <td><?php echo $res["kapasitas"]?> Penumpang</td>
                    <td><?php echo $res["tanggal_berangkat"]?></td>
                    <td><?php echo date("H:i", strtotime($res["jam_berangkat"]))  ?></td>
                    <td><?php echo date("H:i", strtotime($res["jam_tiba"]))  ?></td>
                    <td><?php echo "Rp " . $res["harga_tiket"] ?></td>
                    <td>
                      <a href=<?php echo "kelola/angkutan/delete.php?id_angkutan=" . $res["id_angkutan"]?> onclick="Konfirmasi" class="text-decoration-none text-danger fw-bold">Hapus</a></td>
                    </td>
                  </tr>
                  <?php $no++;} ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php 
    include 'partial/footer.php';
  ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    function Konfirmasi (){
      return confirm('Ups, Yakin Data Mau dihapus?');
    }
  </script>

</body>

</html>