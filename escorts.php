
<?php error_reporting(0);?>
<div  style="background-image: url('images/bg_1.jpg'); width:100%; height:80px;"></div>

<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
        	<div class="col-lg-3 sidebar ftco-animate">
        		<div class="sidebar-wrap bg-light ftco-animate">
        			<h3 class="heading mb-4">Find Escort Close to you</h3>
        			<h9>Results Found <?php // echo $_SESSION['results']; ?></h9>
                
        			<form autocomplete="off" method="post" action="index?o=Cars">
        				<div class="fields">
		             
                            
                              <div class="autocomplete form-group" >
    <input class="form-control" id="myInput" type="text" name="search" placeholder="Car Name or Brand">
  </div>
   

                             

		            
		              <div class="form-group">
		                <input type="text" id="checkin_date" class="form-control" placeholder="Date from">
		              </div>
		              <div class="form-group">
		                <input type="text" id="checkin_date" class="form-control" placeholder="Date to">
		              </div>
		             <!-- <div class="form-group">
		              	<div class="range-slider">
		              		<span>
										    <input type="number" value="25000" min="0" max="120000"/>	-
										    <input type="number" value="50000" min="0" max="120000"/>
										  </span>
										  <input value="1000" min="0" max="120000" step="500" type="range"/>
										  <input value="50000" min="0" max="120000" step="500" type="range"/>
										  </svg>
										</div>
		              </div>-->
		              <div class="form-group">
		                <input type="submit" value="Search" class="btn btn-primary py-3 px-5">
		              </div>
		            </div>
	            </form>
                    
                           
                    
                    <script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

         
                        
                         
/*An array containing all the country names in the world:*/
var countries = ["GET", "getcar.php"];
                        
	                    
                        
  var car = <?php include ('getcar.php')?>;                     

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), car);
</script>
                
                
                    





   <!--<form method="post" action="index?o=Hotels">
 
  <input type="text" name="search" required/>
  <input type="submit" value="Search" class="btn btn-primary py-3 px-5"/>
</form> --> 

        		</div>
        	
          </div>




<?php include('carsearch.php'); ?>



<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script><style>.filterDiv {
    
  float: left;
  display: none;
    
}
            
        .show {
  display: block;
}

.containerrr {
  margin-top: 20px;
  overflow: hidden;
}
            
            .btnn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

.btnn:hover {
  background-color: #ddd;
}

.btnn.active {
  background-color: #666;
  color: white;
}
            
 </style>
          <div class="col-lg-9">
              <div id="myBtnContainer">
  <button class="btnn active" onclick="filterSelection('all')"> Show all</button><?php $sql = "SELECT * from city";

        $query = $dbh -> prepare($sql);
        //$query -> bindParam(':city', $city, PDO::PARAM_STR);
        $query->execute();
        $results=$query->fetchAll(PDO::FETCH_OBJ);
        $cnt=1;
        if($query->rowCount() > 0)
        {
        foreach($results as $result)
        {       ?><button class="btnn" onclick="filterSelection('<?php echo htmlentities($result->id);?>')"> <?php echo htmlentities($result->cityname);?></button><?php  }} ?>
  
   
          	<div class="row containerrr">


  <?php $sql = "SELECT * from vehicles";

        $query = $dbh -> prepare($sql);
        //$query -> bindParam(':city', $city, PDO::PARAM_STR);
        $query->execute();
        $results=$query->fetchAll(PDO::FETCH_OBJ);
        $cnt=1;
        if($query->rowCount() > 0)
        {
        foreach($results as $result)
        {       ?>


          		<div class="col-md-4 ftco-animate filterDiv <?php echo htmlentities($result->cityid);?>"> 
		    				<div class="destination">
		    					<a href="index?o=CarRent&p=<?php echo htmlentities($result->id);?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(photos/<?php echo htmlentities($result->Vimage1);?>);">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="index?o=CarRent&p=<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->VehiclesTitle);?></a></h3>
				    						<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star-o"></i>
				    							<span> Rating</span>
                                                <i class="icon-male"></i>5
                                              
                                                <i class="icon-suitcase"></i>2
                                                  <i class="icon-gear"></i>Auto
                                               
                                           
				    						</p>
			    						</div>
			    						<div class="two">
                                            <span class="price">$<?php echo htmlentities($result->PricePerDay);?></span><small>Per Day</small>
		    							</div>
		    							
		    						</div>
		    						<p><?php echo substr(($result->VehiclesOverview),0,24);?> </p>
		    						<p class="days"><span><?php echo substr(($result->VehiclesOverview),0,300);?></span></p>
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
		    							<span class="ml-auto"><a href="index?o=CarRent&p=<?php echo $pdd;?>">Discover</a></span>
                                        
                                        
                                        
                                       
		    						
		    						</p>
		    					</div>
		    				</div>
		    			</div>
		    		
<?php  }} ?><?php include('loader.php') ?>


          	</div>
          	
              
              
              
              
              
              
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section>
























        	