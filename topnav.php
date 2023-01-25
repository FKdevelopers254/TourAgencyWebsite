<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index">EAST AFRICAN SAFARIS.</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="index?o=About" class="nav-link">About</a></li>
          <li class="nav-item"><a href="index?o=Packages" class="nav-link">Tour Packages</a></li>
          <li class="nav-item"><a href="index?o=Hotels" class="nav-link">Hotels</a></li>
          <li class="nav-item"><a href="index?o=Cars" class="nav-link">Car Rentals</a></li>
            <li class="nav-item"><a href="index?o=Contact" class="nav-link">Contact</a></li>
         
           <li class="nav-item active cta" onclick="document.getElementById('id01').style.display='block'" >


<?php

  
if (isset($_SESSION['user_id']))
{
  echo '';
}
else
{
  echo '<a  class="nav-link"><span>Login</span></a>';
}
  

?>
            </li>

 



  




      <!--    <li class="nav-item cta " onclick="document.getElementById('id02').style.display='block'">php

  
if (isset($_SESSION['user_id']))
{
  echo '<a  class="nav-link"><span>'.$_SESSION['name'].'</span></a>';
}
else
{
  echo '';
}
  

?></li> -->

<li class="nav-item active cta w3-dropdown-hover ">
      <button class="w3-button" style="color: red;"><?php

  
if (isset($_SESSION['user_id']))
{
  echo $_SESSION['name'];
}
else
{
  echo '';
}
  

?></button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="index?o=Profile" class="w3-bar-item w3-button">Profile</a>
        <a href="index?o=Favourite" class="w3-bar-item w3-button">Favourites</a>
        <a href="index?o=Settings" class="w3-bar-item w3-button">Settings</a>
        <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
      </div>
    </li>

        </ul>
      </div>




<!--  THE MODAL-->

 
 

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>GOOGLE AUTHENTICATION</h2>
      </header>
      <div class="w3-container">
        <BR>
         <div class="col-4">
            <a  href="login.php" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
             </a> </div></BR>BR> </div>
      <footer class="w3-container w3-teal">
        <p>Modal Footer</p>
      </footer>
    </div>
  </div>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">




  








    </div>
  </nav>

