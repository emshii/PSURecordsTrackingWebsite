<?php
if (isset($_SESSION['offices']) && $_SESSION['offices'] != 'Admin') {
    header('location:cah.php');
    die();
}
// ito yung nasa labas pa yung cs.php\
include 'header.php';
include 'connection/dbh.inc.php';

// include '../connection/dbh.inc.php';
// include '../header.php';

?>


<!-- SECTION FOR MODAL TRACKING THE CURRENT SITUATION OF THE DOCUMENT -->
<div class="modal fade" id="trackinfoModal" tabindex="1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="adminModal">Tracking Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- watch out for this form here will be throw the data showing the result on the query -->
            <form action="trackresultwithconditionCAH.php" method="POST">
                <div class="modal-body">
                    <!-- Modal panel Insert to Record Office -->
                    <!--this is for the tracking number -->
                    <input type="hidden" name="user_officestarget" id="user_officestarget">
                    <div class="form-group row text-center">
                        <div class="col-lg-12">
                            <input type="number" name="user_trackingid" class="form-control" id="inputTracking" placeholder="Enter Tracking Number" required>
                        </div>
                        <input type="hidden" name="user_officestarget" id="user_officestarget">

                        <hr>
                        <label for="inputTracking" class="col-sm-12 col-form-label"> <strong> Tracking Number </strong></label>
                        <br><br><br>
                        <div class='col text-center'>
                            <p class="font-italic">
                                <br>
                            <p class="text-danger"> Note: </p> On this tab will be Flush Current Situation of the Tracking given tracking ID</p>
                        </div>
                    </div>
                    <!--drop down for office destination-->
                </div>
                <div class="modal-footer">
                    <!-- PALITAN ITO NG SEARCH BUTTON -->
                    <!-- <button type="button" id="tooltip" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Close" data-dismiss="modal"><i class="material-icons">close</i></button> -->
                    <!-- CLOSE BUTTON -->
                    <button type="submit" id="tooltip" name="trackresult" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Save"><i class="material-icons">search</i></button>
                </div>
                <!--end of form modal for insert-->
            </form>
        </div>
    </div>
</div>

<!-- SECTION FOR MODAL TRACK NEW MODAL -->
<div class="modal fade" id="tracknewModal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adminModal">Track New</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
            <form action="tracknewCAH.php" method="POST">
                <div class="modal-body">
                    <!--Modal panel Insert to Record Office -->
                    <!--this is for the tracking number -->
                    <div class="form-group row">
                        <label for="inputTracking" class="col-sm-2 col-form-label">Tracking</label>
                        <div class="col-sm-8">
                            <input type="input" name="user_trackingid" class="form-control" id="inputTracking" placeholder="Tracking Number" required>
                        </div>
                    </div>
                    <!-- <div class="form-group row">
                        <label for="track_offices" class="col-sm-2 col-form-label">Action</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="track_offices" id="track_offices">
                                <option value="CS">College of Sciene</option>
                                <option value="CN">Nursing</option>
                            </select>
                        </div>
                    </div> -->
                    <div class="form-group row">
                        <label for="trackoffice" class="col-sm-2 col-form-label">Office</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="track_offices" id="trackoffice">
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
                            <select class="form-control" name="track_actions" id="office">
                                <option value="Received">Received</option>
                                <option value="Forwarded">Forwarded</option>
                                <option value="Return">Return</option>
                                <option value="Recommended for Disapproval">Recomend For Dis-Approval</option>
                            </select>
                        </div>
                    </div>
                    <!-- <div class="form-group row">
                        <label for="inputEmail" class="col-md-2 col-form-label">Action</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" class="form-control" id="Title" placeholder="Action">
                        </div>
                    </div> -->
                    <div class="form-group row">
                        <label for="inputOfficer" class="col-sm-2 col-form-label">Receive by</label>
                        <div class="col-sm-10">
                            <input type="text" name="track_careof" class="form-control" id="Title" placeholder="Officer">
                        </div>
                    </div>
                    <!--drop down for office destination-->
                </div>
                <div class="modal-footer">
                    <button type="button" id="tooltip" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Close" data-dismiss="modal"><i class="material-icons">close</i></button>
                    <!--this is the submit code line -->
                    <button type="submit" id="tooltip" name="tracknew" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Track new"><i class="material-icons">reply</i></button>
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
                    <h5 class="text-center text-dark pt-2"> Welcome to <span class="text-success"> Office of Collge of Art & Humanities </span> <br> Tracking Document</h5>
                    <button type="button col-md-10" class="btn btn-info btn-sm mr-2 " data-toggle="modal" data-target="#tracknewModal">
                        <i class="material-icons" data-toggle="tooltip" data-placement="top" title="Track New Document" id="tooltop" title="Track New">track_changes</i>
                    </button>
                    <button type="button col-md-10" class="btn btn-info btn-sm " data-toggle="modal" data-target="#trackinfoModal">
                        <i class="material-icons" data-toggle="tooltip" data-placement="top" title="Track Information" id="tooltip" title="Track Information"">sticky_note_2</i>
                            </button>
                            <hr>
                    <div class=" card container-fluid">
                            <div class="card-body">

                                <div class=" container">
                                    <table class=" table table-blocked table-stripped table-hover table-responsive table-xl w-100%" style="width: 100%;">
                                        <thead class="bg-dark text-light">
                                            <tr>
                                                <!-- here was the new tracking general tracking head, that can watch over by the different organization -->
                                                <th>ID </th>
                                                <th>TrackingID</th>
                                                <th>Remarks</th>
                                                <th>Action</th>
                                                <th>Offices</th>
                                                <th>Date</th>
                                                <th>Handed</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // watch out sa query table, need mo palitan yung table ng user para doon sa tracking inforamtion
                                            $sql = "SELECT * FROM track_communication WHERE track_offices = 'CAH' ";
                                            // WHERE track_offices = 'cs'";
                                            $result = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $timestamp = $row['track_dates'];
                                            ?>
                                                <tr>
                                                    <td><?php echo $row['track_id'] ?> </td>
                                                    <td><?php echo $row['user_trackingid'] ?></td>
                                                    <td><?php echo $row['track_remarks'] ?></td>
                                                    <td><?php echo $row['track_actions'] ?></td>
                                                    <td><?php echo $row['track_offices'] ?></td>
                                                    <td> <?php echo date('M d, Y, g:ia', strtotime($timestamp)); ?>

                                                    </td>
                                                    <td><?php echo $row['track_careof'] ?></td>
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
    include 'include/footer.php';

    ?>