<?php 
    include_once("database/config.php");
    $result = mysqli_query($mysqli, "SELECT * FROM angkutan"); // using mysqli_query instead
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
                                <label for="inputAddress" class="form-label">Jarak Tempuh</label>
                                <input type="number" class="form-control" id="inputAddress" placeholder="Ketik di sini... (KM)">
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
                    <th scope="col">No. Plat</th>
                    <th scope="col">Jarak Tempuh</th>
                    <th scope="col">Bahan Bakar</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Angkutan 1</td>
                    <td>Mitsubhisi</td>
                    <td>G 4564 AB</td>
                    <td>2982982 KM</td>
                    <td>Pertamax</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Angkutan 1</td>
                    <td>Mitsubhisi</td>
                    <td>G 4564 AB</td>
                    <td>2982982 KM</td>
                    <td>Pertamax</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Angkutan 1</td>
                    <td>Mitsubhisi</td>
                    <td>G 4564 AB</td>
                    <td>2982982 KM</td>
                    <td>Pertamax</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Angkutan 1</td>
                    <td>Mitsubhisi</td>
                    <td>G 4564 AB</td>
                    <td>2982982 KM</td>
                    <td>Pertamax</td>
                  </tr>
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