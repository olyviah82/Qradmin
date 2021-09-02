<?php
    include('authentication.php')

    ?>


 <!DOCTYPE html>
 <html lang="en">

 <head>
     <!-- Required meta tags-->
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="au theme template">
     <meta name="author" content="Hau Nguyen">
     <meta name="keywords" content="au theme template">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
     <script src="path/to/fusioncharts.js"></script>
    <script src="path/to/fusioncharts.charts.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.6.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.6.2/firebase-database.js"></script>
<script src="path/to/app.js"></script>

     <!-- Title Page-->
     <title>QR CODE Admin</title>

     <!-- Fontfaces CSS-->
     <link href="css/font-face.css" rel="stylesheet" media="all">
     <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
     <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
     <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

     <!-- Bootstrap CSS-->
     <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

     <!-- Vendor CSS-->
     <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
     <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
     <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
     <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
     <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
     <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
     <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

     <!-- Main CSS-->
     <link href="css/theme.css" rel="stylesheet" media="all">

     <style>
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>

 </head>

 <body class="animsition">
     <div class="page-wrapper">
         <!-- HEADER DESKTOP-->
         <header class="header-desktop3 d-none d-lg-block">
             <div class="section__content section__content--p35">
                 <div class="header3-wrap">
                     <div class="header__logo">
                         <a href="#">
                             <img src="images/icon/logo-mini.png" alt="CoolAdmin" />
                         </a>
                     </div>
                     <div class="header__navbar">
                         
                         <ul>
                         <li><a href="dashboard.php">  <i class="fas fa-copy"> </i>HOME</a></li>
                        
                        <li class="has-sub">
                             <a href="#">
                                 <i class="fas fa-copy"></i>
                                 <span class="bot-line"></span>ACTIONS</a>
                             <ul class="header3-sub-list list-unstyled">
                                 <li>
                                     <a href="login.php">Login</a>
                                 </li>
                                 <li>
                                     <a href="register.php">Register</a>
                                 </li>
                                 <li>
                                     <a href="list_users.php">Edit Users</a>
                                 </li>
                                 <li>
                                     <a href="confirm.php">View Confirmed Students</a>
                                 </li>
                                 <li>
                                     <a href="screening.php">View Screening Details</a>
                                 </li>
                                
                             </ul>
                         </li>
                         <li><a href="email.php"> <i class="fas  fa-copy"> </i>CONTACT TRACING</a> </li>
                        <li class="has-sub">
                             <a href="#">
                                 <i class="fas fa-desktop"></i>
                                 <span class="bot-line"></span>GRAPHS</a>
                             <ul class="header3-sub-list list-unstyled">
                                 <li>
                                     <a href="taste.php">Graph-Taste</a>
                                 </li>
                                 <li>
                                     <a href="sorethroat.php">Graph-SoreThroat</a>
                                 </li>
                                 <li>
                                     <a href="headache.php">Headache-Graph</a>
                                 </li>
                                 <li>
                                     <a href="aches.php">Aches-Graph</a>
                                 </li>
                                 <li>
                                     <a href="fatigue.php">Fatigue-Graph</a>
                                 </li>
                                 <li>
                                     <a href="drycough.php">DryCough-Graph</a>
                                 </li>
                                 <li>
                                     <a href="contactgraph.php">Contact with +ve Case</a>
                                 </li>
                                 <li>
                                     <a href="fever.php">Fever Graph</a>
                                 </li>
                                 <li>
                                     <a href="temperaturegraph.php">Temperature Graph</a>
                                 </li>
                                 
                             </ul>
                         </li>
					</ul>
                             <!-- <li class="has-sub"> -->
                                 <!-- <a href="#">
                                     <i class="fas fa-tachometer-alt"></i>Dashboard
                                     <span class="bot-line"></span>
                                 </a>
                                 <ul class="header3-sub-list list-unstyled">
                                     <li>
                                         <a href="index.html">Dashboard 1</a>
                                     </li>
                                     <li>
                                         <a href="index2.html">Dashboard 2</a>
                                     </li>
                                     <li>
                                         <a href="index3.html">Dashboard 3</a>
                                     </li>
                                     <li>
                                         <a href="index4.html">Dashboard 4</a>
                                     </li>
                                 </ul>
                             </li>
                             <li>
                                 <a href="#">
                                     <i class="fas fa-shopping-basket"></i>
                                     <span class="bot-line"></span>eCommerce</a>
                             </li>
                             <li>
                                 <a href="table.html">
                                     <i class="fas fa-trophy"></i>
                                     <span class="bot-line"></span>Features</a> -->
                             <!-- </li> -->
                             <!-- <li class="has-sub">
                                 <a href="#">
                                     <i class="fas fa-copy"></i>
                                     <a href = "login.php " span class="bot-line"></span>Login</a>
                                 <ul class="header3-sub-list list-unstyled">
                                     <li>
                                         <a href="login.php">Login</a>
                                     </li>
                                     <li>
                                         <a href="register.php">Register</a>
                                     </li>
                                     <li>
                                         <a href="forget-pass.html">Forget Password</a>
                                     </li>
                                 </ul>
                             </li> -->
                             <!-- <li class="has-sub">
                                 <a href="#">
                                     <i class="fas fa-desktop"></i>
                                     <span class="bot-line"></span>UI Elements</a>
                                 <ul class="header3-sub-list list-unstyled">
                                     <li>
                                         <a href="button.html">Button</a>
                                     </li>
                                     <li>
                                         <a href="badge.html">Badges</a>
                                     </li>
                                     <li>
                                         <a href="tab.html">Tabs</a>
                                     </li>
                                     <li>
                                         <a href="card.html">Cards</a>
                                     </li>
                                     <li>
                                         <a href="alert.html">Alerts</a>
                                     </li>
                                     <li>
                                         <a href="progress-bar.html">Progress Bars</a>
                                     </li>
                                     <li>
                                         <a href="modal.html">Modals</a>
                                     </li>
                                     <li>
                                         <a href="switch.html">Switchs</a>
                                     </li>
                                     <li>
                                         <a href="grid.html">Grids</a>
                                     </li>
                                     <li>
                                         <a href="fontawesome.html">FontAwesome</a>
                                     </li>
                                     <li>
                                         <a href="typo.html">Typography</a>
                                     </li>
                                 </ul> -->
                             <!-- </li> -->
                        
                     </div>

                     
                     <div class="header__tool">
                         //
                         <!-- <div class="header-button-item has-noti js-item-menu">
                             <i class="zmdi zmdi-notifications"></i>
                             <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                                 <div class="notifi__title">
                                     <p>You have 3 Notifications</p>
                                 </div>
                                 <div class="notifi__item">
                                     <div class="bg-c1 img-cir img-40">
                                         <i class="zmdi zmdi-email-open"></i>
                                     </div>
                                     <div class="content">
                                         <p>You got a email notification</p>
                                         <span class="date">April 12, 2018 06:50</span>
                                     </div>
                                 </div>
                                 <div class="notifi__item">
                                     <div class="bg-c2 img-cir img-40">
                                         <i class="zmdi zmdi-account-box"></i>
                                     </div>
                                     <div class="content">
                                         <p>Your account has been blocked</p>
                                         <span class="date">April 12, 2018 06:50</span>
                                     </div>
                                 </div>
                                 <div class="notifi__item">
                                     <div class="bg-c3 img-cir img-40">
                                         <i class="zmdi zmdi-file-text"></i>
                                     </div>
                                     <div class="content">
                                         <p>You got a new file</p>
                                         <span class="date">April 12, 2018 06:50</span>
                                     </div>
                                 </div>
                                 <div class="notifi__footer">
                                     <a href="#">All notifications</a>
                                 </div>
                             </div>
                         </div> -->
                         <!-- <div class="header-button-item js-item-menu">
                             <i class="zmdi zmdi-settings"></i>
                             <div class="setting-dropdown js-dropdown">
                                 <div class="account-dropdown__body">
                                     <div class="account-dropdown__item">
                                         <a href="#">
                                             <i class="zmdi zmdi-account"></i>Account</a>
                                     </div>
                                     <div class="account-dropdown__item">
                                         <a href="#">
                                             <i class="zmdi zmdi-settings"></i>Setting</a>
                                     </div>
                                     <div class="account-dropdown__item">
                                         <a href="#">
                                             <i class="zmdi zmdi-money-box"></i>Billing</a>
                                     </div>
                                 </div>
                                 <div class="account-dropdown__body">
                                     <div class="account-dropdown__item">
                                         <a href="#">
                                             <i class="zmdi zmdi-globe"></i>Language</a>
                                     </div>
                                     <div class="account-dropdown__item">
                                         <a href="#">
                                             <i class="zmdi zmdi-pin"></i>Location</a>
                                     </div>
                                     <div class="account-dropdown__item">
                                         <a href="#">
                                             <i class="zmdi zmdi-email"></i>Email</a>
                                     </div>
                                     <div class="account-dropdown__item">
                                         <a href="#">
                                             <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                     </div>
                                 </div>
                             </div>
                         </div> -->
                         <div class="account-wrap">
                             <div class="account-item account-item--style2 clearfix js-item-menu">
                                 <div class="image">
                                     <img src="images/icon/avatar-02.jpg" alt="John Doe" />
                                 </div>
                                 <div class="content">
                                     <a class="js-acc-btn" href="#">Jane</a>
                                 </div>
                                 <div class="account-dropdown js-dropdown">
                                     <div class="info clearfix">
                                         <div class="image">
                                             <a href="#">
                                                 <img src="images/icon/avatar-02.jpg" alt="John Doe" />
                                             </a>
                                         </div>
                                         <div class="content">
                                             <h5 class="name">
                                                 <a href="#">Jane</a>
                                             </h5>
                                             <span class="email">jane@gmail.com</span>
                                         </div>
                                     </div>
                                     <div class="account-dropdown__body">
                                         <?php if (!isset($_SESSION['verified_user_id'])) : ?>
                                         <div class="account-dropdown__item">
                                             <a href="#">
                                                 <i class="zmdi zmdi-account"></i>Account</a>
                                         </div>
                                         <div class="account-dropdown__item">
                                             <a href="#">
                                                 <i class="zmdi zmdi-settings"></i>Setting</a>
                                         </div>
                                         <div class="account-dropdown__item">
                                             <a href="#">
                                                 <i class="zmdi zmdi-money-box"></i>Billing</a>
                                         </div>
                                     </div>
                                     <?php else : ?>
                                     <div class="account-dropdown__footer">
                                         <a href="logout.php">
                                             <i class="zmdi zmdi-power"></i>Logout</a>
                                     </div>
                                     <?php endif; ?>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </header>
         <!-- END HEADER DESKTOP-->

         <!-- HEADER MOBILE-->
         <header class="header-mobile header-mobile-2 d-block d-lg-none">
             <div class="header-mobile__bar">
                 <div class="container-fluid">
                     <div class="header-mobile-inner">
                         <a class="logo" href="index.html">
                             <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                         </a>
                         <button class="hamburger hamburger--slider" type="button">
                             <span class="hamburger-box">
                                 <span class="hamburger-inner"></span>
                             </span>
                         </button>
                     </div>
                 </div>
             </div>
             <nav class="navbar-mobile">
                 <div class="container-fluid">
                     <ul class="navbar-mobile__list list-unstyled">
                         <li class="has-sub">
                             <a class="js-arrow" href="#">
                                 <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                             <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                 <li>
                                     <a href="index.html">Dashboard 1</a>
                                 </li>
                                 <li>
                                     <a href="index2.html">Dashboard 2</a>
                                 </li>
                                 <li>
                                     <a href="index3.html">Dashboard 3</a>
                                 </li>
                                 <li>
                                     <a href="index4.html">Dashboard 4</a>
                                 </li>
                             </ul>
                         </li>
                         <li>
                             <a href="chart.html">
                                 <i class="fas fa-chart-bar"></i>Charts</a>
                         </li>
                         <li>
                             <a href="table.html">
                                 <i class="fas fa-table"></i>Tables</a>
                         </li>
                         <li>
                             <a href="form.html">
                                 <i class="far fa-check-square"></i>Forms</a>
                         </li>
                         <li>
                             <a href="calendar.html">
                                 <i class="fas fa-calendar-alt"></i>Calendar</a>
                         </li>
                         <li>
                             <a href="map.html">
                                 <i class="fas fa-map-marker-alt"></i>Maps</a>
                         </li>
                         <li class="has-sub">
                             <a class="js-arrow" href="#">
                                 <i class="fas fa-copy"></i>Pages</a>
                             <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                 <li>
                                     <a href="login.php  ">Login</a>
                                 </li>
                                 <li>
                                     <a href="register.php">Register</a>
                                 </li>
                                 <li>
                                     <a href="forget-pass.html">Forget Password</a>
                                 </li>
                             </ul>
                         </li>
                         <li class="has-sub">
                             <a class="js-arrow" href="#">
                                 <i class="fas fa-desktop"></i>UI Elements</a>
                             <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                 <li>
                                     <a href="button.html">Button</a>
                                 </li>
                                 <li>
                                     <a href="badge.html">Badges</a>
                                 </li>
                                 <li>
                                     <a href="tab.html">Tabs</a>
                                 </li>
                                 <li>
                                     <a href="card.html">Cards</a>
                                 </li>
                                 <li>
                                     <a href="alert.html">Alerts</a>
                                 </li>
                                 <li>
                                     <a href="progress-bar.html">Progress Bars</a>
                                 </li>
                                 <li>
                                     <a href="modal.html">Modals</a>
                                 </li>
                                 <li>
                                     <a href="switch.html">Switchs</a>
                                 </li>
                                 <li>
                                     <a href="grid.html">Grids</a>
                                 </li>
                                 <li>
                                     <a href="fontawesome.html">Fontawesome Icon</a>
                                 </li>
                                 <li>
                                     <a href="typo.html">Typography</a>
                                 </li>
                             </ul>
                         </li>
                     </ul>
                 </div>
             </nav>
         </header>
         <div class="sub-header-mobile-2 d-block d-lg-none">
             <div class="header__tool">
                 <div class="header-button-item has-noti js-item-menu">
                     <i class="zmdi zmdi-notifications"></i>
                     <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                         <div class="notifi__title">
                             <p>You have 3 Notifications</p>
                         </div>
                         <div class="notifi__item">
                             <div class="bg-c1 img-cir img-40">
                                 <i class="zmdi zmdi-email-open"></i>
                             </div>
                             <div class="content">
                                 <p>You got a email notification</p>
                                 <span class="date">April 12, 2018 06:50</span>
                             </div>
                         </div>
                         <div class="notifi__item">
                             <div class="bg-c2 img-cir img-40">
                                 <i class="zmdi zmdi-account-box"></i>
                             </div>
                             <div class="content">
                                 <p>Your account has been blocked</p>
                                 <span class="date">April 12, 2018 06:50</span>
                             </div>
                         </div>
                         <div class="notifi__item">
                             <div class="bg-c3 img-cir img-40">
                                 <i class="zmdi zmdi-file-text"></i>
                             </div>
                             <div class="content">
                                 <p>You got a new file</p>
                                 <span class="date">April 12, 2018 06:50</span>
                             </div>
                         </div>
                         <div class="notifi__footer">
                             <a href="#">All notifications</a>
                         </div>
                     </div>
                 </div>
                 <div class="header-button-item js-item-menu">
                     <i class="zmdi zmdi-settings"></i>
                     <div class="setting-dropdown js-dropdown">
                         <div class="account-dropdown__body">
                             <div class="account-dropdown__item">
                                 <a href="#">
                                     <i class="zmdi zmdi-account"></i>Account</a>
                             </div>
                             <div class="account-dropdown__item">
                                 <a href="#">
                                     <i class="zmdi zmdi-settings"></i>Setting</a>
                             </div>
                             <div class="account-dropdown__item">
                                 <a href="#">
                                     <i class="zmdi zmdi-money-box"></i>Billing</a>
                             </div>
                         </div>
                         <div class="account-dropdown__body">
                             <div class="account-dropdown__item">
                                 <a href="#">
                                     <i class="zmdi zmdi-globe"></i>Language</a>
                             </div>
                             <div class="account-dropdown__item">
                                 <a href="#">
                                     <i class="zmdi zmdi-pin"></i>Location</a>
                             </div>
                             <div class="account-dropdown__item">
                                 <a href="#">
                                     <i class="zmdi zmdi-email"></i>Email</a>
                             </div>
                             <div class="account-dropdown__item">
                                 <a href="#">
                                     <i class="zmdi zmdi-notifications"></i>Notifications</a>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="account-wrap">
                     <div class="account-item account-item--style2 clearfix js-item-menu">
                         <div class="image">
                             <img src="images/icon/avatar-02.jpg" alt="John Doe" />
                         </div>
                         <div class="content">
                             <a class="js-acc-btn" href="#">Jane</a>
                         </div>
                         <div class="account-dropdown js-dropdown">
                             <div class="info clearfix">
                                 <div class="image">
                                     <a href="#">
                                         <img src="images/icon/avatar-02.jpg" alt="John Doe" />
                                     </a>
                                 </div>
                                 <div class="content">
                                     <h5 class="name">
                                         <a href="#">Jane</a>
                                     </h5>
                                     <span class="email">jane@gmail.com</span>
                                 </div>
                             </div>
                             <div class="account-dropdown__body">

                                 <div class="account-dropdown__item">
                                     <a href="#">
                                         <i class="zmdi zmdi-account"></i>Account</a>
                                 </div>
                                 <div class="account-dropdown__item">
                                     <a href="#">
                                         <i class="zmdi zmdi-settings"></i>Setting</a>
                                 </div>
                                 <div class="account-dropdown__item">
                                     <a href="#">
                                         <i class="zmdi zmdi-money-box"></i>Billing</a>
                                 </div>
                             </div>

                             <div class="account-dropdown__footer">
                                 <a href="logout.php">
                                     <i class="zmdi zmdi-power"></i>Logout</a>
                             </div>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- END HEADER MOBILE -->

         <!-- PAGE CONTENT-->
         <div class="page-content--bgf7">
             <!-- BREADCRUMB-->
             <section class="au-breadcrumb2">
                 <div class="container">
                     <div class="row">
                         <div class="col-md-12">
                             <div class="au-breadcrumb-content">
                                 <div class="au-breadcrumb-left">
                                     <span class="au-breadcrumb-span">You are here:</span>
                                     <ul class="list-unstyled list-inline au-breadcrumb__list">
                                         <li class="list-inline-item active">
                                             <a href="#">Home</a>
                                         </li>
                                         <li class="list-inline-item seprate">
                                             <span>/</span>
                                         </li>
                                         <li class="list-inline-item">Dashboard</li>
                                     </ul>
                                 </div>
                                 
                             </div>
                         </div>
                     </div>
                 </div>
             </section>
             <!-- END BREADCRUMB-->

             <!-- WELCOME-->
             <section class="welcome p-t-10">
                 <div class="container">
                     <div class="row">
                         <div class="col-md-12">
                             <?php
                                if (isset($_SESSION['status'])) {
                                    echo "<h5 class='alert au-alert-success alert-dismissible fade show au-alert au-alert--70per'>" . $_SESSION['status'] . "</h5>";
                                    unset($_SESSION['status']);
                                }
                                ?>
                             <h1 class="title-4">Welcome back
                                 <span>Jane!</span>
                             </h1>

                             <hr class="line-seprate">
                         </div>
                     </div>
                 </div>
             </section>
             <!-- END WELCOME-->

             <!-- STATISTIC-->
             <section class="statistic statistic2">
                 <div class="container">
                     <div class="row">
                         <div class="col-md-6 col-lg-3">
                             <div class="statistic__item statistic__item--orange">
                                 <?php
                                    include('dbconn.php');
                                    $ref_table = "Users";
                                    $totalcount = $database->getReference($ref_table)->getSnapshot()->numChildren();

                                    ?>
                                 <h2 class="number">
                                     <?php echo $totalcount; ?>
                                 </h2>
                                 <span class="desc"><a href="list_users.php">Number of Registered Students</a></span>
                                 <div class="icon">
                                     <i class="zmdi zmdi-account-o"></i>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-6 col-lg-3">
                             <div class="statistic__item statistic__item--green">
                                
                                 <h2 class="number">8,156</h2>
                                 <span class="desc">Total Number of Campus Students</span>
                                 <div class="icon">
                                     <i class="zmdi zmdi-shopping-cart"></i>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-6 col-lg-3">

                             <div class="statistic__item statistic__item--blue">
                             <?php
                                    include('dbconn.php');
                                    $ref_table = "screening";
                                    $totalcount = $database->getReference($ref_table)->getSnapshot()->numChildren();

                                    ?>
                                 <h2 class="number"><?php echo $totalcount?></h2>
                                 <span class="desc"><a href="screening.php">Screening Details</Details></a></span>
                                 <div class="icon">
                                     <i class="zmdi zmdi-calendar-note"></i>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-6 col-lg-3">
                         <?php
                                    include('dbconn.php');
                                    $ref_table = "scanning";
                                    $totalcount = $database->getReference($ref_table)->getSnapshot()->numChildren();

                                    ?>
                             <div class="statistic__item statistic__item--red">
                             <h2 class="number"><?php echo $totalcount?></h2>
                             <span class="desc"><a href="confirm.php">Confirmed Students</Details></a></span>
                                 <div class="icon">
                                     <i class="zmdi zmdi-money"></i>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </section>
            

             <!-- DATA TABLE-->
             <section class="p-t-20">
                 <div class="container">
                     <div class="row">
                         <div class="col-md-12">
                             <h3 class="title-5 m-b-35">registered users data table</h3>

                             <!-- <div class="table-data__tool">
                                 <div class="table-data__tool-left">
                                     <div class="rs-select2--light rs-select2--md">
                                         <select class="js-select2" name="property">
                                             <option selected="selected">All Properties</option>
                                             <option value="">Option 1</option>
                                             <option value="">Option 2</option>
                                         </select>
                                         <div class="dropDownSelect2"></div>
                                     </div>
                                     <div class="rs-select2--light rs-select2--sm">
                                         <select class="js-select2" name="time">
                                             <option selected="selected">Today</option>
                                             <option value="">3 Days</option>
                                             <option value="">1 Week</option>
                                         </select>
                                         <div class="dropDownSelect2"></div>
                                     </div>
                                     <button class="au-btn-filter">
                                         <i class="zmdi zmdi-filter-list"></i>filters</button>
                                 </div>
                                 <div class="table-data__tool-right">
                                     <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                         <i class="zmdi zmdi-plus"></i>add item</button>
                                     <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                         <select class="js-select2" name="type">
                                             <option selected="selected">Export</option>
                                             <option value="">Option 1</option>
                                             <option value="">Option 2</option>
                                         </select>
                                         <div class="dropDownSelect2"></div>
                                     </div>
                                 </div>
                             </div> -->
                             <div class="table-responsive table-responsive-data2">
                                 <table class="table table-data2">
                                     <thead>
                                         <tr>
                                             
                                             <th>si.NO</th>
                                             <th>Email Address</th>
                                             <th>Full Name</th>
                                             <th>Phone Number</th>
                                             <th>Edit</th>
                                             <th>Enable/Disable</th>
                                             
                                             <th></th>
                                         </tr>
                                     </thead>
                                     <tbody>

                                         <?php
                                            include('dbconn.php');
                                            // $keychild = $_GET['id'];

                                            $ref_table = 'Users';

                                            $fetchdata = $database->getReference($ref_table)->getValue();

                                            if ($fetchdata > 0) {
                                                $i = 1;
                                                foreach ($fetchdata as $key => $row) {
                                            ?>
                                         <tr class="spacer"></tr>
                                         <tr class="tr-shadow">
                                             

                                             <td><?= $i++; ?></td>
                                             <td> <span class="block-email"><?= $row['email']; ?></span></td>
                                             <td><span class="block-email"><?= $row['fullname']; ?></span></td>
                                             <td class="desc"><?= $row['phonenumber']; ?></td>
                                             <td>

                                                 <a href="user_edit.php?id=<?= $key; ?>" data-toggle="tooltip"
                                                     data-placement="top" Class="item"><i
                                                         class="zmdi zmdi-edit"></i>Edit </a>
                                             </td>
                                             <td>

                                                 <a href="user_edit.php?id=<?= $key; ?>" data-toggle="tooltip"
                                                     data-placement="top" Class="item"><i
                                                         class="zmdi zmdi-edit"></i>Enable/Disable </a>
                                             </td>
                                            
                                         </tr>

                                         <?php


                                                }
                                            } else {
                                                ?>
                                         <tr>
                                             <td colspan="7">No record Found</td>
                                         </tr>
                                         <?php

                                            }


                                            ?>
                                     </tbody>

                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </section>
             <!-- END DATA TABLE-->

             <!-- COPYRIGHT-->
             <!-- <section class="p-t-60 p-b-20">
                 <div class="container">
                     <div class="row">
                         <div class="col-md-12">
                             <div class="copyright">
                                 <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a
                                         href="https://colorlib.com">Colorlib</a>.</p>
                             </div> -->
                         <!-- </div>
                     </div>
                 </div>
             </section>  -->
             <!-- END COPYRIGHT-->
         </div>

     </div>

     <!-- Jquery JS-->
     <script src="vendor/jquery-3.2.1.min.js"></script>
     <!-- Bootstrap JS-->
     <script src="vendor/bootstrap-4.1/popper.min.js"></script>
     <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
     <!-- Vendor JS       -->
     <script src="vendor/slick/slick.min.js">
     </script>
     <script src="vendor/wow/wow.min.js"></script>
     <script src="vendor/animsition/animsition.min.js"></script>
     <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
     </script>
     <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
     <script src="vendor/counter-up/jquery.counterup.min.js">
     </script>
     <script src="vendor/circle-progress/circle-progress.min.js"></script>
     <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
     <script src="vendor/chartjs/Chart.bundle.min.js"></script>
     <script src="vendor/select2/select2.min.js">
     </script>

     <!-- Main JS-->
     <script src="js/main.js"></script>

 </body>

 </html>
 <!-- end document-->