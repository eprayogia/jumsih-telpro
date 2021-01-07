<?php
session_start();
if(empty($_SESSION)){
    header("Location: ../index.php"); 
}elseif($_SESSION['level']!="PUSAT"){ //supaya user biasa tidak masuk dashboard
        header("location: ./inputdata.php");
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Home</title>
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
                                            <a href='index.php' class='mm-active'>
                                        <i class='metismenu-icon pe-7s-display2'></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href='inputdata.php' class=''>
                                        <i class='metismenu-icon pe-7s-pen'></i>
                                        Input laporan
                                    </a>
                                    ";

                                        
                                        }else{
                                            

                                           echo "<li>
                                    <a href='inputdata.php' class=''>
                                        <i class='metismenu-icon pe-7s-pen'></i>
                                        Input laporan
                                    </a>
                                    <li>
                                    <a href='data.php' class='mm-active'>
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
                </div>    <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                        <?php
                                            $uname = $_SESSION['username'];
                                            include("../koneksi.php");
                                            $query = $query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$uname'");
                                            while($data = mysqli_fetch_array($query)){                    
                                            ?>
                                    <div>Selamat Datang, <?php echo $data['nama']; }?>
                                        <div class="page-title-subheading">Dashboard report JUMSIH Telkom Property
                                        </div>
                                    </div>
                                </div>
                                
                                </div>
                        </div>            <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total Kantor Area</div>
                                            <div class="widget-subheading">Telkom Property</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>7</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-arielle-smile">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total Lokasi</div>
                                                <?php
                                                    include("../koneksi.php");
                                                    
                                                    $sql = mysqli_query($koneksi,"SELECT * FROM users WHERE level='2' OR level='3' OR level='4' OR level='5' OR level='6' OR level='7' OR level='8'");
                                                    $jum = array();
                                                    while(($row = mysqli_fetch_array($sql))!=null){
                                                        $jum[] = $row;
                                                    }
                                                    $hitung = count($jum);
                                                ?>    
                                            <div class="widget-subheading">FM/BM</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span><?php echo $hitung; ?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <!-- Buat Conten -->
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <!-- Buat Conten -->
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <!-- Buat Conten -->
                            </div>
                            <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                                
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
                                    <div class="widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left pr-2 fsize-1">

                                                    <?php
                                                    include("../koneksi.php");
                                                    $bulanini = date('F Y');
                                                    //echo $bulanini;
                                                    
                                                    $sql = mysqli_query($koneksi,"SELECT * FROM users WHERE level='2'"); //beda area ganti level
                                                    $jum = array();
                                                    while(($row = mysqli_fetch_array($sql))!=null){
                                                        $jum[] = $row;
                                                    }
                                                    $hitung = count($jum);
                                                    //echo $hitung;

                                                    $ambildata = mysqli_query($koneksi, "SELECT * FROM data WHERE area='AREA1' AND bulan='$bulanini'");
                                                    $hitungjumlah = array();
                                                    while (($dat = mysqli_fetch_array($ambildata))!=NULL) {
                                                        $hitungjumlah[] = $dat;
                                                    }
                                                    $hitungdata = count($hitungjumlah);
                                                    
                                                    $hasarea1 = ($hitungdata/4)/$hitung*100; //Hitung persentase

                                                    $numbar1 = number_format($hasarea1); //untuk progress bar
                                                    
                                                ?>

                                                    <div class="widget-numbers mt-0 fsize-3 text-info"><?php echo number_format($hasarea1); echo "%"; ?></div>
                                                </div>
                                                <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                        <!-- progress bar--> 
                                                        <div class='progress-bar bg-info' role='progressbar' aria-valuenow='89' aria-valuemin='0' aria-valuemax='100' style="min-width: 0 em; width: <?php echo $numbar1; ?>%;">
                                                        </div>
                                                        <!-- -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left fsize-1">
                                                <div class="text-muted opacity-6">AREA 1</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
                                    <div class="widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left pr-2 fsize-1">





                                                    <?php
                                                    include("../koneksi.php");
                                                    
                                                    $sql3 = mysqli_query($koneksi,"SELECT * FROM users WHERE level='3'"); //beda area ganti level
                                                    $jum3 = array();
                                                    while(($row3 = mysqli_fetch_array($sql3))!=null){
                                                        $jum3[] = $row3;
                                                    }
                                                    $hitung3 = count($jum3);
                                                    //echo $hitung;

                                                    $ambildata3 = mysqli_query($koneksi, "SELECT * FROM data WHERE area='AREA2' AND bulan='$bulanini'");
                                                    $hitungjumlah3 = array();
                                                    while (($dat3 = mysqli_fetch_array($ambildata3))!=NULL) {
                                                        $hitungjumlah3[] = $dat3;
                                                    }
                                                    $hitungdata3 = count($hitungjumlah3);
                                                    
                                                    $hasarea2 = ($hitungdata3/4)/$hitung3*100; //Hitung persentase

                                                    $numbar3 = number_format($hasarea2); //untuk progress bar
                                                    
                                                ?>





                                                    <div class="widget-numbers mt-0 fsize-3 text-info"><?php echo number_format($hasarea2); echo "%"; ?></div>
                                                </div>
                                                <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="min-width: 0 em; width: <?php echo $numbar3; ?>%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left fsize-1">
                                                <div class="text-muted opacity-6">AREA 2</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
                                    <div class="widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left pr-2 fsize-1">
                                                    <div class="widget-numbers mt-0 fsize-3 text-info">89%</div>
                                                </div>
                                                <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left fsize-1">
                                                <div class="text-muted opacity-6">AREA 3</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
                                    <div class="widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left pr-2 fsize-1">
                                                    <div class="widget-numbers mt-0 fsize-3 text-info">89%</div>
                                                </div>
                                                <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left fsize-1">
                                                <div class="text-muted opacity-6">AREA 4</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
                                    <div class="widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left pr-2 fsize-1">
                                                    <div class="widget-numbers mt-0 fsize-3 text-info">89%</div>
                                                </div>
                                                <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left fsize-1">
                                                <div class="text-muted opacity-6">AREA 5</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
                                    <div class="widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left pr-2 fsize-1">
                                                    <div class="widget-numbers mt-0 fsize-3 text-info">89%</div>
                                                </div>
                                                <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left fsize-1">
                                                <div class="text-muted opacity-6">AREA 6</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
                                    <div class="widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left pr-2 fsize-1">
                                                    <div class="widget-numbers mt-0 fsize-3 text-info">89%</div>
                                                </div>
                                                <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left fsize-1">
                                                <div class="text-muted opacity-6">AREA 7</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
                                    <div class="widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left pr-2 fsize-1">
                                                    <div class="widget-numbers mt-0 fsize-3 text-info">89%</div>
                                                </div>
                                                <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left fsize-1">
                                                <div class="text-muted opacity-6">Totals Realisasi</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    </div>    </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
