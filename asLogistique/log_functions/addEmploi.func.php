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
	$sql = "INSERT INTO etablissement (name, denomination, adresse, categorie,email, tel, fax) VALUES (:nom,:prenom, :adresse,:cat,:email,:tel,:fax)";

	$query = $db->prepare($sql);
	$query->execute(array(
			'nom'=>$nom, 'prenom'=>$denom,'adresse'=>$address,'cat'=>$cat,'email'=>$mail,'tel'=>$tel,'fax'=>$fax));
	$query->closeCursor();
}

function insertRestut($nom,$nbr,$menu,$besoin,$frais)
{
	global $db;
	$sql = "INSERT INTO resturation (nom_res, nombre_palce, menu,besoin_rest,budjet_rest) VALUES (:nom,:prenom, :adresse,:cat,:email)";

	$query = $db->prepare($sql);
	$query->execute(array(
			'nom'=>$nom, 'prenom'=>$nbr,'adresse'=>$menu,'cat'=>$besoin,'email'=>$frais));
	$query->closeCursor();
}


function insertHeberge($titre,$nom,$frais,$type,$besoin)
{	

	global $db;
	$sql = "INSERT INTO hebergement (nom_res,type_piece,nom_piece,besoin_heb,budjet) VALUES (:nom,:prenom, :adresse,:cat,:fax)";

	$query = $db->prepare($sql);
	$query->execute(array(
			'nom'=>$titre, 'prenom'=>$type,'adresse'=>$nom,'cat'=>$besoin,'fax'=>$frais));
	$query->closeCursor();
}
function insertsalle($nom,$capacity,$besoin,$prix)
{
	global $db;
	$sql = "INSERT INTO salle (nom_res, capacity, besoin_sale, budjet_sale) VALUES (:nom,:cat,:bsale,:prix)";

	$query = $db->prepare($sql);
	$query->execute(array(
			'nom'=>$nom,'cat'=>$capacity,'bsale'=>$besoin,'prix'=>$prix));
	$query->closeCursor();
}



function insertExtern($fname,$lname,$Nas, $email){

global $db;
	$sql = "INSERT INTO participantext(utilisateur, nationality, lieu_trav, Email,added) VALUES (:nom, :prenom,:civilite,:email, current_timestamp())";

	$query = $db->prepare($sql);
	$query->execute(array('nom'=>$fname, 'prenom'=>$Nas, 'civilite'=>$lname,'email'=>$email));
	$query->closeCursor();

}

function insertTransportAndCh($nom, $matri, $type, $marke, $model, $nbr, $prix, $name, $prenom, $email, $phon, $catt)
{
	global $db;
	$sql = "INSERT INTO transport (nom_res,	immatriculation, type_transport, marque, modele, nbr_place, frais) VALUES (:nom,:prenom, :adresse,:cat,:email,:tel,:fax)";

	$query = $db->prepare($sql);
	$query->execute(array(
			'nom'=>$nom, 'prenom'=>$matri,'adresse'=>$type,'cat'=>$marke,'email'=>$model,'tel'=>$nbr,'fax'=>$prix));
	$query->closeCursor();

	$sl = "INSERT INTO chauffeure (id_transp, nom, prenom,	email, tel, categorie_prm) VALUES (last_insert_id(), :nom , :preom,:email,:tel,:catt)";

	$q = $db->prepare($sl);
	$q->execute(array('nom'=>$name, 'preom'=>$prenom,'email'=>$email,'tel'=>$phon,'catt'=>$catt));
	$q->closeCursor();
}


function insertReservation($Nas,$dateDar,$dateDep){

global $db;
	$sql = "INSERT INTO reservation(nom_res, date_arriv, datte_dep, added_time) VALUES (:nom, :dar,:ddep, current_timestamp())";

	$query = $db->prepare($sql);
	$query->execute(array('nom'=>$Nas, 'dar'=>$dateDar, 'ddep'=>$dateDep));
	$query->closeCursor();

}
?>