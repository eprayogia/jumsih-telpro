<?php
session_start();
if(empty($_SESSION)){
    header("Location: ../index.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Input data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
<link href="./main.css" rel="stylesheet"></head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <center><img src="../app/assets/images/logotelpro.png" width="50" height="50"></center>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    
                    </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <a href="../logout.php" class="mb-2 mr-2 btn btn-danger" onclick="return confirm('Yakin ingin Logout?')">Log out</a>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>        </div>
            </div>
        
        </div>        <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Menu</li>
                                
                                    <!-- MENU -->
                                    <?php 
                                    //untuk Show or hide menu by user
                                        $level = $_SESSION['level'];
                                        if($level=="PUSAT"){
                                            
                                echo "<li>
                                            <a href='index.php' class=''>
                                        <i class='metismenu-icon pe-7s-display2'></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href='inputdata.php' class='mm-active'>
                                        <i class='metismenu-icon pe-7s-pen'></i>
                                        Input laporan
                                    </a>";

                                        
                                        }else{
                                            

                                           echo "<li>
                                    <a href='beranda.php' class=''>
                                        <i class='metismenu-icon pe-7s-pen'></i>
                                        Beranda
                                    </a>
                                    <li>
                                    <a href='inputdata.php' class='mm-active'>
                                        <i class='metismenu-icon pe-7s-pen'></i>
                                        Input laporan
                                    </a>
                                    <li>
                                    <a href='data.php' class=''>
                                        <i class='metismenu-icon pe-7s-news-paper'></i>
                                        Data Tersimpan
                                    </a>";


                                        
                                        }
                                    ?>
                                    <!-- END MENU -->
                                    

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>    
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                </div>
                                    <!--ISI KONTEN-->
                                    





                            <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="main-card mb-3 card">
                                    <?php
                                    function alert($msg) {
                                        echo "<script type='text/javascript'>alert('$msg');</script>";
                                    }
                                    ?>
                                    <div class="card-body"><h5 class="card-title">Input Data</h5>

                                        <?php
                                            $bulan = date('F Y');
                                            $now = date('d F Y - g:i a');
                                            
                                        ?>

                                        <form action="" method="POST" enctype="multipart/form-data" class="">
                                            <div class="row-md-6">
                                                    <div class="position-relative form-group">
                                                        <label class="" for="bulan">Bulan</label>
                                                        <select disabled class="mb-2 form-control" name="bulan" id="bulan" value="" class="form-control" required>
                                                            <option value="<?php echo $bulan; ?>"><?php echo $bulan; ?></option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="form-row">
                                                
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group">
                                                        <label class="">Area</label>
                                                        <div class="form-group">
                                                          <select disabled class="mb-2 form-control" name="area" id="area" value="" class="form-control" required>                                                        
                                                            <option value="<?php echo $_SESSION['level'] ?>"><?php echo $_SESSION['level']; ?></option>
                                                          </select>
                                                      </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group">
                                                        <label class="">FM/BM</label>
                                                        <div class="form-group">
                                                          
                                                          <select disabled class="mb-2 form-control" name="fmbm" id="fmbm" value="" class="form-control" required>
                    
                                                            <?php
                                                                $uname = $_SESSION['username'];
                                                                include("../koneksi.php");
                                                                $query = $query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$uname'");
                                                                while($data = mysqli_fetch_array($query)){
                                                                $nama = $data['nama'];
                                                                  ?><option value="$nama"><?php echo $nama; ?></option>
                                                                  <?php
                                                                  }
                                                            ?>
                                                          </select>

                                                      </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="position-relative form-group">
                                                <label for="lokasi" class="">Lokasi</label><input name="lokasi" id="lokasi" placeholder="Contoh: SS Jakarta Pusat, SS Jakarta Utara, dll." type="text" class="form-control" required="required">
                                            </div>
                                            <div class="position-relative form-group">
                                                <label for="uraian" class="">Uraian Kegiatan</label><textarea name="uraian" id="uraian" class="form-control" required="required"></textarea></div>
                                            
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    

                                                        <label class="">Periode Pelaksana</label>
                                                        <div class="form-group">
                                                          
                                                          <select class="mb-2 form-control" name="periode" value="" class="form-control" id="periode" required>
                                                            <option value=""></option>
                                                            <option value="1">Minggu ke-1</option>
                                                            <option value="2">Minggu ke-2</option>
                                                            <option value="3">Minggu ke-3</option>
                                                            <option value="4">Minggu ke-4</option>      
                                                          </select>

                                                </div>
                                                <div class="position-relative row form-group"><label for="foto" class="col-sm-5 col-form-label">Foto</label><br>
                                                <div class="col-sm-10"><input name="foto" id="foto" type="file" class="form-control-file" required="required">
                                                    <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                                </div>
                                                </div>
                                            <input type="submit" class="mt-2 btn btn-primary" name="submit" value="Simpan">
                                        </form>
                                    </div>
                                </div>
                                </div>
                            </div>


                            <?php
                                    if (isset($_POST['submit'])) {

                                                                $uname = $_SESSION['username'];
                                                                include("../koneksi.php");
                                                                $query = $query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$uname'");
                                                                while($data = mysqli_fetch_array($query)){
                                                                $nama = $data['nama'];
                                                                  


                                        $noww = date('d F Y - g:i a');
                                        $bulann = $bulan;
                                        $areaa = $_SESSION['level'];
                                        $fmbmm = $nama;
                                        $lokasi = $_POST['lokasi'];
                                        $uraian = $_POST['uraian'];
                                        $periode = $_POST['periode'];
                                                            }
                                        $rand = rand();
                                        $ekstensi =  array('png','jpg','jpeg','gif');
                                        $filename = $_FILES['foto']['name'];
                                        $ukuran = $_FILES['foto']['size'];
                                        $ext = pathinfo($filename, PATHINFO_EXTENSION);

                                        if(!in_array($ext,$ekstensi) ) {
                                            echo "<div class='alert alert-danger fade show' role='alert'>Ekstensi file tidak sesuai</div>";
                                        }else{
                                            if($ukuran < 1044070){      
                                                $xx = $rand.'_'.$filename;
                                                move_uploaded_file($_FILES['foto']['tmp_name'], 'foto/'.$rand.'_'.$filename);

                                                mysqli_query($koneksi, "INSERT INTO data VALUES(NULL,'$noww','$bulann','$areaa','$fmbmm','$lokasi','$uraian','$periode','$xx')");

                                                

                                                alert("Berhasil");
                                            }else{
                                                alert("Gagal");
                                            }
                                        }
                                    }

                                    ?>


                                <!--AKHIR ISI KONTEN-->

                            </div>
                            <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Grid</h5>
                                        <form class="">
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10"><input name="email" id="exampleEmail" placeholder="with a placeholder" type="email" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-10"><input name="password" id="examplePassword" placeholder="password placeholder" type="password" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label">Select</label>
                                                <div class="col-sm-10"><select name="select" id="exampleSelect" class="form-control"></select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelectMulti" class="col-sm-2 col-form-label">Select Multiple</label>
                                                <div class="col-sm-10"><select multiple="" name="selectMulti" id="exampleSelectMulti" class="form-control"></select></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Text Area</label>
                                                <div class="col-sm-10"><textarea name="text" id="exampleText" class="form-control"></textarea></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">File</label>
                                                <div class="col-sm-10"><input name="file" id="exampleFile" type="file" class="form-control-file">
                                                    <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                                </div>
                                            </div>
                                            <fieldset class="position-relative row form-group">
                                                <legend class="col-form-label col-sm-2">Radio Buttons</legend>
                                                <div class="col-sm-10">
                                                    <div class="position-relative form-check"><label class="form-check-label"><input name="radio2" type="radio" class="form-check-input"> Option one is this and that—be sure to include why it's great</label></div>
                                                    <div class="position-relative form-check"><label class="form-check-label"><input name="radio2" type="radio" class="form-check-input"> Option two can be something else and selecting it will deselect option
                                                        one</label></div>
                                                    <div class="position-relative form-check disabled"><label class="form-check-label"><input name="radio2" disabled="" type="radio" class="form-check-input"> Option three is disabled</label></div>
                                                </div>
                                            </fieldset>
                                            <div class="position-relative row form-group"><label for="checkbox2" class="col-sm-2 col-form-label">Checkbox</label>
                                                <div class="col-sm-10">
                                                    <div class="position-relative form-check"><label class="form-check-label"><input id="checkbox2" type="checkbox" class="form-check-input"> Check me out</label></div>
                                                </div>
                                            </div>
                                            <div class="position-relative row form-check">
                                                <div class="col-sm-10 offset-sm-2">
                                                    <button class="btn btn-secondary">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                            </div>
                        </div>            
 
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>