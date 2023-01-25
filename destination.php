	<?php
     require_once('includes/config.php');?>


<section class="ftco-section ftco-destination">
    	<div class="container">
    		<div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
          	<span class="subheading">Featured</span>
            <h2 class="mb-4"><strong>Featured</strong> Destination</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="destination-slider owl-carousel ftco-animate">
    					<?php 
                        $sql = "SELECT *  FROM country";

       	$query = $dbh -> prepare($sql);
       	$query -> bindParam(':countryid', $countryid, PDO::PARAM_STR);
                         	$query -> bindParam(':name', $name, PDO::PARAM_STR);
       	$query->execute();
       	$results=$query->fetchAll(PDO::FETCH_OBJ);
       	$cnt=1;
       	if($query->rowCount() > 0)
       	{
       	foreach($results as $result)
       	{				?>


	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-6.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<h3><a href="#"><?php echo htmlentities($result->name);?></a></h3>
		    						<span class="listing">	
                                        
                                        
                                      20  
                                        </span>
		    					</div>
		    				</div>
	    				</div><?php  }} ?>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
