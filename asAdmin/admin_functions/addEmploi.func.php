<?php
//create a functionn to insert emploi to base de donnée
function insertEmploi($fname,$lname,$sex,$address,$fdate,$tel,$cont,$mail,$disp,$fonc,$statut,$d_emp,$pass)
{
	global $db;
	$sql = "INSERT INTO utilisateur (nom, prenom, civilite, adresse, tel, email, date_naiss, lieu_naiss, diplom,fonction, statut,date_emp, mot_passe,date_added) VALUES (:nom, :prenom, :civilite, :adresse, :tel, :email, :date_naiss, :lieu_naiss, :diplom,:fonction, :statut,:date_emp, :mot_passe, current_timestamp())";

	$query = $db->prepare($sql);
	$query->execute(array(
			'nom'=>$fname, 'prenom'=>$lname, 'civilite'=>$sex, 'adresse'=>$address, 'tel'=>$tel, 'email'=>$mail,'date_naiss'=>$fdate, 'lieu_naiss'=>$cont, 'diplom'=>$disp,'fonction'=>$fonc, 'statut'=>$statut,'date_emp'=>$d_emp, 'mot_passe'=>$pass));
	$query->closeCursor();
}
function insertEtab($nom,$denom,$address,$cat,$tel,$mail,$fax)
{
	global $db;
	$sql = "INSERT INTO etablissement (nom_res, denomination, adresse, categorie,email, tel, fax) VALUES (:nom,:prenom, :adresse,:cat,:email,:tel,:fax)";

	$query = $db->prepare($sql);
	$query->execute(array(
			'nom'=>$nom, 'prenom'=>$denom,'adresse'=>$address,'cat'=>$cat,'email'=>$mail,'tel'=>$tel,'fax'=>$fax));
	$query->closeCursor();
}

function insertExtern($fname,$lname,$Nas, $email){

global $db;
	$sql = "INSERT INTO participantext(utilisateur, nationality, lieu_trav, Email,added) VALUES (:nom, :prenom,:civilite,:email, current_timestamp())";

	$query = $db->prepare($sql);
	$query->execute(array('nom'=>$fname, 'prenom'=>$Nas, 'civilite'=>$lname,'email'=>$email));
	$query->closeCursor();

}



function insertReservation($Nas,$dateDar,$dateDep){

global $db;
	$sql = "INSERT INTO reservation(nom_res, date_arriv, datte_dep, added_time) VALUES (:nom, :dar,:ddep, current_timestamp())";

	$query = $db->prepare($sql);
	$query->execute(array('nom'=>$Nas, 'dar'=>$dateDar, 'ddep'=>$dateDep));
	$query->closeCursor();

}
?>