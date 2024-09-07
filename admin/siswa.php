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

    <title>SPP Online | Admin</title>

    <!-- vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="../lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
    <link href="../lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="../lib/chartist/chartist.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../css/bracket.css">
    <!-- <link rel="stylesheet" href="../css/sb-admin-2.css"> -->
    
    
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span><img src="../img/spplogo.png" width="120px" alt=""><span>]</span></a></div>
    <div class="br-sideleft overflow-y-auto">
      <label class="sidebar-label pd-x-15 mg-t-20">Admin</label>
      <div class="br-sideleft-menu">
        <a href="beranda.php" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="siswa.php" class="br-menu-link active">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-person-outline tx-24"></i>
            <span class="menu-item-label">Data Siswa</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="kelas.php" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-people-outline tx-24"></i>
            <span class="menu-item-label">Data Kelas</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="petugas.php" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-personadd-outline tx-24"></i>
            <span class="menu-item-label">Data Petugas</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="spp.php" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-24"></i>
            <span class="menu-item-label">Data SPP</span>
          </div><!-- menu-item -->
        <a href="pembayaran.php" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-calculator-outline tx-24"></i>
            <span class="menu-item-label">Pembayaran</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="histori.php" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-24"></i>
            <span class="menu-item-label">Histori Pembayaran</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
      </div><!-- info-lst -->

      <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">
      <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="input-group hidden-xs-down wd-170 transition">
        </div><!-- input-group -->
      </div><!-- br-header-left -->
      <!-- HEADER USER -->
        <?php include('app/nav-right.php') ?>

    </div><!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <!-- br-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="pd-30">
        <h4 class="tx-gray-800 mg-b-5">Data Siswa</h4>
        <!-- <p class="mg-b-0">Do big things with Bracket, the responsive bootstrap 4 admin template.</p> -->
      </div><!-- d-flex -->

      <div class="br-pagebody mg-t-5 pd-x-30">
      <div class="br-section-wrapper">
      <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Data Siswa</h6>
          <p class="mg-b-25 mg-lg-b-20">SMK Bina Wisata Lembang</p>
      <div class="table-responsive"  >
      <a href="tambah_siswa.php" class="btn btn-info">Tambah Data</a>
      <div class="bd bd-gray-300 rounded" >
            <table class="table table-bordered" style="width:1500px" width="100%" >
            <?php
             $query="select *from siswa INNER JOIN kelas ON siswa.id_kelas = kelas.id_kelas INNER JOIN spp ON siswa.id_spp=spp.id_spp";
             $result= mysqli_query($conn, $query);
              if(mysqli_num_rows($result)==0){
              echo '<center><tr><td colspan="8">TIDAK ADA DATA !!</td></tr></center>';
           }
          $no=1;
          ?>
              <thead class="thead-colored thead-teal">
                <tr>
                  <th>No</th>
                  <th>NISN</th>
                  <th>NIS</th>
                  <th>Nama</th>
                  <th>Kelas</th>
                  <th>Kompetensi Keahlian</th>
                  <th>Alamat</th>
                  <th>No.Hp</th>
                  <th>Tahun</th>
                  <th>Nominal</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
                                     while($data= mysqli_fetch_array($result)){
                                    ?>
                                        <tr>
                                            <td><?php echo $no;?></td>
                                            <td><?php echo $data['nisn'];?></td>
                                            <td><?php echo $data['nis'];?></td>
                                            <td><?php echo $data['nama'];?></td>
                                            <td><?php echo $data['nama_kelas'];?></td>
                                            <td><?php echo $data['kompetensi_keahlian'];?></td>
                                            <td><?php echo $data['alamat'];?></td>
                                            <td><?php echo $data['nomor_telepon'];?></td>
                                            <td><?php echo $data['tahun'];?></td>
                                            <td><?php echo $data['nominal'];?></td>
                                            <td>
                                                <a href="edit_siswa.php?id=<?php echo $data['id_siswa'];?>" class="btn btn-warning">Edit</a>
                                                <?php include 'app/modal_siswa.php'; ?>
                                                <a data-toggle="modal" data-target="#siswa-<?php echo $data['id_siswa']; ?>" href="edit_siswa.php" class="btn btn-danger" >Hapus</a>
                                            </td>
                                        </tr> 
                                        <?php
                                     $no++;
                                     }
                                    ?>   
              </tbody>
            </table>
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
