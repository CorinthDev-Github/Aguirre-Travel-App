<?php include '../authentication/auth.php'; ?>
<?php include '_css.php'; ?>

<style>
body {
    overflow-x: hidden;
}
div.scrollmenu {
  overflow: auto;
}

#more {display: none;}

</style>
<body>
    
    <?php include '_preloader.php'; ?>

    <!-- Header Area Start -->
    <?php include '_header.php'; ?>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/16.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Cruise Tours</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cruise Tours</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->
    <br/><br/>
    <!-- Rooms Area Start -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
            </div>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-asia" role="tabpanel" aria-labelledby="pills-asia-tab">
                <!-- Scrollable Tabs -->
                <div class="scrollmenu">
                  <div class="container-fluid">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="width: 80%;">
                      <div class="row flex-nowrap">
                        <div class="col-3">
                          <li class="nav-item">
                            <a class="nav-link " id="pills-starcruise-tab" data-toggle="pill" href="#pills-starcruise" role="tab" aria-controls="pills-starcruise" aria-selected="true"><img src="img/starcruise.jpg"/></a>
                          </li>
                        </div>
                        <div class="col-3">
                          <li class="nav-item">
                            <a class="nav-link" id="pills-dreamcruise-tab" data-toggle="pill" href="#pills-dreamcruise" role="tab" aria-controls="pills-dreamcruise" aria-selected="false"><img src="img/dreamcruise.jpg"/></a>
                          </li>
                        </div>
                        <div class="col-3">
                          <li class="nav-item">
                            <a class="nav-link" id="pills-princesscruise-tab" data-toggle="pill" href="#pills-princesscruise" role="tab" aria-controls="pills-princesscruise" aria-selected="false"><img src="img/princesscruise.jpg"/></a>
                          </li>
                        </div>
                        <div class="col-3">
                          <li class="nav-item">
                            <a class="nav-link" id="pills-disneycruise-tab" data-toggle="pill" href="#pills-disneycruise" role="tab" aria-controls="pills-disneycruise" aria-selected="false"><img src="img/disneycruise.jpg"/></a>
                          </li>
                        </div>
                        <div class="col-3">
                          <li class="nav-item">
                            <a class="nav-link" id="pills-ocenia-tab" data-toggle="pill" href="#pills-ocenia" role="tab" aria-controls="pills-ocenia" aria-selected="false"><img src="img/ocenia.jpg"/></a>
                          </li>
                        </div>
                      </div>
                    </ul>
                  </div>
                </div>
                <!-- End Scrollable Tabs -->


                <!-- Tab Content 1 -->
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade" id="pills-starcruise" role="tabpanel" aria-labelledby="pills-starcruise-tab">
                    <div class="roberto-rooms-area section-padding-100-0">
                      <div class="container">
                        <div class="row">
                          <div class="col-12 col-lg-12">
                              <!-- Single Room Area -->
                              <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                                  <!-- Room Thumbnail -->
                                  <div class="room-thumbnail">
                                      <img src="img/sta1.jpg" alt="">
                                  </div>
                                  <!-- Room Content -->
                                  <div class="room-content">
                                      <h2>Super Star Gemini 3D2N </h2>
                                      <h4>$351.00 <span> / pax</span></h4>
                                      <div class="room-feature">
                                          <h6>Date: <span>Dec 20, 27 | Jan 03, 10, 17, 24, 31 | Feb 07, 14, 28 | Mar 07, 14, 21, 28 | Apr 04, 11, 18, 25</span></h6>
                                          <h6>Capacity: <span>No limit</span></h6>
                                          <h6>Services: <span>Wifi, television etc...</span></h6>
                                      </div>
                                      <a href="#" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                  </div>
                              </div>

                              <!-- Single Room Area -->
                              <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="300ms">
                                  <!-- Room Thumbnail -->
                                  <div class="room-thumbnail">
                                      <img src="img/sta2.jpg" alt="">
                                  </div>
                                  <!-- Room Content -->
                                  <div class="room-content">
                                      <h2>Super Star Gemini 3D2N </h2>
                                      <h4>$379.00 <span> / pax</span></h4>
                                      <div class="room-feature">
                                          <h6>Date: <span>Dec 22, 29 | Jan 05, 12, 19, 26 | Feb 02, 09, 16, 23 | Mar 02, 09, 16, 23, 30 | Apr 06, 13, 20, 27</span></h6>
                                          <h6>Capacity: <span>No limit</span></h6>
                                          <h6>Services: <span>Wifi, television etc...</span></h6>
                                      </div>
                                      <a href="#" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                  </div>
                              </div>

                              <!-- Single Room Area -->
                              <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="500ms">
                                  <!-- Room Thumbnail -->
                                  <div class="room-thumbnail">
                                      <img src="img/sta3.jpg" alt="">
                                  </div>
                                  <!-- Room Content -->
                                  <div class="room-content">
                                      <h2>Super Star Aquarius 3D2N</h2>
                                      <h4>$447.00 <span> / pax</span></h4>
                                      <div class="room-feature">
                                          <h6>Date: <span>Aug 23, 30 | Sep 06, 13, 20, 27 | Oct 04, 11, 18, 25</span></h6>
                                          <h6>Capacity: <span>No limit</span></h6>
                                          <h6>Services: <span>Wifi, television etc...</span></h6>
                                      </div>
                                      <a href="#" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                  </div>
                              </div>

                              <!-- Single Room Area -->
                              <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="500ms">
                                  <!-- Room Thumbnail -->
                                  <div class="room-thumbnail">
                                      <img src="img/sta4.jpg" alt="">
                                  </div>
                                  <!-- Room Content -->
                                  <div class="room-content">
                                      <h2>Super Star Gemini 3D2N </h2>
                                      <h4>$464.00 <span> / pax</span></h4>
                                      <div class="room-feature">
                                          <h6>Date: <span>Dec 17, 24, 31 | Jan 07, 14, 21, 28 | Feb 04, 11, 18, 25 | Mar 04, 11, 18, 25 | Apr 01, 08, 15, 22</span></h6>
                                          <h6>Capacity: <span>No limit</span></h6>
                                          <h6>Services: <span>Wifi, television etc...</span></h6>
                                      </div>
                                      <a href="#" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                  </div>
                              </div>

                              <!-- Single Room Area -->
                              <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="500ms">
                                  <!-- Room Thumbnail -->
                                  <div class="room-thumbnail">
                                      <img src="img/sta5.jpg" alt="">
                                  </div>
                                  <!-- Room Content -->
                                  <div class="room-content">
                                      <h2>Super Star Libra 4D3N</h2>
                                      <h4>$556.00 <span> / pax</span></h4>
                                      <div class="room-feature">
                                          <h6>Date: <span>Aug 27 | Sep 03, 10, 17, 24 | Oct 01, 08, 15, 22, 29 | Nov 05, 12, 19, 26 | Dec 03, 10, 17, 24</span></h6>
                                          <h6>Capacity: <span>Minimum 2 Pax</span></h6>
                                          <h6>Services: <span>Wifi, television etc...</span></h6>
                                      </div>
                                      <a href="#" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                  </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-dreamcruise" role="tabpanel" aria-labelledby="pills-dreamcruise-tab">
                    <div class="roberto-rooms-area section-padding-100-0">
                      <div class="container">
                        <div class="row">
                          <div class="col-12 col-lg-12">
                            <!-- Single Room Area -->
                            <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                                <!-- Room Thumbnail -->
                                <div class="room-thumbnail">
                                    <img src="img/dr1.jpg" alt="">
                                </div>
                                <!-- Room Content -->
                                <div class="room-content">
                                    <h2>Genting Dream 3D2N</h2>
                                    <h4>$360.00 <span>rate / per person</span></h4>
                                    <div class="room-feature">
                                        <h6>Date: <span>Dec 08, 15, 22, 29 | Jan 05, 12, 19, 26 | Feb 02, 09, 16, 23</span></h6>
                                        <h6>Capacity: <span>No limit</span></h6>
                                        <h6>Services: <span>Wifi, television etc...</span></h6>
                                    </div>
                                    <a href="#" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <!-- Single Room Area -->
                            <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="300ms">
                                <!-- Room Thumbnail -->
                                <div class="room-thumbnail">
                                    <img src="img/dr2.jpg" alt="">
                                </div>
                                <!-- Room Content -->
                                <div class="room-content">
                                    <h2>Genting Dream 3D2N</h2>
                                    <h4>$390.00 <span>rate / per person</span></h4>
                                    <div class="room-feature">
                                        <h6>Date: <span>Sep 01, 08, 15, 22, 29 | Oct 06, 13</span></h6>
                                        <h6>Capacity: <span>No limit</span></h6>
                                        <h6>Services: <span>Wifi, television etc...</span></h6>
                                    </div>
                                    <a href="#" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <!-- Single Room Area -->
                            <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="500ms">
                                <!-- Room Thumbnail -->
                                <div class="room-thumbnail">
                                    <img src="img/dr3.jpg" alt="">
                                </div>
                                <!-- Room Content -->
                                <div class="room-content">
                                    <h2>Genting Dream 6D5N</h2>
                                    <h4>$733.00 <span>rate / per person</span></h4>
                                    <div class="room-feature">
                                        <h6>Date: <span>Dec 10, 24 | Jan 07, 21 | Feb 04</span></h6>
                                        <h6>Capacity: <span>No limit</span></h6>
                                        <h6>Services: <span>Wifi, television etc...</span></h6>
                                    </div>
                                    <a href="#" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <!-- Single Room Area -->
                            <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="700ms">
                                <!-- Room Thumbnail -->
                                <div class="room-thumbnail">
                                    <img src="img/dr4.jpg" alt="">
                                </div>
                                <!-- Room Content -->
                                <div class="room-content">
                                    <h2>Genting Dream 3D2N</h2>
                                    <h4>$391.00 <span>rate / per person</span></h4>
                                    <div class="room-feature">
                                        <h6>Date: <span>Feb 18</span></h6>
                                        <h6>Capacity: <span>No limit</span></h6>
                                        <h6>Services: <span>Wifi, television etc...</span></h6>
                                    </div>
                                    <a href="#" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <!-- Single Room Area -->
                            <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="900ms">
                                <!-- Room Thumbnail -->
                                <div class="room-thumbnail">
                                    <img src="img/dr5.jpg" alt="">
                                </div>
                                <!-- Room Content -->
                                <div class="room-content">
                                    <h2>Genting Dream 4D3N</h2>
                                    <h4>$631.00 <span>rate / per person</span></h4>
                                    <div class="room-feature">
                                        <h6>Date: <span>Feb 20</span></h6>
                                        <h6>Capacity: <span>2 Pax</span></h6>
                                        <h6>Services: <span>Wifi, television etc...</span></h6>
                                    </div>
                                    <a href="#" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-princesscruise" role="tabpanel" aria-labelledby="pills-princesscruise-tab">
                    <div class="roberto-rooms-area section-padding-100-0">
                      <div class="container">
                        <div class="row">
                          <div class="col-12 col-lg-12">
                            <!-- Single Room Area -->
                            <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                                <!-- Room Thumbnail -->
                                <div class="room-thumbnail">
                                    <img src="img/pr1.jpg" alt="">
                                </div>
                                <!-- Room Content -->
                                <div class="room-content">
                                    <h2>Emerald Princess</h2>
                                    <h4>$984.00 <span>rate / per person</span></h4>
                                    <div class="room-feature">
                                        <h6>Date: <span>Aug 27 | Sep 03, 10, 17</span></h6>
                                        <h6>Capacity: <span>No max limit</span></h6>
                                        <h6>Services: <span>Wifi, television etc...</span></h6>
                                    </div>
                                    <a href="#" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-disneycruise" role="tabpanel" aria-labelledby="pills-disneycruise-tab">
                    <div class="roberto-rooms-area section-padding-100-0">
                      <div class="container">
                        <div class="row">
                          <div class="col-12 col-lg-12">
                            <!-- Single Room Area -->
                            <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                                <!-- Room Thumbnail -->
                                <div class="room-thumbnail">
                                    <img src="img/dis1.jpg" alt="">
                                </div>
                                <!-- Room Content -->
                                <div class="room-content">
                                    <h2>Disney Wonder 5N </h2>
                                    <h4>$1,175.00 <span>rate / per person</span></h4>
                                    <div class="room-feature">
                                        <h6>Date: <span>May 16</span></h6>
                                        <h6>Capacity: <span>No max limit</span></h6>
                                        <h6>Services: <span>Wifi, television etc...</span></h6>
                                    </div>
                                    <a href="#" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <!-- Single Room Area -->
                            <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="300ms">
                                <!-- Room Thumbnail -->
                                <div class="room-thumbnail">
                                    <img src="img/dis2.jpg" alt="">
                                </div>
                                <!-- Room Content -->
                                <div class="room-content">
                                    <h2>Disney Wonder 7N</h2>
                                    <h4>$1,836.00 <span>rate / per person</span></h4>
                                    <div class="room-feature">
                                        <h6>Date: <span>May 21, 28 | Jun 04, 11, 18, 25 | Jul 02, 23 | Aug 06, 13, 20</span></h6>
                                        <h6>Capacity: <span>No max limit</span></h6>
                                        <h6>Services: <span>Wifi, television etc...</span></h6>
                                    </div>
                                    <a href="#" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <!-- Single Room Area -->
                            <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="500ms">
                                <!-- Room Thumbnail -->
                                <div class="room-thumbnail">
                                    <img src="img/dis3.jpg" alt="">
                                </div>
                                <!-- Room Content -->
                                <div class="room-content">
                                    <h2>Disney Wonder 9N</h2>
                                    <h4>$3,250.00 <span>rate / per person</span></h4>
                                    <div class="room-feature">
                                        <h6>Date: <span>Jul 09</span></h6>
                                        <h6>Capacity: <span>No max limit</span></h6>
                                        <h6>Services: <span>Wifi, television etc...</span></h6>
                                    </div>
                                    <a href="#" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-ocenia" role="tabpanel" aria-labelledby="pills-ocenia-tab">
                    <div class="roberto-rooms-area section-padding-100-0">
                      <div class="container">
                        <div class="row">
                          <!-- <div class="col-12 col-lg-12"> -->
                            <!-- Single Room Area -->
                            <!-- <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms"> -->
                                <!-- Room Thumbnail -->
                                <!-- <div class="room-thumbnail"> -->
                                    <!-- <img src="img/dav1.jpg" alt=""> -->
                                <!-- </div> -->
                                <!-- Room Content -->
                                <!-- <div class="room-content"> -->
                                    <!-- <h2>FREE & EASY IN DAVAO ( BUDGET ) [2N3D] CROWN REGENCY DAVAO (STANDARD)</h2> -->
                                    <!-- <h4>₱3,550.00 <span>rate / per person</span></h4> -->
                                    <!-- <div class="room-feature"> -->
                                        <!-- <h6>Date: <span>Selling Period MAR 21 - MAR 24 Travel Date MAR 22 - MAR 31</span></h6> -->
                                        <!-- <h6>Capacity: <span>No max limit</span></h6> -->
                                        <!-- <h6>Services: <span>Wifi, television etc...</span></h6> -->
                                    <!-- </div> -->
                                    <!-- <a href="#" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> -->
                                <!-- </div> -->
                            <!-- </div> -->

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Content 1 -->
              </div>
            </div>
        </div>
    </div>
    <!-- Rooms Area End -->
    <br/><br/><br/><br/>
    <!-- Call To Action Area Start -->
    <?php include 'contact_us.php'; ?>
    <!-- Call To Action Area End -->

    <br/><br/><br/><br/>

    <!-- Footer Area Start -->
    <?php include '_footer.php'; ?>
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <?php include '_js.php'; ?>

</body>
<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "VIEW MORE TOUR"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "VIEW LESS TOUR"; 
    moreText.style.display = "inline";
  }
}

function myFunction1() {
  var dots = document.getElementById("dots1");
  var moreText = document.getElementById("more1");
  var btnText = document.getElementById("myBtn1");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "VIEW MORE TOUR"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "VIEW LESS TOUR"; 
    moreText.style.display = "inline";
  }
}
</script>