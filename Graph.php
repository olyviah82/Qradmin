<?php
                                        include('dbconn.php');


                                        $ref_table = 'screening';



                                        $fetchdata = $database->getReference($ref_table)->getValue();

                                        $userId='Yes';
                                         array_count_values(array_column($fetchdata, 'contact'))[$userId];
                                        $No='No';
                                     array_count_values(array_column($fetchdata, 'contact'))[$No];
                                       $conatcttotal= array_count_values(array_column($fetchdata, 'contact'))[$userId]+array_count_values(array_column($fetchdata, 'contact'))[$No];
                                       $contactno=array_count_values(array_column($fetchdata, 'contact'))[$No];
                                       $conatctyes=array_count_values(array_column($fetchdata, 'contact'))[$userId];
                                        $conatctpercno=($contactno*100)/$conatcttotal;
                                        $conatctpercyes=($conatctyes*100)/$conatcttotal;

                                        //aches 
                                        $userId='Yes';
                                         array_count_values(array_column($fetchdata, 'aches'))[$userId];
                                        $No='No';
                                     array_count_values(array_column($fetchdata, 'aches'))[$No];
                                       $achestotal= array_count_values(array_column($fetchdata, 'aches'))[$userId]+array_count_values(array_column($fetchdata, 'aches'))[$No];
                                       $achesno=array_count_values(array_column($fetchdata, 'aches'))[$No];
                                       $achesyes=array_count_values(array_column($fetchdata, 'aches'))[$userId];
                                        $achespercno=($achesno*100)/$achestotal;
                                        $achespercyes=($achesyes*100)/$achestotal;

                                        ?>
                                        <?php
 
 $dataPoints = array( 
     array("label"=>"People with  aches", "y"=>$achespercyes),
     array("label"=>"People not with aches", "y"=>$achespercno)
    
 )
  
 ?>
 <!DOCTYPE HTML>
 <html>
 <head>
 <script>
 window.onload = function() {
  
  
 var chart = new CanvasJS.Chart("chartContainer", {
     animationEnabled: true,
     title: {
         text: "No of people who have been having bodily aches"
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
     array("label"=>"People in Contact", "y"=>$conatctpercyes),
     array("label"=>"People not in Contact", "y"=>$conatctpercno)
    
 )
 ?>
 <script>
 window.onload = function() {
  
  
 var chart = new CanvasJS.Chart("chartContainer", {
     animationEnabled: true,
     title: {
         text: "No of people who have been in contact with someone with Covid-19"
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
 <div id="chartContainer" style="height: 370px; width: %;"></div>
 <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
 </body>
 </html>   
