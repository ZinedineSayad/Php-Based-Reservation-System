<nav>
    <div class="nav-wrapper blue darken-4">
    	<div class="container">
		      <a href="#!" class="brand-logo"><?php 
		      $naom=$_SESSION['nam'];
		      $pnom=$_SESSION['pnm'];
		      print_r($naom); echo '  ';
		      print_r($pnom);
		      ?></a>
		      <ul class="right hide-on-med-and-down">
		       
		        <li> <a href="index.php?page=" class="waves-effect waves-light btn">Accueil<i class="material-icons right">group</i></a></li>
		        <li><a href="index.php?page=logout" id="logout" class="waves-effect waves-light btn">Deconnecter<i class="material-icons right">person</i></a></li>
		      </ul>
		</div>
    </div>
  </nav>