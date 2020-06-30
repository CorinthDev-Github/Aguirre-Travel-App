<?php include '../authentication/auth.php'; ?>
<?php

include '../authentication/connection.php';
if (isset($_POST['btn_submit'])) {

    $_SESSION['success'] = "Successfully booked. Your service type is " . " " . $_POST['service_type'] . " " . $_POST['vehicle_type'] . ". Please wait for the Message of Admin.";
    $service_type = $_POST['service_type'];
    $vehicle_type = $_POST['vehicle_type'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $contact = $_POST['contact'];
    $name = $_POST['name'];

    $query = mysqli_query($conn, "INSERT INTO car_booking (service_type, vehicle_type, location, date, contact, name) VALUES ('$service_type', '$vehicle_type', '$location', '$date', '$contact', '$name')");
}
    mysqli_close($conn);
?>
<?php include '_css.php'; ?>

<body>
    <?php include '_preloader.php'; ?>

    <!-- Header Area Start -->
    <?php include '_header.php'; ?>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/16.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcrumb-content d-flex align-items-center justify-content-between pb-5">
                        <h2 class="room-title">Car Rentals</h2>
                        <h2 class="room-price">Friendly user<span> booking</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Rooms Area Start -->
    <div class="roberto-rooms-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php if (isset($_SESSION['success'])) : ?>
                      <div class="success" >
                        <h5 class="alert alert-warning text-primary">
                          <center>  
                            <?php 
                              echo $_SESSION['success']; 
                              unset($_SESSION['success']);
                            ?>
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                           </center>
                        </h5>
                      </div>
                    <?php endif ?>
                </div>
                <div class="col-12 col-lg-8">
                    <!-- Single Room Details Area -->
                    <div class="single-room-details-area mb-50">
                        <!-- Room Thumbnail Slides -->
                        <div class="room-thumbnail-slides mb-50">
                            <div id="room-thumbnail--slide" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img/car1.jpg" class="d-block w-100" alt="" style="height: 411px">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/car2.jpg" class="d-block w-100" alt="" style="height: 411px">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/car3.jpg" class="d-block w-100" alt="" style="height: 411px">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/car4.png" class="d-block w-100" alt="" style="height: 411px">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/car5.jpg" class="d-block w-100" alt="" style="height: 411px">
                                    </div>
                                </div>

                                <ol class="carousel-indicators">
                                    <li data-target="#room-thumbnail--slide" data-slide-to="0" class="active">
                                        <img src="img/car1.jpg" class="d-block w-100" alt="" style="height: 54px;">
                                    </li>
                                    <li data-target="#room-thumbnail--slide" data-slide-to="1">
                                        <img src="img/car2.jpg" class="d-block w-100" alt="" style="height: 54px;">
                                    </li>
                                    <li data-target="#room-thumbnail--slide" data-slide-to="2">
                                        <img src="img/car3.jpg" class="d-block w-100" alt="" style="height: 54px;">
                                    </li>
                                    <li data-target="#room-thumbnail--slide" data-slide-to="3">
                                        <img src="img/car4.png" class="d-block w-100" alt="" style="height: 54px;">
                                    </li>
                                    <li data-target="#room-thumbnail--slide" data-slide-to="4">
                                        <img src="img/car5.jpg" class="d-block w-100" alt="" style="height: 54px;">
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <!-- Hotel Reservation Area -->
                    <div class="hotel-reservation--area mb-100">
                        <form action="#" method="post">
                            <div class="form-group mb-30">
                                <label for="">Service & Vehicle Type</label>
                                <div class="input-daterange" id="datepicker">
                                    <div class="row no-gutters">
                                        <div class="col-6">
                                            <select class="form-control" name="service_type" required>
                                                <option disabled="true" selected="true">Select Service Type</option>
                                                <option value="Self Drive">Self Drive</option>
                                                <option value="Chauffuer-drive">Chauffuer-drive</option>
                                                <option value="Special Event">Special Event</option>
                                                <option value="Airport pick-up/drop-off">Airport pick-up/drop-off</option>
                                                <option value="City pick-up/drop-off">City pick-up/drop-off</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <select class="form-control" name="vehicle_type" required>
                                                <option disabled="true" selected="true">Select Vehicle Type</option>
                                                <option value="Random Vehicle">Random Vehicle</option>
                                                <option value="Taxicab">Taxicab</option>
                                                <option value="Economy">Economy</option>
                                                <option value="SUV">SUV</option>
                                                <option value="Intermediate Van">Intermediate Van</option>
                                                <option value="Full-size Van">Full-size Van</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-30">
                                <label for="guests">Pick-up Location</label>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="location" placeholder="Enter Location" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-30">
                                <label for="checkInDate">Pick-up Date</label>
                                <div class="input-daterange" id="datepicker">
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            <input type="text" class="input-small form-control" name="date" id="checkInDate" placeholder="Pick a date" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="contact" value="<?php echo $_SESSION['user']['contact']; ?>">
                            <input type="hidden" name="name" value="<?php echo $_SESSION['user']['fullname']; ?>">
                            <div class="form-group">
                                <input type="submit" class="btn roberto-btn w-100" name="btn_submit" value="Reserve Now">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Rooms Area End -->
    <!-- Call To Action Area Start -->
    <?php include 'contact_us.php'; ?>
    <!-- Call To Action Area End -->
    <br/><br/><br/><br/>

    <!-- Footer Area Start -->
    <?php include '_footer.php'; ?>
    <!-- Footer Area End -->

    <?php include '_js.php'; ?>

</body>