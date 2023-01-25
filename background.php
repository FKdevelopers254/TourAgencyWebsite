    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Explore <br></strong> Our amazing Big 5 Countries in East Africa</h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Find great places to stay, eat, shop, or visit from local experts around Kenya,Uganda,Tanzania,Rwanda,Zanzibar</p>
            <div class="block-17 my-4">
              <form action="" method="post" class="d-block d-flex">
                <div class="fields d-block d-flex">
                  <div class="textfield-search one-third">
                  	<input type="text" class="form-control" placeholder="safaris, hotels, car rental" disabled>
                  </div>
                  <div class="select-wrap one-third">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="" id="" class="form-control" placeholder="Keyword search">
                      <option value="">Our Locations</option>
                      <option value="">Kenya</option>
                      <option value="">Uganda</option>
                      <option value="">Tanzania</option>
                      <option value="">Rwanda</option>
                        <option value="">Zanzibar</option>
                    </select>
                  </div>
                </div>
                  <input class="search-submit btn btn-primary" value="EASAFARIS" >
              </form>
            </div>
            <p>Or browse the highlights</p>
            <p class="browse d-md-flex">
            	<!--<span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="flaticon-fork"></i>Restaurants</a></span>-->
            	<span class="d-flex justify-content-md-center align-items-md-center"><a href="index?o=Hotels"><i class="flaticon-hotel"></i>Hotels</a></span> 
            	<span class="d-flex justify-content-md-center align-items-md-center"><a href="index?o=Packages"><i class="flaticon-meeting-point"></i>Places</a></span> 
            <!--	<span class="d-flex justify-content-md-center align-items-md-	center"><a href="#"><i class="flaticon-shopping-bag"></i>Shopping</a></span>-->
              <span class="d-flex justify-content-md-center align-items-md- center"><a href="index?o=Cars"><i class="flaticon-shopping-bag"></i>Car Rental</a></span>
            </p>
          </div>
        </div>
      </div>
    </div>









<?php
                include('functions.php');
                include('db_connect.php');
	$total_website_views = total_views($conn); // Returns total website views
	echo "<strong>Total Website Views:</strong> " . $total_website_views;
	?>




<section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <span class="subheading">Special Offers</span>
            <h2 class="mb-4"><strong>Top</strong> Tour Destinations</h2>
          </div>
        </div>
      </div>
 
      <div class="container-fluid">
        <div class="row">



          <div class="destination-slider owl-carousel  ftco-animate">
                   <?php $sql = "SELECT * FROM tourpackages";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  
?> 
                
                    
                    
                   

            <div class="destination">
              <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-5.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <div class="d-flex">
                  <div class="one">
                    <h3><a href="#"><?php echo htmlentities($result->packagename);?></a></h3>
                    <p class="rate">
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star-o"></i>
                      <span><?php echo htmlentities($result->days);?> Days <?php echo htmlentities($result->nights);?> Nights </span>
                    </p>
                  </div>
                  <div class="two">
                    <span class="price">$<?php echo htmlentities($result->kes);?></span>
                      
                  </div>
                </div>
                   <p class="days"><span> </span></p>
                <p> <?php echo substr(($result->description),0,300);?></p>
               
                <hr>
                <p class="bottom-area d-flex">
                  <span><i class="icon-map-o"></i> <?php echo ($result->cityname);?>,  <?php echo ($result->countryname);?> </span>
                  <span class="ml-auto"><a href="index?o=TourPackages&p=<?php echo htmlentities($result->id);?>">Discover</a></span>
                </p>
              </div>
            </div><?php  }} ?>
          </div>
        </div>
      </div>
    </section>
























    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <span class="subheading">Special Offers</span>
            <h2 class="mb-4"><strong>Top</strong> Popular Hotels</h2>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">



          <div class="destination-slider owl-carousel  ftco-animate">
                    <?php $sql = "SELECT * from hotel";

        $query = $dbh -> prepare($sql);
        //$query -> bindParam(':city', $city, PDO::PARAM_STR);
        $query->execute();
        $results=$query->fetchAll(PDO::FETCH_OBJ);
        $cnt=1;
        if($query->rowCount() > 0)
        {
        foreach($results as $result)
        {       ?>

            <div class="destination">
              <a href="index?o=Hotel" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-5.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <div class="d-flex">
                  <div class="one">
                    <h3><a href="#"><?php echo htmlentities($result->hname);?></a></h3>
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
                    <span class="price">$<?php echo htmlentities($result->kes);?></span>
                      
                  </div>
                </div>
                <p><?php echo substr(($result->description),0,200);?></p>
                <p class="days"><span><?php echo htmlentities($result->countryname);?></span></p>
                <hr>
                <p class="bottom-area d-flex">
                  <span><i class="icon-map-o"></i> <?php echo ($result->cityname);?>, <?php echo ($result->countryname);?> </span>
                  <span class="ml-auto"><a href="index?o=Hotel&p=<?php echo htmlentities($result->id);?>">Discover</a></span>
                </p>
              </div>
            </div><?php  }} ?>
          </div>
        </div>
      </div>
    </section>








