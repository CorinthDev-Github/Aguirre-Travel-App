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
        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="col-sm-12">
                <div class="alert  alert-info alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-info">INFORMATION</span> <b>FEATURED LINKS (SERVICES)</b>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="./monitor_airline.php">
                    <div class="social-box facebook">
                        <i class="fa fa-plane"></i>
                        <ul>
                            <li>
                                <span>Airline Ticketing</span>
                            </li>
                            <li>
                                <?php 

                                include '../authentication/connection.php';

                                $query = mysqli_query($conn, "SELECT count(*) AS count FROM airline_booking");
                                $row = mysqli_fetch_assoc($query);
                                ?>

                                <span class="count"><?php echo $row['count'];?></span>
                                <?php ?>
                                <span>  BOOKED</span>
                            </li>
                        </ul>
                    </div>
                </a>
                <!--/social-box-->
            </div>
            <!--/.col-->

            <div class="col-lg-3 col-md-6">
                <a href="./monitor_bus.php">
                    <div class="social-box twitter">
                        <i class="fa fa-bus"></i>
                        <ul>
                            <li>
                                <span>Bus Reservation</span>
                            </li>
                            <li>
                                <?php 

                                include '../authentication/connection.php';

                                $query = mysqli_query($conn, "SELECT count(*) AS count FROM bus_booking");
                                $row = mysqli_fetch_assoc($query);
                                ?>

                                <span class="count"><?php echo $row['count'];?></span>
                                <?php ?>
                                <span>BOOKED</span>
                            </li>
                        </ul>
                    </div>
                </a>
                <!--/social-box-->
            </div>
            <!--/.col-->

            <div class="col-lg-3 col-md-6">
                <a href="./monitor_car.php">
                    <div class="social-box linkedin">
                        <i class="fa fa-car"></i>
                        <ul>
                            <li>
                                <span>Car Rentals</span>
                            </li>
                            <li>
                                <?php 

                                include '../authentication/connection.php';

                                $query = mysqli_query($conn, "SELECT count(*) AS count FROM car_booking");
                                $row = mysqli_fetch_assoc($query);
                                ?>

                                <span class="count"><?php echo $row['count'];?></span>
                                <?php ?>
                                <span>BOOKED</span>
                            </li>
                        </ul>
                    </div>
                </a>
                <!--/social-box-->
            </div>
            <!--/.col-->

            <div class="col-lg-3 col-md-6">
                <a href="./monitor_hotel.php">
                    <div class="social-box google-plus">
                        <i class="fa fa-hotel"></i>
                        <ul>
                            <li>
                                <span>Hotel Accomodate</span>
                            </li>
                            <li>
                                <?php 

                                include '../authentication/connection.php';

                                $query = mysqli_query($conn, "SELECT count(*) AS count FROM domestichotel_booking");
                                $row = mysqli_fetch_assoc($query);
                                ?>

                                <span class="count"><?php echo $row['count'];?></span>
                                <span>(INT'L)</span>
                                <?php ?>
                                <?php 

                                include '../authentication/connection.php';

                                $query = mysqli_query($conn, "SELECT count(*) AS count FROM internationalhotel_booking");
                                $row = mysqli_fetch_assoc($query);
                                ?>

                                <span class="count"><?php echo $row['count'];?></span>
                                <span>(Domestic)</span>
                                <?php ?>
                            </li>
                        </ul>
                    </div>
                </a>
                <!--/social-box-->
            </div>
            <!--/.col-->
        </div>
    </div>

    <?php include '_js.php'; ?>
</body>
