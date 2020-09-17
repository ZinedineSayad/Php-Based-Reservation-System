<?php
//create a functionn to insert data into the database
function insertRegisterData($type,$contexte,$titr,$ndate, $fdate,$loc,$budjet,$nbr,$Descreiption)
{
	global $db;

	$sql = "INSERT INTO evenement(type_even,context_even, titre_even,date_deb,date_fin,localisation, budjet, nbr_particip,descriptt_even,date_added) VALUES (:typ,:conx,:titr,:ddeb,:dafin, :loc,:prix,:nbr,:disc, current_timestamp())";

	$query = $db->prepare($sql);
	$query->execute(array(
		'typ'=>$type,'conx'=>$contexte,'titr'=>$titr,'ddeb'=>$ndate,'dafin'=>$fdate, 'loc'=>$loc,'prix'=>$budjet,'nbr'=>$nbr,'disc'=>$Descreiption
		));
	$query->closeCursor();
}
?>