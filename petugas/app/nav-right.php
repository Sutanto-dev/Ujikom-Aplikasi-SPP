<div class="br-header-right">
        <nav class="nav">
         <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name"><?php echo $_SESSION['nama_petugas'];?></span>
              <img src="../img/admin.png" class="wd-40 rounded-circle" alt="">
              <span class="square-10 bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav ">
                <li><a href="../logout.php" data-toggle="modal" data-target="#modal"><i class="icon ion-power"></i> Keluar</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
      </div><!-- br-header-right -->