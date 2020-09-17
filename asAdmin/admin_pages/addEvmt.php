<?php
	include_once "admin_functions/addAnn.func.php";
	if(isset($_POST['added']))
	{
		$titr = htmlspecialchars(trim($_POST['name']));
		$type = htmlspecialchars(trim($_POST['type']));
		$loc = htmlspecialchars(trim($_POST['loc']));
		$ndate= $_POST['ddeb'];
		$fdate = $_POST['ddfin'];
		$nbr = $_POST['vkv'];
		$contexte = $_POST['sex'];
		$Descreiption = htmlspecialchars(trim($_POST['kk']));
		$budjet=$_POST['prix'];
		if(!empty($titr) && !empty($type) && !empty($Descreiption) && !empty($loc) && !empty($ndate) && !empty($fdate)  && !empty($contexte) && !empty($nbr))
		{

			insertRegisterData($type,$contexte,$titr,$ndate, $fdate,$loc,$budjet,$nbr,$Descreiption);
			?>
				<div class="dsucess">
						<p><?php echo "evenement ajouté avec succès";?></p>
					</div>
			<?php

		}else{
			
				?>

					<div class="dashboardError">
						<p><?php echo "Veuillez remplir toutes les cases";?></p>
					</div>
				<?php
			
		}
	}

?>

<div class="dashboardMenu">
 
  <a href="index.php?page=adduser" class="waves-effect waves-light btn">Add Users<i class="material-icons right">add_box</i></a>
  <a href="index.php?page=addexternal" class="waves-effect waves-light btn">Add ParticipantExt<i class="material-icons right">add_box</i></a>
  <a href="index.php?page=addEvmt" class="waves-effect waves-light btn">add Evenementt<i class="material-icons right">add_box</i></a>
  
  <a href="index.php?page=consultUser" class="waves-effect waves-light btn">manage Users<i class="material-icons right">list</i></a>
  <a href="index.php?page=consultEvmt" class="waves-effect waves-light btn">manage evenement<i class="material-icons right">list</i></a>
  

</div>
<div class="dashboardCoreA">
<!--<div class="page-header"><h5 class="coll"><strong><i class="glyphicon glyphicon-info-sign"></i>       Mes informations:</strong></h5></div>-->
	<form action="index.php?page=addEvmt" method="POST">
	<h1 class="flow-text">Ajouter un evenement</h1>
		<div class="row">
			<div class="col s12 m6">Titre
				<input type="text" name="name" placeholder="Titre de service" autocomplete="off">
			</div>
			<div class="col s12 m6">type de l'evenement
				<input type="text" name="type" placeholder="type de service" autocomplete="off">
			</div>
		</div>

		<div class="row">
			<div class="col s12 m6">Localisation
				<input type="text" name="loc" placeholder="localisation" autocomplete="off">
			</div>

	<div class="col s12 m6">Budjet
				<input type="number" name="prix" placeholder="budjet" autocomplete="off">
			</div>

		</div>
		<div class="row">
			<div class="col s12 m6">Date de debut
				<input type="date" name="ddeb" autocomplete="off">
			</div>

	<div class="col s12 m6">date de fin
				<input type="date" name="ddfin" autocomplete="off">
			</div>

		</div>
		<div class="row">
			<div class="col s12 m12">Description
				<input type="text" id="usrform" name="kk" placeholder="Descreiption" autocomplete="off">
			</div>
			<div class="row">
			<div class="a a1 col s12 m6">
				
                  <label class="active">Contexte</label> <br>
                  <input type="radio" name="sex" value="Externe" id="mal" checked /> <label for="mal">Externe</label>
                  <input type="radio" name="sex" value="Interne" id="female"/> <label for="female">Interne</label>
                    
			</div>

	<div class="col s12 m6">nombre de participant
				<input type="number" name="vkv" placeholder="nbr_particip" autocomplete="off">
			</div>
			
		</div>

		</div>
		
			<div class="row">
				<div class="col s12 m6">
					<input type="submit" name="added" value="Enregistrer" class="btn wave-effect wave-light green"> 
					
				</div>
				<div class="col s12 m6">
					<input type="reset" value="Reset" class="btn wave-effect wave-light black"> 
					
				</div>
			</div>

	</form>
	<!--
	<div class="dashboardErrorAddOffer">
		<p>lk,lknlnln</p>
	</div>
	-->
</div>