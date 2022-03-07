<?php
if (isset($_SESSION['offices']) && $_SESSION['offices'] != 'Admin') {
    header('location:boardSec.php');
    die();
}
// ito yung nasa labas pa yung cs.php\
include 'header1.php';
include '../connection/dbh.inc.php';

// include '../connection/dbh.inc.php';
// include '../header.php';

?>



<div class="modal fade" id="updatemodal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adminModal">Update Record</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="tracknewBoardsec.php" method="POST">
                <div class="modal-body">
                    <!--Modal panel Insert to Record Office -->
                    <!--this is for the tracking number -->


                    <div class="form-group row">
                        <label for="inputTracking" class="col-sm-2 col-form-label">Tracking</label>
                        <div class="col-sm-8">
                            <input type="input" name="user_trackingid" id="user_trackingid" class="form-control" id="inputTracking" placeholder="Tracking Number" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" name="user_title" id="user_title" class="form-control" id="Title" placeholder="Title" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputInputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="user_name" id="user_name" class="form-control" id="Name" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputInputName" class="col-sm-2 col-form-label">Remarks</label>
                        <div class="col-sm-10">
                            <!-- <input type="text" name="user_name" class="form-control" id="Name" placeholder="Name" required> -->
                            <textarea class="form-control" name="track_remarks" id="remarks" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="office" class="col-sm-2 col-form-label">Action</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="track_actions" id="track_actions">
                                <option value="">Select Action</option>
                                <option value="Received">Received</option>
                                <option value="Forwarded">Forwarded</option>
                                <option value="Endorsed">Endorsed</option>
                                <option value="Returned">Returned</option>
                                <option value="Recommended for Disapproval">Recomend For Dis-Approval</option>
                            </select>
                        </div>
                    </div>
                    <!-- --------------------------------------------------------------------------------------------------- -->
                    <div class="form-group row">
                        <label for="offce class=" class="col-sm-2 col-form-label">Office</label>
                        <div class="col-sm-10">
                            <select type="text" class="form-control" name="track_offices" id="track_offices">
                                <option value="">Select office</option>
                                <option value="Accountant's office">Accountant's office</option>
                                <option value="Accounting">Accounting</option>
                                <option value="Accounting - Bookkeeper (101)">
                                    Accounting - Bookkeeper (101)
                                </option>
                                <option value="Accounting - Bookkeeper (164)">
                                    Accounting - Bookkeeper (164)
                                </option>
                                <option value="Accounting - Bookkeeper (164-Bookstore)">
                                    Accounting - Bookkeeper (164-Bookstore)
                                </option>
                                <option value="Accounting - Bookkeeper (164-Canteen)">
                                    Accounting - Bookkeeper (164-Canteen)
                                </option>
                                <option value="Accounting - Bookkeeper (164-CCRD)">
                                    Accounting - Bookkeeper (164-CCRD)
                                </option>
                                <option value="Accounting - Bookkeeper (164-Hostel)">
                                    Accounting - Bookkeeper (164-Hostel)
                                </option>
                                <option value="Accounting - Bookkeeper (401)">
                                    Accounting - Bookkeeper (401)
                                </option>
                                <option value="Alumni Office">Alumni Office</option>
                                <option value="BAC">BAC</option>
                                <option value="BIMP-EAGA">BIMP-EAGA</option>
                                <option value="Budget">Budget</option>
                                <option value="CAH">CAH</option>
                                <option value="CAO">CAO</option>
                                <option value="Cashier">Cashier</option>
                                <option value="CBA">CBA</option>
                                <option value="CCJE">CCJE</option>
                                <option value="CCRD">CCRD-Main</option>
                                <option value="CCRD-North">CCRD-North</option>
                                <option value="CCRD-South">CCRD-South</option>
                                <option value="CEAT">CEAT</option>
                                <option value="CFO">CFO</option>
                                <option value="CHMT">CHMT</option>
                                <option value="Clinic">Clinic</option>
                                <option value="CNHS">CNHS</option>
                                <option value="COA">COA</option>
                                <option value="Construction and Maintenance Services">
                                    Construction and Maintenance Services
                                </option>
                                <option value="CS">CS</option>
                                <option value="CSPG">CSPG</option>
                                <option value="CTE">CTE</option>
                                <option value="Curriculum Instructional Materials Development Office">
                                    Curriculum Instructional Materials Development Office
                                </option>
                                <option value="Dep-Ed K to 12 G9">Dep-Ed K to 12 G9</option>
                                <option value="Electrical & Audio-visual Section">
                                    Electrical & Audio-visual Section
                                </option>
                                <option value="ETEEAP">ETEEAP</option>
                                <option value="Extension Office">Extension Office</option>
                                <option value="F&S Development Director">
                                    F&S Development Director
                                </option>
                                <option value="Gender and Development">
                                    Gender and Development
                                </option>
                                <option value="Graduate School">Graduate School</option>
                                <option value="HRMO">HRMO</option>
                                <option value="ICT">ICT</option>
                                <option value="ICU">ICU</option>
                                <option value="IGP">IGP</option>
                                <option value="Institutional Development">
                                    Institutional Development
                                </option>
                                <option value="Internal Audit Service Office">
                                    Internal Audit Service Office
                                </option>
                                <option value="Janitorial Services">Janitorial Services</option>
                                <option value="Legal Affairs">Legal Affairs</option>
                                <option value="LES">LES</option>
                                <option value="LHS">LHS</option>
                                <option value="Library">Library</option>
                                <option value="Marine Science Laboratory">
                                    Marine Science Laboratory
                                </option>
                                <option value="Medical Laboratory">Medical Laboratory</option>
                                <option value="Medical School">Medical School</option>
                                <option value="Motorpool">Motorpool</option>
                                <option value="NROTCU">NROTCU</option>
                                <option value="NSTP Office">NSTP Office</option>
                                <option value="Office of the President">
                                    Office of the President
                                </option>
                                <option value="Office of the Student Affairs">
                                    Office of the Student Affairs
                                </option>
                                <option value="Office of Transnational Education">
                                    Office of Transnational Education
                                </option>
                                <option value="PAC">PAC</option>
                                <option value="Palawan Studies Center">
                                    Palawan Studies Center
                                </option>
                                <option value="Panrehiyong Sentro ng Wika ng Filipino">
                                    Panrehiyong Sentro ng Wika ng Filipino
                                </option>
                                <option value="PIONEER">PIONEER</option>
                                <option value="PITBI">PITBI</option>
                                <option value="Planning Office">Planning Office</option>
                                <option value="PMO">PMO</option>
                                <option value="PRIMO">PRIMO</option>
                                <option value="Property & Warehouse Unit">
                                    Property & Warehouse Unit
                                </option>
                                <option value="PSU Band">PSU Band</option>
                                <option value="PSU Bookstore">PSU Bookstore</option>
                                <option value="PSU Canteen">PSU Canteen</option>
                                <option value="PSU CUYO">PSU CUYO</option>
                                <option value="PSU Faculty Union">PSU Faculty Union</option>
                                <option value="PSU Hostel">PSU Hostel</option>
                                <option value="PSU I-Hub">PSU I-Hub</option>
                                <option value="PSU LSHS">PSU LSHS</option>
                                <option value="PSU Multi Purpose Cooperative">
                                    PSU Multi Purpose Cooperative
                                </option>
                                <option value="PSU Museum">PSU Museum</option>
                                <option value="PSU Sining Palawan Dance Troupe">
                                    PSU Sining Palawan Dance Troupe
                                </option>
                                <option value="PSU-Palawan Studies Cente">
                                    PSU-Palawan Studies Center
                                </option>
                                <option value="Quality Assurance and Services">
                                    Quality Assurance and Services
                                </option>
                                <option value="Records">Records</option>
                                <option value="Registrar's Office">Registrar's Office</option>
                                <option value="Research">Research</option>
                                <option value="ROTC Office">ROTC Office</option>
                                <option value="SCAO">SCAO</option>
                                <option value="School of Graduate Studies & Research">
                                    School of Graduate Studies & Research
                                </option>
                                <option value="School of Law">School of Law</option>
                                <option value="Security Office">Security Office</option>
                                <option value="SEMDO">SEMDO</option>
                                <option value="SEPO">SEPO</option>
                                <option value="SGO">SGO</option>
                                <option value="Sports Division">Sports Division</option>
                                <option value="Stock Room">Stock Room</option>
                                <option value="Supply">Supply</option>
                                <option value="SWKO">SWKO</option>
                                <option value="Transnational Education">
                                    Transnational Education
                                </option>
                                <option value="UDRRMT">UDRRMT</option>
                                <option value="University Board Secretary Office">
                                    University Board Secretary Office
                                </option>
                                <option value="University Intellectual Property Office">
                                    University Intellectual Property Office
                                </option>
                                <option value="University Quality Assurance Center (UQAC)">
                                    University Quality Assurance Center (UQAC)
                                </option>
                                <option value="UREO">UREO</option>
                                <option value="Utility Services">Utility Services</option>
                                <option value="VPAA">VPAA</option>
                                <option value="VPEC">VPEC</option>
                                <option value="VPFA">VPFA</option>
                                <option value="VPRE">VPRE</option>
                            </select>
                        </div>
                    </div>
                    <!-- hidden button to update the date -->
                    <input type="hidden" name="track_dates" id="track_dates">
                </div>
                <div class="modal-footer">
                    <button type="button" id="tooltip" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Close" data-dismiss="modal"><i class="material-icons">close</i></button>

                    <!--this is the submit code line -->
                    <button type="submit" id="updaterecord" name="updaterecord" class="btn btn-primary">Update Data</button>
                </div>
                <!--end of form modal for insert-->
            </form>

        </div>
    </div>
