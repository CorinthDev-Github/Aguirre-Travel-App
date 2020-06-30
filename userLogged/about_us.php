    
    <style>
    #more {display: none;}
    </style>
    <section class="roberto-about-area section-padding-100-0">
        <!-- Hotel Search Form Area -->
        <div class="hotel-search-form-area">
            <div class="container-fluid">
                <div class="hotel-search-form">
                    <?php 
                    include '../authentication/connection.php';

                    if (isset($_POST['btn_submit'])) {
                       
                       $_SESSION['success'] = "Successfully Booked!";
                       $origin = $_POST['origin'];
                       $destination = $_POST['destination'];
                       $dept_date = $_POST['dept_date'];
                       $ret_date = $_POST['ret_date'];
                       $adults = $_POST['adults'];
                       $children = $_POST['children'];
                       $contact = $_POST['contact'];
                       $name = $_POST['name'];

                       $query = mysqli_query($conn, "INSERT INTO airline_booking (origin, destination, checkInDate, checkOutDate, adults, children, contact, name) VALUES ('$origin', '$destination', '$dept_date', '$ret_date', '$adults', '$children', '$contact', '$name')");
                    }
                    mysqli_close($conn);

                    ?>
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
                    <form action="" method="POST">
                        <div class="row justify-content-between align-items-end">
                            <div class="col-6 col-md-2 col-lg-3">
                                <label for="checkIn">Origin</label>
                                <input type="hidden" class="form-control" name="contact" value="<?php echo $_SESSION['user']['contact'];?>">
                                <input type="hidden" class="form-control" name="name" value="<?php echo $_SESSION['user']['fullname']; ?>">
                                <input type="text" class="form-control" name="origin">
                            </div>
                            <div class="col-6 col-md-2 col-lg-3">
                                <label for="checkOut">Destination</label>
                                <input type="text" class="form-control" name="destination">
                            </div>
                            <div class="col-6 col-md-2 col-lg-3">
                                <label for="checkIn">Depart Date</label>
                                <input type="date" class="form-control" id="checkIn" name="dept_date">
                            </div>
                            <div class="col-6 col-md-2 col-lg-3">
                                <label for="checkOut">Return Date</label>
                                <input type="date" class="form-control" name="ret_date">
                            </div>
                            <div class="col-4 col-md-1">
                                <label for="adults">Adult</label>
                                <select name="adults" id="adults" class="form-control">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                </select>
                            </div>
                            <div class="col-4 col-md-2 col-lg-1">
                                <label for="children">Children</label>
                                <select name="children" id="children" class="form-control">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-3">
                                <button type="submit" class="form-control btn roberto-btn w-100" name="btn_submit">Book Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container mt-100">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <!-- Section Heading -->
                    <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                        <h6>About Us</h6>
                        <h2>Aguirre Star <br> World Tours Corporation</h2>
                    </div>
                    <div class="about-us-content mb-100">
                        <h5 class="wow fadeInUp" data-wow-delay="300ms">Aguirre Star Worldwide Travel Corporation is 24/7 accessible online booking with regards to international and domestic airline ticketing and hotel reservation. Provides the cheapest ticketing services worldwide in different modes of transportation like air, rail and sea.<span id="dots">...</span><span id="more"> In finding the perfect place to stay, Aguirre Star offers the best accommodation selections. 
                        Committed in preparing extraordinary tour itinerary all over the world to give our clients the most remarkable travel experience at the very hassle free and valuable cost. These can be group, individual or customized tours. Offers Insurance for clientsâ€™ personal accident risks and loss of baggage by availing a tour package, accommodation or airfare.

                        Offers reasonably priced bus and car rental for big and small group or individual domestic traveler where in clients could choose and check the availability of car, van, and bus transportation company. On the other hand, car and bus line company can also register their vehicle as member by just signing up through the website for free.</span>
                        </h5>
                        <button onclick="myFunction()" class="btn btn-info" id="myBtn">Read more</button>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="about-us-thumbnail mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <div class="row no-gutters">
                            <div class="col-6">
                                <div class="single-thumb">
                                    <img src="img/bg-img/13.jpg" alt="">
                                </div>
                                <div class="single-thumb">
                                    <img src="img/bg-img/14.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="single-thumb">
                                    <img src="img/bg-img/15.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
    function myFunction() {
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("myBtn");

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more"; 
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less"; 
        moreText.style.display = "inline";
      }
    }
    </script>