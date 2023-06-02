<?php
  include_once 'database/config.php';
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php 
    include 'partial/head.php';
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
      <h1>Daftar Rute</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item">Daftar Rute Angkutan</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Berikut ini daftar rute yang tersedia :</h5> 
              <!-- Modal Dialog Scrollable -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable">
                Tambah data
              </button>
              <!-- Form -->
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
                            <form class="row g-3" method="post" action="kelola/rute/add.php">
                              <div class="col-12">
                                <label for="asal" class="form-label">Asal</label>
                                <input type="text" class="form-control" name="asal">
                              </div>
                              <div class="col-12">
                                <label for="tujuan" class="form-label">Tujuan</label>
                                <input type="text" class="form-control" name="tujuan">
                              </div>
                              <div class="col-12">
                                <label for="jarak_tempuh" class="form-label">Jarak Tempuh</label>
                                <input type="number" class="form-control" name="jarak_tempuh">
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
              <!-- Form-->
               
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Asal</th>
                    <th scope="col">Tujuan</th>
                    <th scope="col">Jarak Tempuh</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                  $no = 1;
                  while($res = mysqli_fetch_array($data_rute)) { ?>
                  <tr>
                    <th scope="row"><?php echo $no ?></th>
                    <td><?php echo $res["asal"]?></td>
                    <td><?php echo $res["tujuan"] ?></td>
                    <td><?php echo $res["jarak_tempuh"] ?> KM</td>
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