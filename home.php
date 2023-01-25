 <?php


if (!isset($_SESSION["user_id"]) && $_SESSION["user_id"] == "") {
  // user already logged in the site
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
   <?php
     require_once('config.php');
     include_once ('confi.php');?>
    <?php include('header.php');?>

  <body>
   <?php include('topnav.php');?> 
  
 
 <?php

@$opt=$_GET['o'];

error_reporting(0);
    ?>


        <?php
if($opt=="")
{
include('background.php');
}
      
   
   // if($opt=="")
 // {
// include('loader.php');
// }

else
{
      if($opt=="About")
      {
      include('abouts.php');
      }


     else if($opt=="Destination")
      {
      include('destination.php');
      }


       else if($opt=="Packages")
      {
      include('packages.php');
      }

       else if($opt=="TourPackages")
      {
      include('tourpackage-single.php');
      }


       else if($opt=="Carrental")
      {
      include('carrental.php');
      }


       else if($opt=="Hotels")
      {
      include('hotels.php');
      }


 else if($opt=="Hotel")
      {
      include('hotel-single.php');
      }
    

       else if($opt=="Cars")
      {
      include('cars.php');
      }

       else if($opt=="Restaurant")
      {
      include('restaurant.php');
      }
    

     else if($opt=="Blog")
      {
      include('blog.php');
      }
    

  
     
    
    
    
    
    
    
   

}
?>














    
    <?php include('newsletter.php');?>  
 
 <?php include('footer.php');?> 

    
  

  

<?php include('scripts.php');?> 
  
    
  </body>
</html>