<?php include '../authentication/auth.php'; ?>
<?php include '_css.php'; ?>
<body>
    <!-- Left Panel -->
    <?php include '_leftpanel.php'; ?>
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include '_header.php'; ?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Generated System</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="row">

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Generated Reply</strong>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="monitor_hotel.php">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="alert  alert-info alert-dismissible fade show" role="alert">
                                                <textarea class="form-control" name="automated" readonly style="background: transparent; border: none;">This is a system-generated message. Please do not reply.</textarea>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <?php 

                                    include '../authentication/connection.php';

                                    if (isset($_GET['id'])) {
                                        $id = $_GET['id'];
                                        $query = mysqli_query($conn, "SELECT * FROM domestichotel_booking WHERE id = '$id' ");
                                        $i = 1;
                                        while ($row = mysqli_fetch_assoc($query)) {
                                        ?>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="dear" value="Dear," style="background: transparent; border: none; font-weight: bold; color: black;" readonly>
                                                <input class="form-control" type="text" name="name" value="<?php echo $row['name']; ?>" style="background: transparent; border: none; font-weight: bold; color: black;" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label><b>Automated Message:</b></label>
                                                <textarea class="form-control" rows="6" style="text-align: justify;" name="automess" readonly>Your Hotel Booked has been placed in <?php echo $row['hotel']; ?>, and the check-in date is on <?php echo $row['checkInDate']; ?>, and the check-out date is on <?php echo $row['checkOutDate']; ?> with Adults of <?php echo $row['adults']; ?>, and children of <?php echo $row['children']; ?>, via Banking Payments. Please contact this number +639650843610 to communicate.</textarea>
                                            </div>
                                        </div>
                                    <?php }} ?>
                                    <div class="col-md-12">
                                        <input type="submit" name="btn_submit" class="btn btn-warning form-control" value="SEND MESSAGE">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .content -->
    </div>

<!-- Modal -->
    <?php include '_js.php'; ?>
</body>
