
<?php
require_once "db.php";

     
   $query = "SELECT * FROM tourpackages";
    $result = mysqli_query($conn, $query);
 
    if (mysqli_num_rows($result) > 0) {
     while ($user = mysqli_fetch_array($result)) {
      $res[] = $user['packagename'];
        
     }
    } else {
      $res = array();
    }
    //return json res
    echo json_encode($res);


   

?>





  