<?php
//create a functionn to insert data into the database
function insertRegisterData($n, $t, $Descreiption, $prix)
{
	global $db;
	
		$ent=$_SESSION['nam'];
	$sql = "INSERT INTO services(name,type, descr, prix, date_a) VALUES (:name,:type,:dessc, :rix, current_timestamp())";

	$query = $db->prepare($sql);
	$query->execute(array(
		"name" => $n,
		"type" =>$t,
		"dessc" =>$Descreiption,
		"rix" =>$prix
		));//
	$query->closeCursor();
	$s = "INSERT INTO services_added_by(Ent,id_service) VALUES (:ent, LAST_INSERT_ID())";

	$qu = $db->prepare($s);
	$qu->execute(array("ent" => $ent));
	$qu->closeCursor();
}
function insertRegisterDatF($n, $t, $Descreiption, $prix)
{
	global $db;
	
		$ent=$_SESSION['Free_id'];
	$sql = "INSERT INTO services(name,type, descr, prix, date_a) VALUES (:name,:type,:dessc, :rix, current_timestamp())";

	$query = $db->prepare($sql);
	$query->execute(array(
		"name" => $n,
		"type" =>$t,
		"dessc" =>$Descreiption,
		"rix" =>$prix
		));//
	$query->closeCursor();
	$s = "INSERT INTO services_added_by(user,id_service) VALUES (:ent, LAST_INSERT_ID())";

	$qu = $db->prepare($s);
	$qu->execute(array("ent" => $ent));
	$qu->closeCursor();
}
//desplay all services
function display_Service()
	{
		global $db;

		$req = $db->query("  SELECT b.Ent,b.user, b.id_service, a.name, a.type,a.descr,a.prix, a.date_a FROM services_added_by AS b, services AS a where a.id_service=b.id_service ORDER BY a.date_a");
		$results = [];
		while($response = $req->fetch())
		{
			$results[] = $response;
		}
		return $results;
		$req->closeCursor();
	}
function display_evnt()
	{
		global $db;
		$req = $db->query("  SELECT a.titre_even,a.type_even, a.context_even ,a.date_deb,a.date_fin, a.localisation,a.descriptt_even,a.nbr_particip FROM evenement  AS a WHERE a.context_even='Interne' ORDER BY a.date_deb");
		$results = [];
		while($response = $req->fetch())
		{
			$results[] = $response;
		}
		return $results;
		$req->closeCursor();
	}
	?>
