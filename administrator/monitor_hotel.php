<?php include '../authentication/auth.php'; ?>
<?php 

include '../authentication/connection.php';

if (isset($_POST['btn_submit'])) {

    $_SESSION['success'] = "Message Sent Successfully!";
    $automated = $_POST['automated'];
    $dear = $_POST['dear'];
    $name = $_POST['name'];
    $automess = $_POST['automess'];

    $query = mysqli_query($conn, "INSERT INTO automatedmessage (automated, dear, name, automess) VALUES ('$automated', '$dear', '$name', '$automess')");
}

mysqli_close($conn);

?>
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
                        <h1>Hotel Accomodation</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Hotel Accomodation (International)</strong>
                        </div>
                        <div class="card-body">
                            <?php if (isset($_SESSION['success'])) : ?>
                              <div class="success" >
                                <h5 class="alert alert-warning text-primary">
                                  <center>  
                                    <?php 
                                      echo $_SESSION['success']; 
                                      unset($_SESSION['success']);
                                    ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                   </center>
                                </h5>
                              </div>
                            <?php endif ?>
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Contact Number</th>
                                        <th>Details</th>
                                        <th><center><a class="btn btn-warning" href="./monitor_airline.php" style="border-radius: 5px;"><i class="fa fa-refresh"></i></a></center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 

                                    include '../authentication/connection.php';

                                    $query = mysqli_query($conn, "SELECT * FROM internationalhotel_booking");
                                    $i = 1;
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>

                                    <tr id="<?php echo $row['id']; ?>">
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['contact']; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal<?php echo $row['id']; ?>" style="border-radius: 5px;"><i class="fa fa-eye"></i></button>
                                        </td>
                                        <td>
                                            <a href="monitor_airline.php?delete=<?php echo $row['id']; ?>" onClick="return confirm('Are you sure you want to delete this booked?');" class="btn btn-danger" style="border-radius: 5px;"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="myModal<?php echo $row['id']; ?>" role="dialog">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Hotel Accomodation (International)</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>
                                                            <b>BOOKED BY:</b> <b style="text-decoration: underline;"><?php echo $row['name']; ?></b> at <b style="text-decoration: underline;"><?php echo $row['dateBooked']; ?></b>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Contact Number</b></label>
                                                        <input type="text" class="form-control" name="origin" value="<?php echo $row['contact']; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Hotel Booked</b></label>
                                                        <input type="text" class="form-control" name="hotel" value="<?php echo $row['hotel']; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Check In Date</b></label>
                                                        <input type="text" class="form-control" name="checkInDate" value="<?php echo $row['checkInDate']; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Check Out Date</b></label>
                                                        <input type="text" class="form-control" name="checkOutDate" value="<?php echo $row['checkOutDate']; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Adults</b></label>
                                                        <input type="text" class="form-control" name="adults" value="<?php echo $row['adults']; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Children</b></label>
                                                        <input type="text" class="form-control" name="children" value="<?php echo $row['children']; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                            <a href="generatedreply_international.php?id=<?php echo $row['id']; ?>" type="button" class="btn btn-primary">Reply</a>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <?php 
                                    
                                    $i++;

                                    }

                                    if (isset($_GET['delete'])) {
                                        $delete_id = $_GET['delete'];
                                        mysqli_query($conn, "DELETE FROM airline_booking WHERE id = '$delete_id' ");
                                    }


                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Hotel Accomodation (Domestic)</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Contact Number</th>
                                        <th>Details</th>
                                        <th><center><a class="btn btn-warning" href="./monitor_airline.php" style="border-radius: 5px;"><i class="fa fa-refresh"></i></a></center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 

                                    include '../authentication/connection.php';

                                    $query = mysqli_query($conn, "SELECT * FROM domestichotel_booking");
                                    $i = 1;
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>

                                    <tr id="<?php echo $row['id']; ?>">
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['contact']; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalDom<?php echo $row['id']; ?>" style="border-radius: 5px;"><i class="fa fa-eye"></i></button>
                                        </td>
                                        <td>
                                            <a href="monitor_airline.php?delete=<?php echo $row['id']; ?>" onClick="return confirm('Are you sure you want to delete this booked?');" class="btn btn-danger" style="border-radius: 5px;"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="myModalDom<?php echo $row['id']; ?>" role="dialog">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Hotel Accomodation (Domestic)</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>
                                                            <b>BOOKED BY:</b> <b style="text-decoration: underline;"><?php echo $row['name']; ?></b> at <b style="text-decoration: underline;"><?php echo $row['dateBooked']; ?></b>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Contact Number</b></label>
                                                        <input type="text" class="form-control" name="origin" value="<?php echo $row['contact']; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Hotel Booked</b></label>
                                                        <input type="text" class="form-control" name="hotel" value="<?php echo $row['hotel']; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Check In Date</b></label>
                                                        <input type="text" class="form-control" name="checkInDate" value="<?php echo $row['checkInDate']; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Check Out Date</b></label>
                                                        <input type="text" class="form-control" name="checkOutDate" value="<?php echo $row['checkOutDate']; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Adults</b></label>
                                                        <input type="text" class="form-control" name="adults" value="<?php echo $row['adults']; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><b>Children</b></label>
                                                        <input type="text" class="form-control" name="children" value="<?php echo $row['children']; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                            <a href="generatedreply_domestic.php?id=<?php echo $row['id']; ?>" type="button" class="btn btn-primary">Reply</a>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <?php 
                                    
                                    $i++;

                                    }

                                    if (isset($_GET['delete'])) {
                                        $delete_id = $_GET['delete'];
                                        mysqli_query($conn, "DELETE FROM airline_booking WHERE id = '$delete_id' ");
                                    }


                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .content -->
    </div>

<!-- Modal -->
    <?php include '_js.php'; ?>
</body>
