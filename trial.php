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
                                             <th>Enable/Disable</th>
                                             <th>Edit</th>
                                             <th>Delete</th>
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
                                             <td>

                                                 <a href="EditUsers.php?id=<?= $key; ?>" data-toggle="tooltip"
                                                     data-placement="top" Class="item"><i
                                                         class="zmdi zmdi-edit"></i>Edit </a>
                                             </td>
                                             <td>

                                                 <a href="EditUsers.php?id=<?= $key; ?>" data-toggle="tooltip"
                                                     data-placement="top" Class="item"><i
                                                         class="zmdi zmdi-edit"></i>Enable/Disable </a>
                                             </td>
                                             <td>

                                                 <a href="DeleteUsers.php" data-toggle="tooltip" data-placement="top"
                                                     Class="item"><i class="zmdi zmdi-delete"></i></i>Delete </a>
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