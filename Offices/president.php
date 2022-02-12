<?php
if (isset($_SESSION['offices']) && $_SESSION['offices'] != 'Admin') {
    header('location:Offices/president.php');
    die();
}
// ito yung nasa labas pa yung cs.php\
include 'header1.php';
include '../connection/dbh.inc.php';

// include '../connection/dbh.inc.php';
// include '../header.php';

?>



<!-- SECTION FOR MODAL ADD NEW TRACKING NUMBER -->
< <section class="container-fluid home-section p-0">
    <div class="container-fluid-md">
        <div class="row justify-content-center">
            <div class="col-12 bg light rounded my-2 py-2">
                <div class="container-fluid">
                    <h5 class="text-center text-dark pt-2"> Welcome to <span class="text-danger"> Office of the President </span> <br> Tracking Document</h5>

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
                                        $sql = "SELECT * FROM track_communication WHERE track_offices = 'Office of the President' ";
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
    include '../include/footer.php';

    ?>