<!DOCTYPE html>
<html lang="en">

<head>
    <title>GymWay</title>


      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Codedthemes">
      <meta name="keywords" content="flat ui, admin flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
      <meta name="author" content="Codedthemes">
      <!-- Favicon icon -->
      <link rel="icon" href="<?php echo base_url('assets/images/favicon.ico');?>" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/bootstrap/dist/css/bootstrap.min.css');?>">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/icon/themify-icons/themify-icons.css');?>">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/icon/icofont/css/icofont.css');?>">
      <!-- flag icon framework css -->
      <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/pages/flag-icon/flag-icon.min.css');?>"> -->
      <!-- Menu-Search css -->
      <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/pages/menu-search/css/component.css');?>"> -->
      <!-- amchart css -->
      <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/pages/dashboard/amchart/css/amchart.css');?>"> -->
      <!-- Horizontal Timeline -->
      <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/pages/dashboard/horizontal-timeline/css/style.css');?>"> -->
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>">
      <!-- Select 2 css -->
   <link rel="stylesheet" href="<?php echo base_url('bower_components/select2/css/select2.min.css');?>" />

      <!--color css-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/linearicons.css');?>" >
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/simple-line-icons.css');?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.mCustomScrollbar.css');?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/ionicons.css');?>">
      <!-- jpro forms css -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/pages/j-pro/css/demo.css');?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/pages/j-pro/css/font-awesome.min.css');?>">
       <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/pages/j-pro/css/j-pro-modern.css');?>">
  <!-- ventanas modal -->
           <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('bower_components/sweetalert/css/sweetalert.css');?>"> -->
           <!-- Date-Dropper css -->
             <link rel="stylesheet" type="text/css" href="<?php echo base_url('bower_components/datedropper/css/datedropper.min.css');?>" />



      <!-- DataTables -->
        <!-- <link rel="stylesheet" href="<?php echo base_url('assets/datatables.net-bs/css/dataTables.bootstrap.min.css');?>"> -->
            <!-- DataTables -->
        <!-- <link rel="stylesheet" href="<?php echo base_url('assets/datatables.net-bs/css/dataTables.bootstrap.min.css');?>"> -->
  <!-- <link rel="stylesheet" href="<?php echo base_url('assets/datatables/css/buttons.dataTables.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/datatables/css/responsive.bootstrap4.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/datatables/css/responsive.bootstrap4.min.css');?>"> -->
  </head>



  <script type="text/javascript" src="<?php echo base_url('assets/plugins/jquery/dist/jquery.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/plugins/jquery-ui/jquery-ui.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/plugins/tether/dist/js/tether.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap/dist/js/bootstrap.min.js');?>"></script>



<script type="text/javascript" src="<?php echo base_url('bower_components/datedropper/js/datedropper.min.js');?>"></script>

  <!-- <script src="<?php echo base_url('assets/datatables.net/js/jquery.dataTables.min.js');?>"></script> -->
  <!-- jquery slimscroll js -->
  <script type="text/javascript" src="<?php echo base_url('assets/plugins/jquery-slimscroll/jquery.slimscroll.js');?>"></script>
  <!-- modernizr js -->
  <!-- <script type="text/javascript" src="<?php echo base_url('assets/plugins/modernizr/modernizr.js');?>"></script> -->
  <!-- <script type="text/javascript" src="<?php echo base_url('assets/plugins/modernizr/feature-detects/css-scrollbars.js');?>"></script> -->
  <!-- classie js -->
  <!-- <script type="text/javascript" src="<?php echo base_url('assets/plugins/classie/classie.js');?>"></script> -->
  <!-- Rickshow Chart js -->
  <!-- <script src="<?php echo base_url('assets/plugins/d3/d3.js');?>"></script> -->
  <!-- <script src="<?php echo base_url('assets/plugins/rickshaw/rickshaw.js');?>"></script> -->
  <!-- Morris Chart js -->
  <!-- <script src="<?php echo base_url('assets/plugins/raphael/raphael.min.js');?>"></script> -->
  <!-- <script src="<?php echo base_url('assets/plugins/morris.js/morris.js');?>"></script> -->
  <!-- Horizontal-Timeline js -->
  <!-- <script type="text/javascript" src="<?php echo base_url('assets/pages/dashboard/horizontal-timeline/js/main.js');?>"></script> -->
  <!-- amchart js -->
  <!-- <script type="text/javascript" src="<?php echo base_url('assets/pages/dashboard/amchart/js/amcharts.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/pages/dashboard/amchart/js/serial.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/pages/dashboard/amchart/js/light.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/pages/dashboard/amchart/js/custom-amchart.js');?>"></script> -->
  <!-- i18next.min.js -->
  <!-- <script type="text/javascript" src="<?php echo base_url('assets/plugins/i18next/i18next.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/plugins/i18next-xhr-backend/i18nextXHRBackend.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/plugins/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/plugins/jquery-i18next/jquery-i18next.min.js');?>"></script> -->
  <!-- Custom js -->
  <!-- <script type="text/javascript" src="<?php echo base_url('assets/pages/dashboard/custom-dashboard.js');?>"></script> -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/script.js');?>"></script>
  <script src="<?php echo base_url('assets/js/pcoded.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/demo-12.js');?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.mCustomScrollbar.concat.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.mousewheel.min.js');?>"></script>
  <!-- j-pro js -->
    <!-- <script type="text/javascript" src="<?php echo base_url('assets/pages/j-pro/js/jquery.ui.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/pages/j-pro/js/jquery.maskedinput.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/pages/j-pro/js/jquery.j-pro.js');?>"></script> -->

    <!-- Select 2 js -->
       <script type="text/javascript" src="<?php echo base_url('bower_components/select2/js/select2.full.min.js');?>"></script>

     <script type="text/javascript" src="<?php echo base_url('assets/pages/advance-elements/select2-custom.js');?>"></script>


  <!-- classie js -->
  <!-- <script type="text/javascript" src="<?php echo base_url('assets/plugins/classie/classie.js');?>"></script> -->


