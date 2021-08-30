<?php

use Lcobucci\JWT\Signer\Rsa;

include('authentication.php');

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
 <style>
#myInput,#myInputtime {
    box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

</style>

</head>

<body class="animsition">
 <div class="page-wrapper">
     <!-- HEADER DESKTOP-->
     
     <!-- END HEADER DESKTOP-->

     <!-- HEADER MOBILE-->
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
                                     <a href="contactgraph.php">Graph-Contact</a>
                                 </li>
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


         <section class="p-t-20">
             <div class="container">
                 <div class="row">
                     <div class="col-md-12">
                         <h3 class="title-5 m-b-35">data table</h3>
                         <div class="table-data__tool">
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
                         </div>
                         <div class="table-responsive table-responsive-data2">
                             <?php
                                if (isset($_SESSION['status'])) {
                                    echo "<h5 class='sufee-alert alert with-close alert-secondary alert-dismissible fade show'>" . $_SESSION['status'] . "</h5>";
                                    unset($_SESSION['status']);
                                }
                                ?>
                                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for BUILDING.." title="Type in a name">
                                <input type="text" id="myInputtime" onkeyup="myFunction()" placeholder="Search for time.." title="Type in a name">
                             <table id="myTable" class="table table-data2">
                                 <thead>
                                     <tr>
                                         <th></th>
                                
                                         <th>Name</th>
                                         <th>Email</th>
                                         <th>Mobile</th>
                                         <th>Temp</th>
                                         <th>Covid Status</th>
                                         <th>Building</th>
                                         <th>Room</th>
                                         <th>ClassDate</th>
                                         <th>ClassTime</th>
                                         <th>Time in</th>
                                         <th>Date in</th>
                                         
                                        
                                     </tr>
                                 </thead>
                                 <tbody>



                                     <?php
                                        include('dbconn.php');


                                        $ref_table = 'scanning';



                                        $fetchdata = $database->getReference($ref_table)->getValue();
                                       

                                        

                                        if ($fetchdata > 0) {
                                            $i = 1;
                                            
                                            foreach ($fetchdata as $key => $row) {
$temp=$row['temp'];
if($temp>=37.0){
    $tdStyle='background-color:red;';
}else{
    $color = "style='background-color : green';"; 
}





                                        ?>
                                     <tr class="spacer"></tr>
                                     <tr class="tr-shadow">
                                         <td>
                                             <?= $i++; ?>
                                         </td>

                                        
                                         </td>

                                         <td><span class="block-email"><?= $row['name']; ?></span></td>

                                         </td>
                                         <td>

                                             <span class="block-email"><?= $row['email']; $tdStyle?></span>
                                         </td>
                                         <td>
                                             <span class="block-email"><?= $row['mobile']; ?></span>
                                         </td>
                                         <td>
                                             <span class="block-email"><?= $row['temp']; ?></span>
                                         </td>
                                         <td>
                                             <span class="block-email"><?= $row['status']; ?></span>
                                         </td>
                                         <td>
                                             <span class="block-email"><?= $row['building']; ?></span>
                                         </td>
                                         <td>
                                             <span class="block-email"><?= $row['room']; ?></span>
                                         </td>
                                         <td>
                                             <span class="block-email"><?= $row['classDate']; ?></span>
                                         </td>
                                         <td>
                                             <span class="block-email"><?= $row['classtime']; ?></span>
                                         </td>
                                         <td>
                                             <span class="block-email"><?= $row['time']; ?></span>
                                         </td>
                                         <td>
                                             <span class="block-email"><?= $row['date']; ?></span>
                                         </td>











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

<?php

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
         <section class="p-t-60 p-b-20">
             <div class="container">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="copyright">
                             <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a
                                     href="https://colorlib.com">Colorlib</a>.</p>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
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
 <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[6];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInputtime");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[9];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</body>

</html>