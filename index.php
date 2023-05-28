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

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->

        <!-- Data Angkutan -->
        <div class="col-lg-4 col-md-6">
          <div class="card info-card sales-card">

            <div class="card-body">
              <h5 class="card-title">Data Angkutan</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-car"></i>
                </div>
                <div class="ps-3">
                  <h6>145 <span class="text-muted small pt-2" style="font-size: 20px;">angkutan</span></h6>

                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- End Data Angkutan -->

        <!-- Data Rute Angkutan -->
        <div class="col-lg-4 col-md-6">
          <div class="card info-card revenue-card">

            <div class="card-body">
              <h5 class="card-title">Data Rute Angkutan</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-route"></i>
                </div>
                <div class="ps-3">
                  <h6>15 <span class="text-muted small pt-2" style="font-size: 20px;">rute</span></h6>

                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- End Data Rute Angkutan -->

        <!-- Data Admin -->
        <div class="col-lg-4 col-md-6">
          <div class="card info-card revenue-card">

            <div class="card-body">
              <h5 class="card-title">Data Admin</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-user text-warning"></i>
                </div>
                <div class="ps-3">
                  <h6>3 <span class="text-muted small pt-2" style="font-size: 20px;">akun</span></h6>

                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- End Data Admin -->

        <!-- End Left side columns -->
      </div>
      <!-- Foto terminal -->
      <div class="row mb-5">
        <img src="assets/img/foto-bus.jpeg" class="img-fluid" alt="...">
      </div>

      <div class="row">

          <!-- Left side columns -->
          <div class="col-lg-8">
            <div class="row">

              <!-- Reports -->
              <div class="col-12">
                <!-- F.A.Q Group 2 -->
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Terminal Jabodetabek</h5>

                    <div class="accordion accordion-flush" id="faq-group-2">

                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" data-bs-target="#bekasi" type="button" data-bs-toggle="collapse">
                            Bekasi - Terminal Bekasi 
                          </button>
                        </h2>
                        <div id="bekasi" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                          <div class="accordion-body">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15864.432585785025!2d106.99558801214414!3d-6.249478047686021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698fde8512bab9%3A0xcfa602fdfa0ebc09!2sTerminal%20Bekasi!5e0!3m2!1sid!2sid!4v1684725116752!5m2!1sid!2sid" width="520" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" data-bs-target="#jakarta" type="button" data-bs-toggle="collapse">
                            Jakarta - Terminal Pulogebang
                          </button>
                        </h2>
                        <div id="jakarta" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                          <div class="accordion-body">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31731.17276520922!2d106.91521271083984!3d-6.21130979999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698b13031bf083%3A0x84b9ed6375d017db!2sTerminal%20Pulogebang!5e0!3m2!1sid!2sid!4v1684724886790!5m2!1sid!2sid"width="520" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" data-bs-target="#tanggerang" type="button" data-bs-toggle="collapse">
                            Tanggerang - Terminal Poris Plawad
                          </button>
                        </h2>
                        <div id="tanggerang" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                          <div class="accordion-body">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6838859152085!2d106.66212547404247!3d-6.173061260490153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f8e53328f231%3A0xeef349cc6db2fd9b!2sTerminal%20Poris%20Plawad!5e0!3m2!1sid!2sid!4v1684725628962!5m2!1sid!2sid" width="520" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" data-bs-target="#depok" type="button" data-bs-toggle="collapse">
                            Depok - Terminal Jatijajar
                          </button>
                        </h2>
                        <div id="depok" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                          <div class="accordion-body">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.7435657837987!2d106.85414517404604!3d-6.426982662848723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ea5116831081%3A0x48ff225179b58445!2sTERMINAL%20JATIJAJAR!5e0!3m2!1sid!2sid!4v1684725353202!5m2!1sid!2sid" width="520" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" data-bs-target="#bogor" type="button" data-bs-toggle="collapse">
                            Bogor - Terminal Baranangsiang
                          </button>
                        </h2>
                        <div id="bogor" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                          <div class="accordion-body">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.3436168279445!2d106.80343287404875!3d-6.604152064556695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5dccb882e61%3A0xdd47c54c5189e493!2sTerminal%20Baranangsiang%20-%20Bogor!5e0!3m2!1sid!2sid!4v1684725782741!5m2!1sid!2sid" width="520" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
                          </div>
                        </div>
                      </div>

                    </div>

                  </div>
                </div><!-- End F.A.Q Group 2 -->
              </div>
              <!-- End Reports -->

            </div>
          </div><!-- End Left side columns -->

          <!-- Right side columns -->
          <div class="col-lg-4">

            <!-- Recent Activity -->
            <div class="card">

              <div class="card-body">
                <h5 class="card-title">Deskripsi Singkat</h5>

                <div class="activity">
                  <p style="text-align: justify; text-indent: 30px;">
                    Terminal Jabodetabek adalah kompleks terminal transportasi di wilayah metropolitan Jabodetabek, Indonesia. Terminal ini menghubungkan berbagai moda transportasi seperti bus, kereta api, angkutan kota, dan taksi. Dengan beberapa terminal utama dan fasilitas lengkap, tujuan utama terminal ini adalah mempermudah mobilitas penduduk, mengurangi kemacetan, dan meningkatkan efisiensi sistem transportasi di wilayah tersebut. Terminal Jabodetabek memainkan peran penting dalam menghubungkan moda transportasi dan memfasilitasi pergerakan penduduk, menjadikannya pusat vital dalam sistem transportasi Jabodetabek.
                  </p>
                </div>

              </div>
            </div>
            <!-- End Recent Activity -->

          </div>
          <!-- End Right side columns -->

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