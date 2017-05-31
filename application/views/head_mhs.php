<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Konsultasi|Mahasiswa</title>

  <!-- Bootstrap core CSS -->

  <link href="<?=base_url('assets/gentelella/css/bootstrap.min.css')?>" rel="stylesheet">

  <link href="<?=base_url('assets/gentelella/fonts/css/font-awesome.min.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/gentelella/css/animate.min.css')?>" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="<?=base_url('assets/gentelella/css/custom.css')?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/gentelella/css/maps/jquery-jvectormap-2.0.3.css')?>" />
  <link href="<?=base_url('assets/gentelella/css/icheck/flat/green.css')?>" rel="stylesheet" />
  <link href="<?=base_url('assets/gentelella/css/floatexamples.css')?>" rel="stylesheet" type="text/css" />


  <script src="<?=base_url('assets/gentelella/js/jquery.min.js')?>"></script>

</head>


<body class="nav-md">

  <div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="<?php echo site_url('mhs/Cmhs'); ?>" class="site_title"><span>Mahasiswa</span></a>
          </div>
          <div class="clearfix"></div>



          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
            <br>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Menu <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?=site_url('mhs/Cmhs');?>">History</a>
                    </li>
                    <li><a href="<?=site_url('mhs/Cmhs/konsul');?>">Konsultasi</a>
                    </li>
                    <li><a href="<?=site_url('mhs/Cmhs/profil');?>">Profil</a>
                    </li>
                    <li><a href="<?=site_url('mhs/Cmhs/infoadmin_mhs');?>">Informasi Admin</a>
                    </li>
                  </ul>
                </li>                
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <center>
              <hr>
              <h5>Developed by Alim Indev</h5>
              <hr>
            </center>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="images/img.jpg" alt=""><?=$this->session->userdata('nama').' ('.$this->session->userdata('nim').')';?>
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">                  
                  <li><a href="<?=site_url('Cauth/logout');?>"><i class="fa fa-sign-out pull-right"></i> Keluar</a>
                  </li>
                </ul>
              </li>

            </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->