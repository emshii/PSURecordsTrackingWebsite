<script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
    });

    searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
    });

    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
        if (sidebar.classList.contains("open")) {
            closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
        } else {
            closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
        }
    }
    $('#makeEditable').SetEditable();
</script>

<!--below dont add -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/dt-1.11.3/datatables.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
<!--below dont add -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

<!-- Script  for delete data in modal -->
<script>
    $(document).ready(function() {
        // for the button click on the table
        $('.deletebtn').on('click', function() {
            // below is the line of code call the modal using id
            $('#deletemodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();
            // below is the line of code after being click from the form pass to this script
            console.log(data);
            $('#delete_id').val(data[0]);

        });
    });
</script>
<!--########################################################################################-->
<script src="js/sweetalert.min.js"></script>


<!--this is the script that fetch data from the modal for each entities-->
<script>
    $(document).ready(function() {
        $('.editbtn').on('click', function() {
            $('#editmodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();
            // it will throw data from the modal
            console.log(data);
            $('#update_id').val(data[0]);
            $('#user_trackingid').val(data[1]);
            $('#user_title').val(data[2]);
            $('#user_name').val(data[3]);
            $('#email').val(data[4]);
            $('#user_byreceive').val(data[5]);
            $('#user_officestarget').val(data[6]);
            $('#user_createdate').val(data[7]);

        });
    });
</script>

<!--this is the script that update data from the modal for each entities-->
<script>
    $(document).ready(function() {
        $('.updatebtn').on('click', function() {
            $('#updatemodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();
            // it will throw data from the modal
            console.log(data);
            $('#user_trackingid').val(data[0]);
            $('#user_title').val(data[1]);
            $('#user_name').val(data[2]);
            // $('#track_actions').val(data[3]);
            // $('#track_offices').val(data[4]);
            $('#track_dates').val(data[5]);


        });
    });
</script>

<!-- this script was for the button delete   -->
<script>
    $(document).ready(function() {
        $('#deletemodal').modal('hide');
    });
</script>

<!-- this is the script supported by jquery, datatable -->
<script type="text/javascript">
    $(document).ready(function() {
        $('.table').DataTable();
    });
</script>
<!-- this is the sweeticon button for every action -->
<?php
if (isset($_SESSION['status']) && $_SESSION['status']) {
?>
    <script>
        swal({
            title: "<?php echo  $_SESSION['status']; ?>",
            // text: "You clicked the button!",
            icon: "<?php echo $_SESSION['status_code']; ?>",
            button: "DONE",
        });
    </script>
<?php
    unset($_SESSION['status']);
}
?>


<?php
if (isset($_SESSION['stats']) && $_SESSION['stats']) {
?>
    <script>
        swal({
            title: "<?php echo  $_SESSION['stats']; ?>",
            // text: "You clicked the button!",
            icon: "<?php echo $_SESSION['stats_code']; ?>",
            button: "DONE",
        });
    </script>
<?php
    unset($_SESSION['stats']);
}
?>

<?php
if (isset($_SESSION['stats_update']) && $_SESSION['stats_update']) {
?>
    <script>
        swal({
            title: "<?php echo  $_SESSION['stats_update']; ?>",
            // text: "You clicked the button!",
            icon: "<?php echo $_SESSION['stats_update_code']; ?>",
            button: "DONE",
        });
    </script>
<?php
    unset($_SESSION['stats_update']);
}
?>
<?php
if (isset($_SESSION['status_track']) && $_SESSION['status_track']) {
?>
    <script>
        swal({
            title: "<?php echo  $_SESSION['status_track']; ?>",
            // text: "You clicked the button!",
            icon: "<?php echo $_SESSION['status_code_track']; ?>",
            button: "Okay",
        });
    </script>
<?php
    unset($_SESSION['status_track']);
}
?>
<?php
if (isset($_SESSION['status_email']) && $_SESSION['status_email']) {
?>
    <script>
        swal({
            title: "<?php echo  $_SESSION['status_email']; ?>",
            // text: "You clicked the button!",
            icon: "<?php echo $_SESSION['status_code_email']; ?>",
            button: "Okay",
        });
    </script>
<?php
    unset($_SESSION['status_email']);
}
?>
<!-- this script was for the tooltip on boostrap -->
<script>
    $(function() {
        $('#tooltips').tooltip()
    })
</script>
</body>

</html>