<!-- <script src="<?php echo base_url('assets/pages/data-table/js/data-table-custom.js');?>"></script> -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/pages/data-table/css/buttons.dataTables.min.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css');?>">

<!-- Date-time picker css -->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/pages/advance-elements/css/bootstrap-datetimepicker.css');?>">
   <!-- Date-range picker css  -->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('bower_components/bootstrap-daterangepicker/css/daterangepicker.css');?>" />


<script type="text/javascript" src="<?php echo base_url('assets/pages/advance-elements/moment-with-locales.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/pages/advance-elements/bootstrap-datetimepicker.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('bower_components/bootstrap-daterangepicker/js/daterangepicker.js');?>"></script>





    <script src="<?php echo base_url('bower_components/datatables.net/js/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo base_url('bower_components/datatables.net-buttons/js/dataTables.buttons.min.js');?>"></script>
    <script src="<?php echo base_url('assets/pages/data-table/js/jszip.min.js');?>"></script>
    <script src="<?php echo base_url('assets/pages/data-table/js/pdfmake.min.js');?>"></script>
    <script src="<?php echo base_url('assets/pages/data-table/js/vfs_fonts.js');?>"></script>
    <script src="<?php echo base_url('bower_components/datatables.net-buttons/js/buttons.print.min.js');?>"></script>
    <script src="<?php echo base_url('bower_components/datatables.net-buttons/js/buttons.html5.min.js');?>"></script>
    <script src="<?php echo base_url('bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js');?>"></script>
    <script src="<?php echo base_url('bower_components/datatables.net-responsive/js/dataTables.responsive.min.js');?>"></script>
    <script src="<?php echo base_url('bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js');?>"></script>
    <script src="<?php echo base_url('assets/pages/data-table/js/data-table-custom.js');?>"></script>
    <!-- ventanas modal -->

