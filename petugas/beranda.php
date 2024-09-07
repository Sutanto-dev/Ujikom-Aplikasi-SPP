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
    <div class="br-sideleft overflow-y-auto">
      <label class="sidebar-label pd-x-15 mg-t-20">Petugas</label>
      <div class="br-sideleft-menu">
        <a href="beranda.php" class="br-menu-link active">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
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
        <?php 
          include("app/nav-right.php");
        ?>
    </div><!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <!-- br-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="pd-30">
        <h4 class="tx-gray-800 mg-b-5">Beranda | Petugas</h4>
        <!-- <p class="mg-b-0">Do big things with Bracket, the responsive bootstrap 4 admin template.</p> -->
      </div><!-- d-flex -->

      <div class="br-pagebody mg-t-5 pd-x-30">
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="bg-info rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="ion ion-person tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-36 tx-white tx-lato tx-bold mg-b-2 lh-1"><?php
                            $query=mysqli_query($conn,"select count(*) as total from siswa");
                            $hasil=mysqli_fetch_array($query);

                            echo $hasil['total'];
                      ?></p>
                  <p class="tx-14 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Siswa</p>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="bg-danger rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="ion ion-person-stalker tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-36 tx-white tx-lato tx-bold mg-b-2 lh-1"><?php
                            $query=mysqli_query($conn,"select count(*) as total from petugas");
                            $hasil=mysqli_fetch_array($query);

                            echo $hasil['total'];
                      ?></p>
                  <p class="tx-14 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Petugas</p>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-warning rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="ion ion-ios-people tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-36 tx-white tx-lato tx-bold mg-b-2 lh-1"><?php
                            $query=mysqli_query($conn,"select count(*) as total from kelas");
                            $hasil=mysqli_fetch_array($query);

                            echo $hasil['total'];
                      ?></p>
                  <p class="tx-14 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Kelas</p>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-br-primary rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="ion ion-ios-paper tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-36 tx-white tx-lato tx-bold mg-b-2 lh-1"><?php
                            $query=mysqli_query($conn,"select count(*) as total from spp");
                            $hasil=mysqli_fetch_array($query);

                            echo $hasil['total'];
                      ?></p>
                  <p class="tx-14 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">SPP</p>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-15">
            <div class="bg-teal rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fas fa fa-check tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-36 tx-white tx-lato tx-bold mg-b-2 lh-1"><?php
                            $query=mysqli_query($conn,"select count(*) as total from pembayaran where keterangan='Lunas'");
                            $hasil=mysqli_fetch_array($query);

                            echo $hasil['total'];
                      ?></p>
                  <p class="tx-14 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Pembayaran</p>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
        </div><!-- row -->

        <div class="row row-sm mg-t-20">
          <div class="col-8">
            <!-- card -->
                
            
            <!-- card -->


          </div><!-- col-9 -->
          <div class="col-4">


            

          </div><!-- col-3 -->
        </div><!-- row -->

      </div><!-- br-pagebody -->
      <footer class="br-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2021. Sutanto Dwi Putra. All Rights Reserved.</div>
        </div>
      </footer>
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
                <a href="../logout.php" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Ya</a>
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
