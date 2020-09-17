<?php //?>
<div class="dashboardMenu">
 
  <a href="index.php?page=adduser" class="waves-effect waves-light btn">Add Users<i class="material-icons right">add_box</i></a>
  <a href="index.php?page=addexternal" class="waves-effect waves-light btn">Add ParticipantExt<i class="material-icons right">add_box</i></a>
  <a href="index.php?page=addEvmt" class="waves-effect waves-light btn">add Evenementt<i class="material-icons right">add_box</i></a>
  
  <a href="index.php?page=consultUser" class="waves-effect waves-light btn">manage Users<i class="material-icons right">list</i></a>
  <a href="index.php?page=consultEvmt" class="waves-effect waves-light btn">manage evenement<i class="material-icons right">list</i></a>
  

</div>
<div class="dashboardCoreA">
  
  <p>Welcom <?php 
          $nan=$_SESSION['name'];
  print_r($nan);
 echo "<p http-equiv='refresh'> date is: ".date(' Y-m-d')."</p>";

   ?>
</p>
