
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
                        <h2 class="room-title">Bus Reservation</h2>
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
                <div class="col-12 col-lg-8">
                    <!-- Single Room Details Area -->
                    <div class="single-room-details-area mb-50">
                        <!-- Room Thumbnail Slides -->
                        <div class="room-thumbnail-slides mb-50">
                            <div id="room-thumbnail--slide" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img/bus1.jpg" class="d-block w-100" alt="" style="height: 411px">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/bus2.jpg" class="d-block w-100" alt="" style="height: 411px">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/bus3.jpg" class="d-block w-100" alt="" style="height: 411px">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/bus4.jpg" class="d-block w-100" alt="" style="height: 411px">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/bus5.jpg" class="d-block w-100" alt="" style="height: 411px">
                                    </div>
                                </div>

                                <ol class="carousel-indicators">
                                    <li data-target="#room-thumbnail--slide" data-slide-to="0" class="active">
                                        <img src="img/bus1.jpg" class="d-block w-100" alt="" style="height: 54px;">
                                    </li>
                                    <li data-target="#room-thumbnail--slide" data-slide-to="1">
                                        <img src="img/bus2.jpg" class="d-block w-100" alt="" style="height: 54px;">
                                    </li>
                                    <li data-target="#room-thumbnail--slide" data-slide-to="2">
                                        <img src="img/bus3.jpg" class="d-block w-100" alt="" style="height: 54px;">
                                    </li>
                                    <li data-target="#room-thumbnail--slide" data-slide-to="3">
                                        <img src="img/bus4.jpg" class="d-block w-100" alt="" style="height: 54px;">
                                    </li>
                                    <li data-target="#room-thumbnail--slide" data-slide-to="4">
                                        <img src="img/bus5.jpg" class="d-block w-100" alt="" style="height: 54px;">
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
                                <label for="">Location</label>
                                <div class="row no-gutters">
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="origin" placeholder="Place Origin" required>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="destination" placeholder="Place Destination" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-30">
                                <label for="checkInDate">Departure Date</label>
                                <div class="input-daterange" id="datepicker">
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            <input type="text" class="input-small form-control" name="departDate" id="checkInDate" placeholder="Pick a date" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-30">
                                <label for="guests">No. of Pax</label>
                                <div class="row">
                                    <div class="col-6">
                                        <input type="number" class="form-control" name="adults" placeholder="Adults" required>
                                    </div>
                                    <div class="col-6">
                                        <input type="number" class="form-control" name="children" placeholder="Children" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn roberto-btn w-100" onclick="myFunction()">Book Now</button>
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

    <script type="text/javascript">
    function myFunction() {
        if (confirm("You'll need to signed first or create account to access booking.")) {
            location.href='admin/login.php';
        } else {
            location.href='busreservation.php';
        }    
    }
    </script>

</body>