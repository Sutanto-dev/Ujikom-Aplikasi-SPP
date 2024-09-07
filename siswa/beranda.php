<?php 
  session_start();
  include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="icon" href="../img/bw3.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracket">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>SPP Online | Petugas</title>

    <!-- vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="../lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
    <link href="../lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="../lib/chartist/chartist.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../css/bracket.css">
    
    
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span><img src="../img/spplogo.png" width="120px" alt=""><span>]</span></a></div>
    

      
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">
      <div class="br-header-left">
        
      </div><!-- br-header-left -->
      <!-- HEADER USER -->
        <?php include('app/nav-right.php') ?>

    </div><!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <!-- br-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->

      <div class="br-pagebody mg-t-100 justify-content-center">
      <div class="br-section-wrapper">
      <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Histori Pembayaran SPP</h6>
          <p class="mg-b-25 mg-lg-b-20">SMK Bina Wisata Lembang</p>
      <div class="table-responsive">
     
      <div class="bd bd-gray-300 rounded table-responsive">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-bordered" style="width: 1500px" id="dataTable" width="100%" cellspacing="0">
                              <?php

        if (isset($_SESSION['siswa'])) :
          $nisn = $_SESSION['siswa'];
          $query = "select *from pembayaran where nisn='$nisn'";
          $data = mysqli_query($conn, $query);
          $result = mysqli_fetch_array($data);
          if (mysqli_num_rows($data) == 0) :
            echo '<div class="alert alert-danger" role="alert">
                        Maaf NIS yang anda masukan tidak terdaftar ! 
                      </div>';
          else :
        ?>

            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Profil Siswa</h6>
              </div>
              <div class="card-body">
                <div class="row">

                  <div class="col-8">
                    <div class="table-responsive">
                      <table class="table text-dark table-borderless" style=" width: 550px; " id="dataTable" cellpadding="0" cellspacing="0">
                        <?php
                        $query = "SELECT a.nisn , a.nis, a.nama, b.nama_kelas , b.kompetensi_keahlian  from siswa AS a INNER JOIN kelas as b ON a.id_kelas = b.id_kelas where a.nisn='$nisn'";
                        $result = mysqli_query($conn, $query);
                        $data = mysqli_fetch_assoc($result);
                        if (mysqli_num_rows($result) == 0) {
                          '<center><tr><td colspan="5">TIDAK ADA DATA !!</td></tr></center>';
                        }

                        ?>
                        <tr>
                          <td>NISN</td>
                          <td>:</td>
                          <td><?php echo $data['nisn']; ?></td>
                        </tr>

                        <tr>
                          <td>NIS</td>
                          <td>:</td>
                          <td><?php echo $data['nis']; ?></td>
                        </tr>

                        <tr>
                          <td>Nama Lengkap</td>
                          <td>:</td>
                          <td><?php echo $data['nama']; ?></td>
                        </tr>

                        <tr>
                          <td>Kelas</td>
                          <td>:</td>
                          <td><?php echo $data['nama_kelas']; ?></td>
                        </tr>

                        <tr>
                          <td>Kompetensi Keahlian</td>
                          <td>:</td>
                          <td><?php echo $data['kompetensi_keahlian']; ?></td>
                        </tr>
                      </table>

                    </div>
                  </div>
                  <div class="col-3 text-center mt-2">
                    <img class="bg-dark rounded" src="../asset/siswa2.png" width="200px" alt="">
                  </div>
                </div>
              </div>
            </div>

            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Pembayaran SPP</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" style="width: 100%" id="dataTable" cellspacing="0">
                    <?php
                    $query = "SELECT a.id_pembayaran, a.nisn, a.jatuh_tempo, a.bulan, a.tgl_bayar, a.jumlah_bayar, a.nama_petugas, a.keterangan, b.nama from pembayaran AS a INNER JOIN siswa as b ON a.nisn = b.nisn where a.nisn='$nisn'";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) == 0) {
                      '<center><tr><td colspan="8">TIDAK ADA DATA !!</td></tr></center>';
                    }
                    $no = 1;
                    ?>
                    <thead class="thead-dark">
                      <tr>
                        <th>No</th>
                        <th>Bulan</th>
                        <th>Jatuh Tempo</th>
                        <th>Tanggal Bayar</th>
                        <th>Jumlah Bayar</th>
                        <th>Nama Petugas</th>
                        <th>Keterangan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      while ($data = mysqli_fetch_array($result)) {


                      ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $data['bulan']; ?></td>
                          <td><?php echo $data['jatuh_tempo']; ?></td>
                          <td><?php echo $data['tgl_bayar']; ?></td>
                          <td><?php echo $data['jumlah_bayar']; ?></td>
                          <td><?php echo $data['nama_petugas']; ?></td>
                          <?php if ($data['keterangan'] == 'Belum Lunas') : ?>
                            <td style="color: red; font-weight:bold;"><?php echo $data['keterangan']; ?></td>
                          <?php else : ?>
                            <td style="color: blue; font-weight:bold;"><?php echo $data['keterangan']; ?></td>
                          <?php endif; ?>
                        </tr>
                      <?php
                        $no++;
                      } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        <?php
          endif;
        endif;
        ?>   
                                </tbody>
                              </table>
                            </div> 
                        </div>
                    </div>

          </div><!-- table-responsive -->


      </div><!-- br-pagebody -->
      <footer class="br-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2021. Sutanto Dwi Putra. All Rights Reserved.</div>
        </div>
      </footer>
      </div>
      </div>
    </div><!-- br-mainpanel -->


      <!-- MODAL -->
        <!-- this modal is static modal for presentation purpose. -->
        <!-- class .d-block annd .pos-relative in .modal is for demo only -->
        <div class="modal fade mb-10" id="modal">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content bd-0">
              <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Keluar</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body pd-20">
                <p class="mg-b-5">Apakah Anda Yakin Akan Keluar</p>
              </div>
              <div class="modal-footer justify-content-center">
                <a href="logout.php" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Ya</a>
                <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Tidak</button>
              </div>
            </div>
          </div><!-- modal-dialog -->
        </div><!-- modal -->


    <!-- ########## END: MAIN PANEL ########## -->

    <script src="../lib/jquery/jquery.js"></script>
    <script src="../lib/popper.js/popper.js"></script>
    <script src="../lib/bootstrap/bootstrap.js"></script>
    <script src="../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="../lib/moment/moment.js"></script>
    <script src="../lib/jquery-ui/jquery-ui.js"></script>
    <script src="../lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="../lib/peity/jquery.peity.js"></script>
    <script src="../lib/chartist/chartist.js"></script>
    <script src="../lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
    <script src="../lib/d3/d3.js"></script>
    <script src="../lib/rickshaw/rickshaw.min.js"></script>


    <script src="../js/bracket.js"></script>
    <script src="../js/ResizeSensor.js"></script>
    <script src="../js/dashboard.js"></script>
    <script>
      $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1299px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
          minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
          if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
            $('body').addClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideUp();
          } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
            $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
            $('body').removeClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideDown();
          }
        }
      });
    </script>
  </body>
</html>
