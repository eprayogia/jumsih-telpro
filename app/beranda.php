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
    <title>Data Tersimpan</title>
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
                                    <a href='beranda.php' class='mm-active'>
                                        <i class='metismenu-icon pe-7s-pen'></i>
                                        Beranda
                                    </a>
                                           <li>
                                    <a href='inputdata.php' class=''>
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
                                <style type="text/css">

						            body{
						                background-color: #f5f5f5;
						                margin: 0;
						                padding: 0;
						                font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
						            }

						            .page {
						                margin: 40px;
						            }

						            h1{
						                margin: 40px 0 60px 0;
						            }

						            .dark-area {
						                background-color: #666;
						                padding: 40px;
						                margin: 0 -40px 20px -40px;
						                clear: both;
						            }

						            .clearfix:before,.clearfix:after {content: " "; display: table;}
						            .clearfix:after {clear: both;}
						            .clearfix {*zoom: 1;}

						        </style>
						        <center>
						        	<?php 
						        	echo date('F Y');
						        	?>
						        <link rel="stylesheet" href="circle.css">
                                <!-- green -->
				                
						                <div class="clearfix">

						                    <div class="c100 p50 big green">
						                        <span>50%</span>
						                        <div class="slice">
						                            <div class="bar"></div>
						                            <div class="fill"></div>
						                        </div>
						                    </div>

						    
						                </div>
				            		
				            </center>
                			<!-- /green -->

                                <!--AKHIR ISI KONTEN-->

                            
                        </div>


                            </div>
                        </div>            
 
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>