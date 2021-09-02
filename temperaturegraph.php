<?php
include('dbconn.php');
 $ref_table = 'scanning';
 $fetchdata = $database->getReference($ref_table)->getValue();
 $temp33='33.0';
 $tttemp33= array_count_values(array_column($fetchdata, 'temp'))[$temp33];
 $temp33_5='33.5';
$tttemp33_5 =array_count_values(array_column($fetchdata, 'temp'))[$temp33_5];
$temp34='34.0';
$tttemp34= array_count_values(array_column($fetchdata, 'temp'))[$temp34];
$temp34_5='34.5';
$tttemp34_5=array_count_values(array_column($fetchdata, 'temp'))[$temp34_5];
$temp35='35.0';
$tttemp35=array_count_values(array_column($fetchdata, 'temp'))[$temp35];
$temp35_6='35.6';
$ttemp35_6 =array_count_values(array_column($fetchdata, 'temp'))[$temp35_6];
$temp36_4='36.4';
$ttemp36_4= array_count_values(array_column($fetchdata, 'temp'))[$temp36_4];
$temp36_9='36.9';
$ttemp36_9=array_count_values(array_column($fetchdata, 'temp'))[$temp36_9];
$temp37='37.0';
$ttemp37= array_count_values(array_column($fetchdata, 'temp'))[$temp37];
$temp37_4='37.4';
$tttemp37_4=array_count_values(array_column($fetchdata, 'temp'))[$temp37_4];
$total=$tttemp33*33.0+$tttemp33_5*33.5+$tttemp34*34+$tttemp34_5*34.5+$tttemp35*35.0+$ttemp35_6*35.6+$ttemp36_4*36.4+$ttemp36_9*36.9+$ttemp37*37+$tttemp37_4*37.4;
//echo $total;
$totalcount=$tttemp33+$tttemp33_5+$tttemp34+$tttemp34_5+$tttemp35+$ttemp35_6+$ttemp36_4+$ttemp36_9+$ttemp37+$tttemp37_4;
$averagetemp=$total/$totalcount;
//echo $totalcount;
//echo $averagetemp;

 ?>
                                       
                                       <?php
 
 $dataPoints = array( 
     array("y" => $tttemp33, "label" => "33.0" ),
     array("y" => $tttemp33_5, "label" => "33.5" ),
     array("y" => $tttemp34, "label" => "34.0" ),
     array("y" => $tttemp34_5, "label" => "34.5" ),
     array("y" => $tttemp35, "label" => "35.0" ),
     array("y" => $ttemp35_6, "label" => "35.6" ),
     array("y" => $ttemp36_4, "label" => "36.4" ),
     array("y" => $ttemp36_9, "label" => "36.9" ),
     array("y" => $ttemp37, "label" => "37.0" ),
     array("y" => $tttemp37_4, "label" => "37.4" )
 );
  
 ?>
 <!DOCTYPE HTML>
 <html>
 <head>
      <!-- Required meta tags-->
      <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="au theme template">
     <meta name="author" content="Hau Nguyen">
     <meta name="keywords" content="au theme template">
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
 <script>
 window.onload = function() {
  
 var chart = new CanvasJS.Chart("chartContainer", {
     animationEnabled: true,
     theme: "light2",
     title:{
         text: "Temperature of the students "
     },
     axisY: {
         title: "No. of students"
     },
     axisx: {
         title: "Temperature in Degrees Celsius"
     },
     data: [{
         type: "column",
         yValueFormatString: "#,##0.## degrees Celcsius",
         dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
     }]
 });
 chart.render();
  
 }
 </script>
 </head>
 <body>

 <header class="header-desktop3 d-none d-lg-block">
         <div class="section__content section__content--p35">
             <div class="header3-wrap">
                 <div class="header__logo">
                     <a href="#">
                         <img src="images/icon/logo-mini.png" alt="CoolAdmin" />
                     </a>
                 </div>
                 <div class="header__navbar">
                     <ul class="list-unstyled">
                         <li class="has-sub">
                             <a href="dashboard.php">
                                 <i class="fas fa-tachometer-alt"></i>HOME
                                 <span class="bot-line"></span>
                             </a>
                             
                         </li>
                         
                         <li class="has-sub">
                             <a href="#">
                                 <i class="fas fa-copy"></i>
                                 <span class="bot-line"></span>Actions</a>
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
                                 <li>
                                     <a href="screening.php">Screening</a>
                                 </li>
                             </ul>
                         </li>
                         <li class="has-sub">
                             <a href="#">
                                 <i class="fas fa-desktop"></i>
                                 <span class="bot-line"></span>Graphs</a>
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
                                 <li>
                                     <a href="covidstatus.php">status Graph</a>
                                 </li>
                                 
                             </ul>
                         </li>
                     </ul>
                 </div>
                 <div class="header__tool">
                     
                    
                                
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

                                 <section class="statistic statistic2">
                 <div class="container">
                     <div class="row">
                         <div class="col-md-6 col-lg-3">
                             <div class="statistic__item statistic__item--orange">
                                
                                 <h2 class="number">
                                     <?php echo $averagetemp; ?>
                                 </h2>
                                 <span class="desc"><a href="temperaturegraph.php">Average Temperature</a></span>
                                 <div class="icon">
                                     <i class="zmdi zmdi-account-o"></i>
                                 </div>
                             </div>
                         </div>
                                 </div>
                                 </div>
                                 </section>
 <div id="chartContainer" style="height: 370px; width: 100%;"></div>

 <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
 </body>
 </html>   