<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css?ver=0.6" rel="stylesheet">
        <link href="plugins/trumbowyg/trumbowyg.min.css" rel="stylesheet" type="text/css"/>
        <style>
            .msg_container {
                position: fixed;
                width: 470px;
                right: 0;
                bottom: 0;
                background: #f7efef;
                padding: 15px;
                border-radius: 2px;   
                color: #000;
                box-shadow: -2px -5px 20px 0px #00000040;


            }

            .msg_container h4{
                margin-top: 0;

            }
            
            .trumbowyg-editor, .trumbowyg-textarea {
                min-height: 200px;
            }

        </style>
    </head>
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
                                             <th>-</th>
                                             <th>-</th>
                                             <th>-</th>
                                             <th>-</th>
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
                                             <td>
                                                 <label class="au-checkbox">
                                                     <input type="checkbox">
                                                     <span class="au-checkmark"></span>
                                                 </label>
                                             </td>

                                             <td><?= $i++; ?></td>
                                             <td> <span class="block-email"><?= $row['email']; ?></span></td>
                                             <td><span class="block-email"><?= $row['fullname']; ?></span></td>
                                             <td class="desc"><?= $row['phonenumber']; ?></td>
                                            
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
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="plugins/trumbowyg/trumbowyg.min.js" type="text/javascript"></script>
        <script src="main.js" type="text/javascript"></script>
      

        <form action="" method="post" class="msg_container">
            <h4>Compose Email</h4>
            <p id="multi-responce"></p>
            <div class="form-group">
                <textarea class="form-control" id="emails" name="emails" placeholder="Email list" style="height: 120px;"></textarea>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
            </div>
            <div class="form-group">
                <textarea style="height: 220px;" id="message" name="message" class="form-control" placeholder="Your Message" rows="5" required></textarea>
            </div>
            <button type="button" onclick="multi_email();" class="btn btn-primary btn-lg col-lg-12" id="send">Send Now </button>

        </form>
         
    </body>
</html>