<!-- <script type="text/javascript" src="<?php echo base_url('bower_components/sweetalert/js/sweetalert.min.js');?>"></script> -->
<!-- <script type="text/javascript" src="<?php echo base_url('assets/js/modal.js');?>"></script> -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.10/dist/sweetalert2.all.min.js"></script>

  <body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div></div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header" >
                <div class="navbar-wrapper">
                    <div class="navbar-logo" data-navbar-theme="theme4">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a href="#!">
                            <img class="img-fluid" src="<?php echo base_url('assets/images/logo.png');?>" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <div>
                            <ul class="nav-left">
                                <li>
                                    <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                                </li>
                                <li>
                                    <a class="main-search morphsearch-search" href="#">
                                        <!-- themify icon -->
                                        <i class="ti-search"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" onclick="javascript:toggleFullScreen()">
                                        <i class="ti-fullscreen"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('CustomerLogin');?>" tooltip="Control de Ingreso">
                                        <i class="icofont icofont-bell-alt"></i>
                                    </a>
                                </li>

                            </ul>


                            <ul class="nav-right">
                                <li class="user-profile header-notification">
                                    <a href="#!">
                                        <img src="<?php echo base_url('assets/images/user.png');?>" alt="User-Profile-Image">
                                        <span><?= $sesion->first_name.' '.$sesion->last_name?></span>
                                        <i class="ti-angle-down"></i>
                                    </a>
                                    <ul class="show-notification profile-notification">
                                        <li>
                                            <a href="<?= base_url('Auth/'); ?>">
                                                <i class="ti-settings"></i> Usuarios
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('Auth/edit_user/'.$sesion->id); ?>">
                                                <i class="ti-user"></i> Perfil
                                            </a>
                                        </li>

                                        <li>
                                            <a href="<?= base_url('Auth/logout'); ?>">
                                                <i class="ti-layout-sidebar-left"></i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>


                        </div>
                    </div>
                </div>
            </nav>



            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar" >
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-40" src="<?php echo base_url('assets/images/user.png');?>" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span><?= $sesion->first_name.' '.$sesion->last_name?></span>
                                        <span id="more-details">GymWay</span>
                                    </div>
                                </div>


                            </div>
                            <div class="pcoded-navigatio-lavel">Administración</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="<?= ($active == 'dashboard' ? 'active' : '')?> pcoded-trigger ">
                                    <a href="<?php echo site_url('/');?>">
                                        <span class="pcoded-micon"><i class="ti-comments"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <ul class=" pcoded-item pcoded-left-item">
                                <li class="<?= ($active == 'clientes' ? 'active' : '')?> pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext">Clientes</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="<?php echo site_url('Clientes/add/');?>">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Nuevo Cliente</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="<?php echo site_url('Clientes/');?>">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Ver Registro de Clientes</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                              </ul>
                              <?php if ($this->ion_auth->in_group(array(1,2))): ?>
                              <ul class="pcoded-item pcoded-left-item">
                                  <li class="<?= ($active == 'Planes' ? 'active' : '')?> pcoded-trigger ">
                                      <a href="<?php echo site_url('Planes');?>">
                                          <span class="pcoded-micon"><i class="icofont icofont-bank-alt"></i></span>
                                          <span class="pcoded-mtext">Planes y Promociones</span>
                                          <span class="pcoded-mcaret"></span>
                                      </a>
                                  </li>
                              </ul>
                              <ul class="pcoded-item pcoded-left-item">
                                  <li class="<?= ($active == 'Pagos' ? 'active' : '')?> pcoded-trigger ">
                                      <a href="<?php echo site_url('Payments');?>">
                                          <span class="pcoded-micon"><i class="icofont icofont-bank-alt"></i></span>
                                          <span class="pcoded-mtext">Pagos</span>
                                          <span class="pcoded-mcaret"></span>
                                      </a>
                                  </li>
                              </ul>
                              <ul class="pcoded-item pcoded-left-item">
                                  <li class="<?= ($active == 'Productos' ? 'active' : '')?> pcoded-trigger ">
                                      <a href="<?php echo site_url('Productos');?>">
                                          <span class="pcoded-micon"><i class="icofont icofont-candy"></i></span>
                                          <span class="pcoded-mtext">Productos</span>
                                          <span class="pcoded-mcaret"></span>
                                      </a>
                                  </li>
                              </ul>
                              <ul class="pcoded-item pcoded-left-item">
                                  <li class="<?= ($active == 'Ventas' ? 'active' : '')?> pcoded-trigger ">
                                      <a href="<?php echo site_url('Ventas');?>">
                                          <span class="pcoded-micon"><i class="ion-cash"></i></span>
                                          <span class="pcoded-mtext">Ventas</span>
                                          <span class="pcoded-mcaret"></span>
                                      </a>
                                  </li>
                              </ul>
                              
                              <ul class=" pcoded-item pcoded-left-item">
                                  <li class="<?= ($active == 'Reportes' ? 'active' : '')?> pcoded-hasmenu">
                                      <a href="javascript:void(0)">
                                          <span class="pcoded-micon"><i class="ion-ios-pie"></i></span>
                                          <span class="pcoded-mtext">Reportes</span>
                                          <span class="pcoded-mcaret"></span>
                                      </a>
                                      <ul class="pcoded-submenu">
                                          <li class=" ">
                                              <a href="<?php echo site_url('Reportes/Ingresos/');?>">
                                                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                  <span class="pcoded-mtext">Ingresos</span>
                                                  <span class="pcoded-mcaret"></span>
                                              </a>
                                          </li>
                                          <li class=" ">
                                              <a href="<?php echo site_url('Reportes/Pagos');?>">
                                                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                  <span class="pcoded-mtext">Pagos</span>
                                                  <span class="pcoded-mcaret"></span>
                                              </a>
                                          </li>
                                      </ul>
                                  </li>
                                </ul>


                            <?php endif ?>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">

                              <!-- Alertas! -->
                    <div align="center">
                    <?php if($this->session->flashdata('success')){ ?>
                            <div class="alert alert-success">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                <strong>Exito!</strong> <?php echo $this->session->flashdata('success'); ?>
                            </div>
                        <?php }else if($this->session->flashdata('error')){  ?>
                            <div class="alert alert-danger">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
                            </div>
                        <?php }else if($this->session->flashdata('warning')){  ?>
                            <div class="alert alert-warning">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                <strong>Advertencia!</strong> <?php echo $this->session->flashdata('warning'); ?>
                            </div>
                        <?php }else if($this->session->flashdata('info')){  ?>
                            <div class="alert alert-info">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                <strong>Info!</strong> <?php echo $this->session->flashdata('info'); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <!-- FIN Alertas! -->

                                <div class="page-wrapper">
                                    <div class="page-body">
                                      <?php
                                      if(isset($_view) && $_view)
                                          $this->load->view($_view);
                                      ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

            </div>
        </div>
    </div>
</div>







</body>

</html>
