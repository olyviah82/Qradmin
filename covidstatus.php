<?php
                                        include('dbconn.php');


                                        $ref_table = 'scanning';



                                        $fetchdata = $database->getReference($ref_table)->getValue();

                            
                                        //status 
                                        $userId='Positive';
                                         array_count_values(array_column($fetchdata, 'status'))[$userId];
                                        $Negative='Negative';
                                     array_count_values(array_column($fetchdata, 'status'))[$Negative];
                                       $statustotal= array_count_values(array_column($fetchdata, 'status'))[$userId]+array_count_values(array_column($fetchdata, 'status'))[$Negative];
                                       $statusno=array_count_values(array_column($fetchdata, 'status'))[$Negative];
                                       $statusPositive=array_count_values(array_column($fetchdata, 'status'))[$userId];
                                        $statuspercno=($statusno*100)/$statustotal;
                                        $statuspercPositive=($statusPositive*100)/$statustotal;
                                        $totalstatus=$statusPositive;
                                        

                                        ?>
                                        <?php
 
 $dataPoints = array( 
     array("label"=>"People with  status", "y"=>$statuspercPositive),
     array("label"=>"People not with status", "y"=>$statuspercno)
    
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
 <script>
 window.onload = function() {
  
  
 var chart = new CanvasJS.Chart("chartContainer", {
     animationEnabled: true,
     title: {
         text: "Statistics of status Symptom"
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
     array("label"=>"People who tested positive with covid ", "y"=>$statuspercPositive),
     array("label"=>"People who texted negative for covid status", "y"=>$statuspercno)
    
 )
 ?>
 <script>
 window.onload = function() {
  
  
 var chart = new CanvasJS.Chart("chartContainer", {
     animationEnabled: true,
     title: {
         text: "Statistics of status Symptom"
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
                                     <a href="covidstatus.php">status Graph</a>
                                 </li>
                                 <li>
                                     <a href="temperaturegraph.php">Temperature Graph</a>
                                 </li>
                                 <li>
                                     <a href="temperaturegraph.php">Temperature Graph</a>
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
                             <div class="statistic__item statistic__item--red">
                                
                                 <h2 class="number">
                                     <?php echo $statusPositive; ?>
                                 </h2>
                                 <span class="desc"><a href="covidstatus.php">People with Covid</a></span>
                                 <div class="icon">
                                     <i class="zmdi zmdi-account-o"></i>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-6 col-lg-3">
                             <div class="statistic__item statistic__item--green">
                                
                                 <h2 class="number">
                                     <?php echo $statusno; ?>
                                 </h2>
                                 <span class="desc"><a href="covidstatus.php">People without Covid</a></span>
                                 <div class="icon">
                                     <i class="zmdi zmdi-account-o"></i>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-6 col-lg-3">
                             <div class="statistic__item statistic__item--orange">
                                
                                 <h2 class="number">
                                     <?php echo $statusno+$statusPositive; ?>
                                 </h2>
                                 <span class="desc"><a href="covidstatus.php">Total Statics</a></span>
                                 <div class="icon">
                                     <i class="zmdi zmdi-account-o"></i>
                                 </div>
                             </div>
                         </div>

     
     </div>
     </div>
     </section>
     <div class="table-responsive table-responsive-data2">
    <?php
                                if (isset($_SESSION['status'])) {
                                    echo "<h5 class='sufee-alert alert with-close alert-secondary alert-dismissible fade show'>" . $_SESSION['status'] . "</h5>";
                                    unset($_SESSION['status']);
                                }
                                ?>
                                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Negative/Positive.." title="Type in a name">
                                
                             <table id="myTable" class="table table-data2">
                                     <thead>
                                         <tr>
                                             <th>SELECT</th>
                                             
                                             <th></th>
                                             <th>Fullname</th>
                                             <th>Email Address</th>
                                             <th>Phone Number</th>
                                             <th>Temp</th>
                                         <th>Covid Status</th>
                                         
                                         <th>Time in</th>
                                         <th>Date in</th>
                                             
                                         </tr>
                                     </thead>
                                     <tbody id="alluser">
                                     <?php
                                            include('dbconn.php');
                                            include('vendor/autoload.php');
                                            // $keychild = $_GET['id'];

                                            $ref_table = 'scanning';

                                            $fetchdata = $database->getReference($ref_table)->getValue();

                                            if ($fetchdata > 0) {
                                                $i = 1;
                                                foreach ($fetchdata as $key => $row) {
                                            ?>
                       
                                        
                                         <tr class="spacer"></tr>
                                         <tr class="tr-shadow">
                                             <td>
                                                 <label class="au-checkbox">
                                                     <input type="checkbox" value="<?php echo $row['email'];?>" onclick="updateTextArea();">
                                                     <span class="au-checkmark"></span>
                                                 </label>
                                             </td>

                                             <td><?= $i++; ?></td>
                                             <td> <span class="block-email"><?= $row['name']; ?></span></td>
                                             <td><span class="block-email"><?= $row['email']; ?></span></td>
                                             <td class="desc"><?= $row['mobile']; ?></td>
                                             <td>
                                             <span class="block-email"><?= $row['temp']; ?></span>
                                         </td>
                                         <td>
                                             <span class="block-email"><?= $row['status']; ?></span>
                                         </td>
                                        
                                         <td>
                                             <span class="block-email"><?= $row['time']; ?></span>
                                         </td>
                                         <td>
                                             <span class="block-email"><?= $row['date']; ?></span>
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

                         
 <div id="chartContainer" style="height: 370px; width: %;"></div>
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
 <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
 </body>
 </html>   
