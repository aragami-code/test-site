<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/polygon/admindek/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:07:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>SERDI | ADMIN</title>


<!--[if lt IE 10]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="" />
<meta name="keywords" content="">
<meta name="author" content="" />

<link rel="icon" href="<?php echo base_url()?>assets2/images/favicon.ico" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets2/css/bootstrap.min.css">

<link rel="stylesheet" href="<?php echo base_url()?>assets2/css/waves.min.css" type="text/css" media="all">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets2/css/feather.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets2/css/font-awesome-n.min.css">

<link rel="stylesheet" href="<?php echo base_url()?>assets2/css/chartist.css" type="text/css" media="all">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets2/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets2/css/widget.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets2/css/jquery.steps.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets2/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets2/css/pages.css">
</head>
<body>

<div class="loader-bg">
<div class="loader-bar"></div>
</div>

<div id="pcoded" class="pcoded">
<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">

<nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">
            <div class="navbar-logo">
            
            <a class="mobile-menu" id="mobile-collapse" href="#!">
            <i class="feather icon-menu icon-toggle-right"></i>
            </a>
            <a class="mobile-options waves-effect waves-light">
            <i class="feather icon-more-horizontal"></i>
            </a>
            </div>
            <div class="navbar-container container-fluid">
            <ul class="nav-left">
            <li class="header-search">
            
            </li>
            <li>
            <a href="#!" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()" class="waves-effect waves-light" data-cf-modified-d2d1d6e2f87cbebdf4013b26-="">
            <i class="full-screen feather icon-maximize"></i>
            </a>
            </li>
            </ul>
            <ul class="nav-right">
            
            <li class="user-profile header-notification">
            <div class="dropdown-primary dropdown">
            <div class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?php echo base_url()?>assets2/jpg/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
            <span><?php echo $this->session->userdata('snom');?></span>
            <i class="feather icon-chevron-down"></i>
            </div>
            <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
           
            
          
           
            <li>


            <a href="<?php echo base_url();?>edit-users/<?php echo $this->session->userdata('sid'); ?>">
            <i class="feather icon-log-out"></i>mon profil
            </a>
            </li>
            <li>


            <a href="<?php echo base_url();?>Serdi_Admin/logout">
            <i class="feather icon-log-out"></i> Deconnection
            </a>
            </li>
            </ul>
            </div>
            </li>
            </ul>
            </div>
            </div>
</nav>













<div class="pcoded-main-container">
<div class="pcoded-wrapper">

<nav class="pcoded-navbar">
                <div class="nav-list">
                <div class="pcoded-inner-navbar main-menu">
                <div class="pcoded-navigation-label">Navigation</div>
                <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu active pcoded-trigger">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                <span class="pcoded-mtext">Dashboard</span>
                </a>
                <ul class="pcoded-submenu">
                <li class="active">

                <a href="<?php echo base_url('serdi_admin/index');?>" class="waves-effect waves-dark">
                <span class="pcoded-mtext">Aceuill</span>
                 </a>
                </li>
                
               
                </ul>
                </li>
                </ul>









                        <!--<li class="active"><a href="<?php// echo base_url('category/add_category' )?>"><i class="fa fa-circle-o"></i> block de site</a></li>-->
                        
                       
                        

                       
                        

                      <!--   <li class="active"><a href="<?php// echo base_url('users/manage_users' )?>"><i class="fa fa-circle-o"></i> GERER UTILISATEURS</a></li>-->


















                <div class="pcoded-navigation-label">MENU</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                        <i class="feather icon-box"></i>
                        </span>
                        <span class="pcoded-mtext">Mail</span>
                        </a>

                        <ul class="pcoded-submenu">

                            <li class="">
                            <a href="<?php// echo base_url('message/manage_message' )?>" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Consulter messages</span>
                            </a>
                            </li>
                        </ul>
                    </li>
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                        <i class="feather icon-box"></i>
                        </span>
                        <span class="pcoded-mtext">Prestation</span>
                        </a>

                        <ul class="pcoded-submenu">

                            <li class="">
                            <a href="<?php// echo base_url('category/add_category' )?>" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Ajouter une prestation</span>
                            </a>
                            </li>
                            <li class="">
                            <a href="<?php// echo base_url('category/manage_category' )?>" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Liste des prestations</span>
                            </a>
                            </li>
                        </ul>
                    </li>

                     <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                        <i class="feather icon-box"></i>
                        </span>
                        <span class="pcoded-mtext">Produits</span>
                        </a>

                        <ul class="pcoded-submenu">

                            <li class="">
                            <a href="<?php// echo base_url('contenu/add_contenu' )?>" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Ajouter un produit</span>
                            </a>
                            </li>
                            <li class="">
                            <a href="<?php// echo base_url('contenu/manage_contenu' )?>" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Liste des produits</span>
                            </a>
                            </li>
                        </ul>
                    </li>


                     <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                        <i class="feather icon-box"></i>
                        </span>
                        <span class="pcoded-mtext">image defilante(Slide)</span>
                        </a>

                        <ul class="pcoded-submenu">

                            <li class="">
                            <a href="<?php// echo base_url('slide/add_slide' )?>" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Ajouter un slide</span>
                            </a>
                            </li>
                            <li class="">
                            <a href="<?php// echo base_url('slide/manage_slide' )?>" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Liste des slides</span>
                            </a>
                            </li>
                        </ul>
                    </li>



                </ul>


                </div>
                </div>