</div>
<!-- SECTION FOR MODAL ADD NEW TRACKING NUMBER -->
< <section class="container-fluid home-section p-0">
    <div class="container-fluid-md">
        <div class="row justify-content-center">
            <div class="col-12 bg light rounded my-2 py-2">
                <div class="container-fluid">
                    <h5 class="text-center text-dark pt-2"> Welcome to <span class="text-success"> University Board Secretary Office </span> <br> Tracking Document</h5>

                    <div class=" card container-fluid">
                        <div class="card-body">

                            <div class=" container-fluid">
                                <table class="tables table-hover table-striped table-border" style="width: 70%;">
                                    <thead class="bg-dark text-light">
                                        <tr>
                                            <!-- here was the new tracking general tracking head, that can watch over by the different organization -->

                                            <th>TrackingID</th>
                                            <th>Particulars</th>
                                            <th>Name</th>
                                            <th>Remarks</th>
                                            <th>Actions</th>
                                            <th>Date</th>
                                            <th>Destination</th>
                                            <th>Channel 1</th>
                                            <th>Channel 2</th>
                                            <th>Channel 3</th>
                                            <th>Channel 4</th>
                                            <th>Channel 5</th>
                                            <th>Update</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // watch out sa query table, need mo palitan yung table ng user para doon sa tracking inforamtion

                                        $query = "SELECT users.id, track_communication.track_dates,track_communication.user_trackingid, users.user_name,track_communication.track_remarks, users.user_title,users.user_officestarget,track_communication.track_actions, track_communication.track_offices, users.channel_1, 
                                                users.channel_2,users.channel_3,users.channel_4,users.channel_5 FROM users
                                                INNER JOIN track_communication ON  users.user_trackingid = track_communication.user_trackingid WHERE channel_1 = 'University Board Secretary Office' OR channel_2 = 'University Board Secretary Office' OR channel_3 = 'University Board Secretary Office' OR channel_4 = 'University Board Secretary Office' OR channel_5 = 'University Board Secretary Office' OR user_officestarget = 'University Board Secretary Office'";
                                        $results = mysqli_query($conn, $query);
                                        while ($rows = mysqli_fetch_assoc($results)) {
                                            $timestamp = $rows['track_dates'];
                                        ?>

                                            <?php
                                            $action = $rows['track_actions'];
                                            $office = $rows['track_offices'];
                                            $destination = $rows['user_officestarget']
                                            // print_r($rows);
                                            // print_r($rows);
                                            // echo '<br>' . $action;
                                            // echo '<br>' . $office;
                                            ?>


                                            <?php
                                            $channel1 = $rows['channel_1'];
                                            $channel2 = $rows['channel_2'];
                                            $channel3 = $rows['channel_3'];
                                            $channel4 = $rows['channel_4'];
                                            $channel5 = $rows['channel_5'];
                                            ?>

                                            <tr>

                                                <td><?php echo $rows['user_trackingid']  ?></td>
                                                <td><?php echo $rows['user_title'] ?></td>
                                                <td><?php echo $rows['user_name'] ?></td>
                                                <td><?php echo $rows['track_remarks'] ?></td>
                                                <?php if (($channel1 == $office) && ($action == 'Received')) { ?>

                                                    <td><?php echo $rows['track_actions'] . ' at ' . $rows['track_offices'] ?></td>
                                                <?php } else if (($channel1 == $office) && ($action == 'Forwarded')) { ?>
                                                    <td><?php echo $rows['track_actions'] . ' to ' . $rows['track_offices'] ?></td>
                                                <?php     } else if (($channel1 == $office) && ($action == 'Returned')) { ?>
                                                    <td><?php echo $rows['track_actions'] . ' to ' . $rows['track_offices'] ?></td>
                                                <?php     } else if (($channel1 == $office) && ($action == 'Endorsed')) { ?>
                                                    <td><?php echo $rows['track_actions'] . ' to ' . $rows['track_offices'] ?></td>
                                                <?php     } else if (($channel2 == $office) && ($action == 'Received')) { ?>
                                                    <td><?php echo $rows['track_actions'] . ' at ' . $rows['track_offices'] ?></td>
                                                <?php     } else if (($channel2 == $office) && ($action == 'Forwarded')) { ?>
                                                    <td><?php echo $rows['track_actions'] . ' to ' . $rows['track_offices'] ?></td>
                                                <?php     } else if (($channel2 == $office) && ($action == 'Returned')) { ?>
                                                    <td><?php echo $rows['track_actions'] . ' to ' . $rows['track_offices'] ?></td>
                                                <?php     } else if (($channel2 == $office) && ($action == 'Endorsed')) { ?>
                                                    <td><?php echo $rows['track_actions'] . ' to ' . $rows['track_offices'] ?></td>
                                                <?php     } else if (($channel3 == $office) && ($action == 'Received')) { ?>
                                                    <td><?php echo $rows['track_actions'] . ' at ' . $rows['track_offices'] ?></td>
                                                <?php     } else if (($channel3 == $office) && ($action == 'Forwarded')) { ?>
                                                    <td><?php echo $rows['track_actions'] . ' to ' . $rows['track_offices'] ?></td>
                                                <?php     } else if (($channel3 == $office) && ($action == 'Returned')) { ?>
                                                    <td><?php echo $rows['track_actions'] . ' to ' . $rows['track_offices'] ?></td>
                                                <?php     } else if (($channel3 == $office) && ($action == 'Endorsed')) { ?>
                                                    <td><?php echo $rows['track_actions'] . ' to ' . $rows['track_offices'] ?></td>
                                                <?php     } else if (($channel4 == $office) && ($action == 'Received')) { ?>
                                                    <td><?php echo $rows['track_actions'] . ' at ' . $rows['track_offices'] ?></td>
                                                <?php     } else if (($channel4 == $office) && ($action == 'Forwarded')) { ?>
                                                    <td><?php echo $rows['track_actions'] . ' to ' . $rows['track_offices'] ?></td>
                                                <?php     } else if (($channel4 == $office) && ($action == 'Returned')) { ?>
                                                    <td><?php echo $rows['track_actions'] . ' to ' . $rows['track_offices'] ?></td>
                                                <?php     } else if (($channel4 == $office) && ($action == 'Endorsed')) { ?>
                                                    <td><?php echo $rows['track_actions'] . ' to ' . $rows['track_offices'] ?></td>
                                                <?php     } else if (($channel5 == $office) && ($action == 'Received')) { ?>
                                                    <td><?php echo $rows['track_actions'] . ' at ' . $rows['track_offices'] ?></td>
                                                <?php     } else if (($channel5 == $office) && ($action == 'Forwarded')) { ?>
                                                    <td><?php echo $rows['track_actions'] . ' to ' . $rows['track_offices'] ?></td>
                                                <?php     } else if (($channel5 == $office) && ($action == 'Returned')) { ?>
                                                    <td><?php echo $rows['track_actions'] . ' to ' . $rows['track_offices'] ?></td>
                                                <?php     } else if (($channel5 == $office) && ($action == 'Endorsed')) { ?>
                                                    <td><?php echo $rows['track_actions'] . ' to ' . $rows['track_offices'] ?></td>
                                                <?php     } else if (($destination == $office) && ($action == 'Received')) { ?>
                                                    <td><?php echo $rows['track_actions'] . ' at ' . $rows['track_offices'] ?></td>
                                                <?php     } else if (($destination == $office) && ($action == 'Forwarded')) { ?>
                                                    <td><?php echo $rows['track_actions'] . ' to ' . $rows['track_offices'] ?></td>
                                                <?php     } else if (($destination == $office) && ($action == 'Returned')) { ?>
                                                    <td><?php echo $rows['track_actions'] . ' to ' . $rows['track_offices'] ?></td>
                                                <?php     } else if (($destination == $office) && ($action == 'Endorsed')) { ?>
                                                    <td><?php echo $rows['track_actions'] . ' to ' . $rows['track_offices'] ?></td>
                                                <?php     } ?>
                                                <td> <?php echo date('M d, Y, g:ia', strtotime($timestamp)); ?> </td>


                                                <?php if (($destination == $office) && ($action == 'Received')) { ?>

                                                    <td bgcolor="#FFFF00"><?php echo $rows['user_officestarget'] ?></td>
                                                <?php } else if (($destination == $office) && ($action == 'Forwarded')) { ?>
                                                    <td bgcolor="399CC66"><?php echo $rows['user_officestarget'] ?></td>
                                                <?php     } else if (($destination == $office) && ($action == 'Returned')) { ?>
                                                    <td bgcolor="#FFC0CB"><?php echo $rows['user_officestarget'] ?></td>
                                                <?php     } else if (($destination == $office) && ($action == 'Returned')) { ?>
                                                    <td bgcolor="##FFA500"><?php echo $rows['user_officestarget'] ?></td>
                                                <?php     } else { ?>
                                                    <td><?php echo $rows['user_officestarget'] ?></td>
                                                <?php   } ?>


                                                <!-- Channel 1-->
                                                <?php if (($channel1 == $office) && ($action == 'Received')) { ?>

                                                    <td bgcolor="#FFFF00"><?php echo $rows['channel_1'] ?></td>
                                                <?php } else if (($channel1 == $office) && ($action == 'Forwarded')) { ?>
                                                    <td bgcolor="399CC66"><?php echo $rows['channel_1'] ?></td>
                                                <?php     } else if (($channel1 == $office) && ($action == 'Returned')) { ?>
                                                    <td bgcolor="#FFC0CB"><?php echo $rows['user_officestarget'] ?></td>
                                                <?php     } else if (($channel1 == $office) && ($action == 'Endorsed')) { ?>
                                                    <td bgcolor="##FFA500"><?php echo $rows['user_officestarget'] ?></td>
                                                <?php     } else { ?>
                                                    <td><?php echo $rows['channel_1'] ?></td>
                                                <?php   } ?>

                                                <!-- Channel 2-->
                                                <?php if (($channel2 == $office) && ($action == 'Received')) { ?>

                                                    <td bgcolor="#FFFF00"><?php echo $rows['channel_2'] ?></td>

                                                <?php } else if (($channel2 == $office) && ($action == 'Forwarded')) { ?>
                                                    <td bgcolor="399CC66"><?php echo $rows['channel_2'] ?></td>
                                                <?php     } else if (($channel2 == $office) && ($action == 'Returned')) { ?>
                                                    <td bgcolor="#FFC0CB"><?php echo $rows['user_officestarget'] ?></td>
                                                <?php     } else if (($channel2 == $office) && ($action == 'Endorsed')) { ?>
                                                    <td bgcolor="##FFA500"><?php echo $rows['user_officestarget'] ?></td>
                                                <?php     } else { ?>
                                                    <td><?php echo $rows['channel_2'] ?></td>
                                                <?php   } ?>

                                                <!-- Channel 3-->
                                                <?php if (($channel3 == $office) && ($action == 'Received')) { ?>

                                                    <td bgcolor="#FFFF00"><?php echo $rows['channel_3'] ?></td>

                                                <?php } else if (($channel3 == $office) && ($action == 'Forwarded')) { ?>
                                                    <td bgcolor="399CC66"><?php echo $rows['channel_3'] ?></td>
                                                <?php     } else if (($channel3 == $office) && ($action == 'Returned')) { ?>
                                                    <td bgcolor="#FFC0CB"><?php echo $rows['user_officestarget'] ?></td>
                                                <?php     } else if (($channel3 == $office) && ($action == 'Endorsed')) { ?>
                                                    <td bgcolor="##FFA500"><?php echo $rows['user_officestarget'] ?></td>
                                                <?php     } else { ?>
                                                    <td><?php echo $rows['channel_3'] ?></td>
                                                <?php   } ?>

                                                <!-- Channel 4-->
                                                <?php if (($channel4 == $office) && ($action == 'Received')) { ?>

                                                    <td bgcolor="#FFFF00"><?php echo $rows['channel_4'] ?></td>

                                                <?php } else if (($channel4 == $office) && ($action == 'Forwarded')) { ?>
                                                    <td bgcolor="399CC66"><?php echo $rows['channel_4'] ?></td>
                                                <?php     } else if (($channel4 == $office) && ($action == 'Returned')) { ?>
                                                    <td bgcolor="#FFC0CB"><?php echo $rows['user_officestarget'] ?></td>
                                                <?php     } else if (($channel4 == $office) && ($action == 'Endorsed')) { ?>
                                                    <td bgcolor="##FFA500"><?php echo $rows['user_officestarget'] ?></td>
                                                <?php     } else { ?>
                                                    <td><?php echo $rows['channel_4'] ?></td>
                                                <?php   } ?>

                                                <!-- Channel 5-->
                                                <?php if (($channel5 == $office) && ($action == 'Received')) { ?>

                                                    <td bgcolor="#FFFF00"><?php echo $rows['channel_5'] ?></td>

                                                <?php } else if (($channel5 == $office) && ($action == 'Forwarded')) { ?>
                                                    <td bgcolor="399CC66"><?php echo $rows['channel_5'] ?></td>
                                                <?php     } else if (($channel5 == $office) && ($action == 'Returned')) { ?>
                                                    <td bgcolor="#FFC0CB"><?php echo $rows['user_officestarget'] ?></td>
                                                <?php     } else if (($channel5 == $office) && ($action == 'Endorsed')) { ?>
                                                    <td bgcolor="##FFA500"><?php echo $rows['user_officestarget'] ?></td>
                                                <?php     } else { ?>
                                                    <td><?php echo $rows['channel_5'] ?></td>
                                                <?php   } ?>


                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm updatebtn">
                                                        <span class="material-icons">
                                                            edit_note
                                                        </span>
                                                    </button>
                                                </td>

                                            </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class=" container-fluid card-footer">
                            <!-- <button type=" button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <?php
    include '../include/footer.php';

    ?>