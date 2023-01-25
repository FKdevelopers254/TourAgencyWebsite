<div  style="background-image: url('images/bg_1.jpg'); width:100%; height:80px;"></div>
      <?php
     $p=intval($_GET['p']);
     $sql = "SELECT * from hotel where id=:p";
     $query = $dbh -> prepare($sql);
     $query -> bindParam(':p', $p, PDO::PARAM_STR);
     $query->execute();
     $results=$query->fetchAll(PDO::FETCH_OBJ);
     $cnt=1;
     if($query->rowCount() > 0)
     {
     foreach($results as $result)
     {  ?>  <section class="ftco-section ftco-degree-bg">
         <div class="container">
           <div class="row">
            <div class="col-lg-3 sidebar">
                
              <!--  <div class="sidebar-wrap bg-light ftco-animate">
                    <h3 class="heading mb-4">Star Rating</h3>
                    <form method="post" class="star-rating">
                              <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">
                                        <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></p>
                                    </label>
                              </div>
                            </form>
                </div> -->
             </div>
             <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-12 ftco-animate">
                        <div class="single-slider owl-carousel">
                            <div class="item">
                                <div class="hotel-img" style="background-image: url(photos/<?php echo htmlentities($result->photo);?>);"></div>
                            </div>
                            <div class="item">
                                <div class="hotel-img" style="background-image: url(photos/<?php echo htmlentities($result->photo2);?>);"></div>
                            </div>
                            <div class="item">
                                <div class="hotel-img" style="background-image: url(photos/<?php echo htmlentities($result->photo3);?>);"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
                        <span>Our Best Hotel and Rooms</span>
                        <h2><?php echo htmlentities($result->hname);?></h2>
                        <p class="rate mb-5">
                            <span class="loc"><a href="#"><i class="icon-map"></i> <?php echo htmlentities($result->cityname);?>,<?php echo htmlentities($result->countryname);?></a></span>
                            <span class="star">
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star-o"></i>
                                8 Rating</span>
                            </p>
                            <p><?php echo htmlentities($result->description);?></p>

                 
                    </div>
                    
                    
                    
                        <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                        <h4 class="mb-4">Our Rooms</h4>
                        <div class="row">         
                     <?php
  
     $sql = "SELECT * from hotelrooms where hotelid=:p";
     $query = $dbh -> prepare($sql);
     $query -> bindParam(':p', $p, PDO::PARAM_STR);
     $query->execute();
     $results=$query->fetchAll(PDO::FETCH_OBJ);
     $cnt=1;
     if($query->rowCount() > 0)
     {
     foreach($results as $result)
     {  ?>
               
                            <div class="col-md-3">
                                    <div class="destination">
                                        <a  class="img img-2" style="background-image: url(images/room-4.jpg);"></a>
                                        <div class="text p-3">
                                            <div class="d-flex">
                                                <div class="one">
                                                    <h3><a><?php echo htmlentities($result->roomname);?></a></h3>
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
                                                    <span class="price per-price">$<?php echo htmlentities($result->price);?></span>
                                                </div>
                                            </div>
                                            <p><?php echo substr(($result->hotelname),0,30);?></p>
                                            <hr>
                                            <p class="bottom-area d-flex">
                                              
                                                <span class="ml-auto"><a href="index?o=TourPackages&p=<?php echo $pdd;?>">More Photos</a></span>
                                            </p>
                                        </div>
                                    </div>
                                
                                
                                </div>
                            
                            
                              <?php  }} ?>
                            
                            
                            
                        </div>
                    </div> 
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                        <h4 class="mb-4">Take A Tour</h4>
                        <div class="block-16">
                      <figure>
                        <img src="images/hotel-6.jpg" alt="Image placeholder" class="img-fluid">
                        <a href="https://vimeo.com/45830194" class="play-button popup-vimeo"><span class="icon-play"></span></a>
                      </figure>
                    </div>
                    </div>
                    
                    
                    
                    
                       <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                        <h4 class="mb-5">Check Availability &amp; Booking</h4>
                        <div class="fields">
                            <div class="row">
                                <div class="col-md-6">
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="firstname">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email" name="email">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <input type="text" id="checkin_date" class="form-control" placeholder="Date from" name="checkin">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <input type="text" id="checkin_date" class="form-control" placeholder="Date to" name="checkout">
                              </div>
                            </div>
                                 <div class="col-md-12">
                              <div class="form-group">
                                <textarea rows="5" class="form-control" placeholder="Enter Message Inquiry" name="description"></textarea>
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <div class="select-wrap one-third">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select name="" id="" class="form-control" placeholder="Guest">
                                  <option value="0">Adults</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                </select>
                              </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                                <div class="form-group">
                                <div class="select-wrap one-third">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select name="" id="" class="form-control" placeholder="Children">
                                  <option value="0">Children</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                  <option value="7">7</option>
                                  <option value="8">8</option>
                                  <option value="9">9</option>
                                </select>
                              </div>
                              </div>
                          </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <input type="submit" value="Check Availability" class="btn btn-primary py-3">
                              </div>
                          </div>
                      </div>
                    </div>
                    </div>
                    
                    
                    
                    
                    
                    
                    
                <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                        <h4 class="mb-4">Related Hotels</h4>
                        <div class="row">         
                     <?php
     $p=$result->cityid;
     $sql = "SELECT * from hotel where cityid=:p";
     $query = $dbh -> prepare($sql);
     $query -> bindParam(':p', $p, PDO::PARAM_STR);
     $query->execute();
     $results=$query->fetchAll(PDO::FETCH_OBJ);
     $cnt=1;
     if($query->rowCount() > 0)
     {
     foreach($results as $result)
     {  ?>
               
                            <div class="col-md-3">
                                    <div class="destination">
                                        <a href="index?o=TourPackages&p=<?php echo htmlentities($result->id);?>" class="img img-2" style="background-image: url(images/room-4.jpg);"></a>
                                        <div class="text p-3">
                                            <div class="d-flex">
                                                <div class="one">
                                                    <h3><a href="index?o=TourPackages&p=<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->packagename);?></a></h3>
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
                                                    <span class="price per-price">$<?php echo htmlentities($result->usd);?><br><small>Ksh:<?php echo htmlentities($result->kes);?></small></span>
                                                </div>
                                            </div>
                                            <p><?php echo substr(($result->description),0,30);?></p>
                                            <hr>
                                            <p class="bottom-area d-flex">
                                                <span><i class="icon-map-o"></i>   <?php
     $p=$result->cityid;
           $pd=$result->countryid;
       $pdd=$result->id;
      
     $sql = "SELECT * from city where id=:p";
     $query = $dbh -> prepare($sql);
     $query -> bindParam(':p', $p, PDO::PARAM_STR);
     $query->execute();
     $results=$query->fetchAll(PDO::FETCH_OBJ);
     $cnt=1;
     if($query->rowCount() > 0)
     {
     foreach($results as $result)
     {  ?><?php echo htmlentities($result->cityname);?>  <?php  }} ?>,  <?php

     $sql = "SELECT * from country where id=:pd";
     $query = $dbh -> prepare($sql);
     $query -> bindParam(':pd', $pd, PDO::PARAM_STR);
     $query->execute();
     $results=$query->fetchAll(PDO::FETCH_OBJ);
     $cnt=1;
     if($query->rowCount() > 0)
     {
     foreach($results as $result)
     {  ?><?php echo htmlentities($result->countryname);?>  <?php  }} ?></span>
                                                <span class="ml-auto"><a href="">More Photos</a></span>
                                            </p>
                                        </div>
                                    </div>
                                
                                
                                </div>
                            
                            
                              <?php  }} ?>
                            
                            
                            
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    
                 
                 
                    
                    
                    
                    

                </div>
             </div> <!-- .col-md-8 -->
           </div>
         </div>
       </section> <!-- .section -->

                   <?php  }} ?>

    