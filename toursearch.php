

<?php
// (B) PROCESS SEARCH WHEN FORM SUBMITTED
if (isset($_POST['search'])) {
  // (B1) SEARCH FOR USERS
  require "tourcon.php";

  // (B2) DISPLAY RESULTS
  if (count($results) > 0) {
    foreach ($results as $r) {
      printf('<div class="col-md-3 ftco-animate">
                <div class="destination">
                  <a href="index?o=TourPackages&p=%s" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/%s);">
                    <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
                  </a>
                  <div class="text p-3">
                    <div class="d-flex">
                      <div class="one">
                        <h3><a href="index?o=TourPackages&p=%s">%s</a></h3>
                        <p class="rate">
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star-o"></i>
                          <span>8 Rating</span>
                        </p>
                      </div>
                      <div class="two">
                        <span class="price"></span>
                      </div>
                    </div>
                    <p></p>
                    <p class="days"><span>%s days %s nights</span></p>
                    <hr>
                    <p class="bottom-area d-flex">
                      <span><i class="icon-map-o"></i>%s,%s</span> 
                      <span class="ml-auto"><a href="index?o=TourPackages&p=%s">Discover</a></span>
                    </p>
                  </div>
                </div>
              </div>',$r['id'],$r['photo1'],$r['id'],$r['packagename'],$r['packagename'],$r['days'],$r['nights'],$r['cityname'],$r['countryname'],$r['id']);
       // echo count($results);
    }
  } else { echo "No results found"; }
}
?>