<?php //?>
<div class="dashboardMenu">
 
  <a href="index.php?page=reservation" class="waves-effect waves-light btn"> Reservation<i class="material-icons right">list</i></a>
<a href="index.php?page=consultRes" class="waves-effect waves-light btn">Manage Reservation<i class="material-icons right">list</i></a>
</div>
<div class="dashboardCoreA">
  
  <p>Welcom <?php 
          $nan=$_SESSION['namee'];
  print_r($nan);
 echo "<p http-equiv='refresh'> date is: ".date(' Y-m-d')."</p>";

   ?>
</p>
