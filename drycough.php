<?php
                                        include('dbconn.php');


                                        $ref_table = 'screening';



                                        $fetchdata = $database->getReference($ref_table)->getValue();

                            
                                        //drycough 
                                        $userId='Yes';
                                         array_count_values(array_column($fetchdata, 'drycough'))[$userId];
                                        $No='No';
                                     array_count_values(array_column($fetchdata, 'drycough'))[$No];
                                       $drycoughtotal= array_count_values(array_column($fetchdata, 'drycough'))[$userId]+array_count_values(array_column($fetchdata, 'drycough'))[$No];
                                       $drycoughno=array_count_values(array_column($fetchdata, 'drycough'))[$No];
                                       $drycoughyes=array_count_values(array_column($fetchdata, 'drycough'))[$userId];
                                        $drycoughpercno=($drycoughno*100)/$drycoughtotal;
                                        $drycoughpercyes=($drycoughyes*100)/$drycoughtotal;

                                        ?>
                                        <?php
 
 $dataPoints = array( 
     array("label"=>"People with  drycough", "y"=>$drycoughpercyes),
     array("label"=>"People not with drycough", "y"=>$drycoughpercno)
    
 )
  
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

 <!-- Title Page-->
 <title>Dashboard 3</title>

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
     title: {
         text: "No of people who have been having drycough"
     },
     subtitles: [{
         text: "Pie Chart"
     }],
     data: [{
         type: "pie",
         yValueFormatString: "#,##0.00\"%\"",
         indexLabel: "{label} ({y})",
         dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
     }]
 });
 chart.render();
  
 }
 
  
 ?>
 </script>
 <?php 
 $dataPoints = array( 
     array("label"=>"People with drycough", "y"=>$drycoughpercyes),
     array("label"=>"People with no drycough", "y"=>$drycoughpercno)
    
 )
 ?>
 <script>
 window.onload = function() {
  
  
 var chart = new CanvasJS.Chart("chartContainer", {
     animationEnabled: true,
     title: {
         text: "No of people who have been Suffering from  drycough"
     },
     subtitles: [{
         text: "Pie Chart"
     }],
     data: [{
         type: "pie",
         yValueFormatString: "#,##0.00\"%\"",
         indexLabel: "{label} ({y})",
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
                         <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                     </a>
                 </div>
                 <div class="header__navbar">
                     <ul class="list-unstyled">
                         <li class="has-sub">
                             <a href="#">
                                 <i class="fas fa-tachometer-alt"></i>Dashboard
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
                                 
                             </ul>
                         </li>
                     </ul>
                 </div>
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
                                 <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                             </div>
                             <div class="content">
                                 <a class="js-acc-btn" href="#">john doe</a>
                             </div>
                             <div class="account-dropdown js-dropdown">
                                 <div class="info clearfix">
                                     <div class="image">
                                         <a href="#">
                                             <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                         </a>
                                     </div>
                                     <div class="content">
                                         <h5 class="name">
                                             <a href="#">john doe</a>
                                         </h5>
                                         <span class="email">johndoe@example.com</span>
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

 <div id="chartContainer" style="height: 370px; width: %;"></div>
 <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
 </body>
 </html>   
