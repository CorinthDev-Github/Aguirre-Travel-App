
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/aguirrePic.png" alt="Logo" style="width: 70%"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/aguirreGlobe.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="./"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Monitor Booking</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Services</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plane"></i><a href="./monitor_airline.php">Airline Ticketing</a></li>
                            <li><i class="fa fa-bus"></i><a href="./monitor_bus.php">Bus Reservation</a></li>
                            <li><i class="fa fa-car"></i><a href="./monitor_car.php">Car Rentals</a></li>
                            <li><i class="fa fa-hotel"></i><a href="./monitor_hotel.php">Hotel Accomodation</a></li>
                        </ul>
                    </li>
                    <h3 class="menu-title">Account</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i><?php echo $_SESSION['user']['fullname']; ?> </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="../authentication/logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->