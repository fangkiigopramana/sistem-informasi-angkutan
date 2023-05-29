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
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
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
              <!-- <button type="button" class="btn btn-primary">Primary</button> -->
              <!-- <button type="button" class="btn btn-primary">Primary</button>  -->
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
                            <form class="row g-3">
                              <div class="col-12">
                                <label for="inputNanme4" class="form-label">Nama Angkutan</label>
                                <input type="text" class="form-control" placeholder="Ketik di sini..." id="inputNanme4">
                              </div>
                              <div class="col-12">
                                <label for="inputEmail4" class="form-label">Merk</label>
                                <input type="text" class="form-control" placeholder="Ketik di sini..." id="inputEmail4">
                              </div>
                              <div class="col-12">
                                <label for="inputPassword4" class="form-label">No. Plat</label>
                                <input type="text" class="form-control" placeholder="Ketik di sini..." id="inputPassword4">
                              </div>
                              <div class="col-12">
                                <label for="inputAddress" class="form-label">Waktu berangkat</label>
                                <input type="date" class="form-control" id="inputAddress" placeholder="Ketik di sini... (KM)">
                              </div>
                              <div class="col-12">
                                <label for="inputAddress" class="form-label">Bahan Bakar</label>
                                <select class="form-select" aria-label="Default select example">
                                  <!-- <option selected value="">Pilih bahan bakar</option> -->
                                  <option  selected value="1">Pertalite</option>
                                  <option value="2">Pertamax</option>
                                  <option value="3">Solar</option>
                                </select>
                              </div>
                              <div class="text-left">
                                <button type="submit" class="btn btn-success">Submit</button>
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
                    <th scope="col">Nama Angkutan</th>
                    <th scope="col">Merk</th>
                    <th scope="col">No. Kendaraan</th>
                    <th scope="col">Rute</th>
                    <th scope="col">Kapasitas</th>
                    <th scope="col">Waktu berangkat</th>
                  </tr>
                </thead>
                <tbody>

                  <?php 
                  $no = 1;
                  while($res = mysqli_fetch_array($data_angkutan)) { ?>
                  <tr>
                    <th scope="row"><?php echo $no ?></th>
                    <td><?php echo $res["nama_angkutan"] ?></td>
                    <td><?php echo $res["no_kendaraan"] ?></td>
                    <td><?php echo $res["merk"] ?></td>
                    <td><?php echo $res["rute"] ?></td>
                    <td><?php echo $res["kapasitas"]?> Penumpang</td>
                    <td><?php echo $res["waktu_berangkat"] ?></td>
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

</body>

</html>