</nav>




<div class="pcoded-content">


    
        <?php echo $Admin_Serdi_Content; ?>

 
</div>




<div id="styleSelector">
</div>

</div>
</div>
</div>
</div>


<!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade
            <br/>to any of the following web browsers to access this website.
        </p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="../files/assets/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="../files/assets/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="../files/assets/images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
<![endif]-->


<script data-cfasync="false" src="<?php echo base_url()?>assets2/js/email-decode.min.js"></script><script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="<?php echo base_url()?>assets2/js/jquery.min.js"></script>
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="<?php echo base_url()?>assets2/js/jquery-ui.min.js"></script>
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="<?php echo base_url()?>assets2/js/popper.min.js"></script>
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="<?php echo base_url()?>assets2/js/bootstrap.min.js"></script>

<script src="<?php echo base_url()?>assets2/js/waves.min.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="<?php echo base_url()?>assets2/js/jquery.slimscroll.js"></script>

<script src="<?php echo base_url()?>assets2/js/jquery.flot.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="<?php echo base_url()?>assets2/js/jquery.flot.categories.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="<?php echo base_url()?>assets2/js/curvedlines.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="<?php echo base_url()?>assets2/js/jquery.flot.tooltip.min.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

<script src="<?php echo base_url()?>assets2/js/chartist.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

<script src="<?php echo base_url()?>assets2/js/amcharts.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="<?php echo base_url()?>assets2/js/serial.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="<?php echo base_url()?>assets2/js/light.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

<script src="<?php echo base_url()?>assets2/js/pcoded.min.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="<?php echo base_url()?>assets2/js/vertical-layout.min.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="<?php echo base_url()?>assets2/js/custom-dashboard.min.js"></script>
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="<?php echo base_url()?>assets2/js/script.min.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="<?php echo base_url()?>assets2/js/rocket-loader.min.js" data-cf-settings="d2d1d6e2f87cbebdf4013b26-|49" defer=""></script>







<script type="7ab3cb0e204785e18dc50839-text/javascript" src="<?php echo base_url()?>assets2/js/bootstrap.min.js"></script>

<script src="js/waves.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>

<script type="7ab3cb0e204785e18dc50839-text/javascript" src="<?php echo base_url()?>assets2/js/jquery.slimscroll.js"></script>

<script type="7ab3cb0e204785e18dc50839-text/javascript" src="<?php echo base_url()?>assets2/js/modernizr.js"></script>
<script type="7ab3cb0e204785e18dc50839-text/javascript" src="<?php echo base_url()?>assets2/js/css-scrollbars.js"></script>

<script src="<?php echo base_url()?>assets2/js/jquery.datatables.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
<script src="<?php echo base_url()?>assets2/js/datatables.buttons.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
<script src="<?php echo base_url()?>assets2/js/jszip.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
<script src="<?php echo base_url()?>assets2/js/pdfmake.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
<script src="<?php echo base_url()?>assets2/js/vfs_fonts.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
<script src="<?php echo base_url()?>assets2/js/buttons.print.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
<script src="<?php echo base_url()?>assets2/js/buttons.html5.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
<script src="<?php echo base_url()?>assets2/js/datatables.bootstrap4.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
<script src="<?php echo base_url()?>assets2/js/datatables.responsive.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
<script src="<?php echo base_url()?>assets2/js/responsive.bootstrap4.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>

<script src="<?php echo base_url()?>assets2/js/data-table-custom.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
<script src="<?php echo base_url()?>assets2/js/pcoded.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
<script src="<?php echo base_url()?>assets2/js/vertical-layout.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
<script src="<?php echo base_url()?>assets2/js/jquery.mcustomscrollbar.concat.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
<script type="7ab3cb0e204785e18dc50839-text/javascript" src="<?php echo base_url()?>assets2/js/script.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
<script type="7ab3cb0e204785e18dc50839-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="js/rocket-loader.min.js" data-cf-settings="7ab3cb0e204785e18dc50839-|49" defer=""></script>




<script src="<?php echo base_url()?>assets2/js/jquery.cookie.js" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
<script src="<?php echo base_url()?>assets2/js/jquery.steps.js" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
<script src="<?php echo base_url()?>assets2/js/jquery.validate.js" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>

<script src="<?php echo base_url()?>assets2/js/underscore-min.js" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
<script src="<?php echo base_url()?>assets2/js/moment.min.js" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>
<script type="ce2668daaac54a74e9f6cdff-text/javascript" src="<?php echo base_url()?>assets2/js/validate.js"></script>

<script src="<?php echo base_url()?>assets2/js/form-wizard.js" type="ce2668daaac54a74e9f6cdff-text/javascript"></script>










</body>

<!-- Mirrored from colorlib.com/polygon/admindek/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:25 GMT -->
</html>
