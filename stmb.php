<!DOCTYPE html>
<html lang="en">

<head>
    <title>STMB REPORTS</title>

</head>

<script src ="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<body>
<div class="table-responsive table-responsive-data2">
                                 <table class="table table-data2">
                                     <thead>
                                         <tr>
                                             <th>
                                                 <label class="au-checkbox">
                                                     <input type="checkbox">
                                                     <span class="au-checkmark"></span>
                                                 </label>
                                             </th>
                                             <th>si.NO</th>
                                             <th>Fullname</th>
                                             <th>Email Address</th>
                                             <th>Phone Number</th>
                                             <th>Class Time</th>
                                             <th>Date</th>
                                             <th>Temperature</th>
                                             <th></th>
                                         </tr>
                                     </thead>
                                     <tbody id="table_body1">

                                         <!-- php
                                            include('dbconn.php');
                                            // $keychild = $_GET['id'];
                                            
                                          
                                            $fetchdata = $database->getReference("scanning")->orderByChild("building")->equalTo("STMB")->getValue();

                                            // $ref_table = 'scanning';
                                          


                                        

                                            // $fetchdata = $database->getReference($ref_table)->orderByChild("building")
                                            // ->equalTo("STMB")->getSnapshot();

                                            if ($fetchdata > 0) {
                                                $i = 1;
                                                foreach ($fetchdata as $key => $row) {
                                            ?>
                                         <tr class="spacer"></tr>
                                         <tr class="tr-shadow">
                                             <td>
                                                 <label class="au-checkbox">
                                                     <input type="checkbox">
                                                     <span class="au-checkmark"></span>
                                                 </label>
                                             </td>

                                             <td>= $i++; ?></td>
                                             <td> <span class="block-email"><= $row['name']; ?></span></td>
                                             <td><span class="block-email"><= $row['email']; ?></span></td>
                                             <td class="desc"><= $row['mobile']; ?></td>
                                             <td> <span class="block-email"><= $row['classtime']; ?></span></td>
                                             <td><span class="block-email"><= $row['date']; ?></span></td>
                                             <td class="desc"><= $row['temp']; ?></td>
                                             
                                         </tr>

                                         <php


                                                }
                                            } else {
                                                ?>
                                         <tr>
                                             <td colspan="7">No record Found</td>
                                         </tr>
                                         <php

                                            }


                                            ?> -->
                                     </tbody>

                                 </table>
                             </div>

             <sript src="form1.js" > </script>
</body>
<html>
           