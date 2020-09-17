<?php
//desplay all product
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
//job
function display_evnt()
	{
		global $db;
		$req = $db->query("  SELECT a.id_even,a.titre_even,a.type_even, a.context_even ,a.date_deb,a.date_fin, a.localisation,a.budjet,a.nbr_particip FROM evenement  AS a ORDER BY a.date_deb");
		$results = [];
		while($response = $req->fetch())
		{
			$results[] = $response;
		}
		return $results;
		$req->closeCursor();
	}
	
function display_emp1()
	{
		global $db;

		$req = $db->query("  SELECT a.id_util, a.nom,a.prenom,a.email,a.date_emp,a.diplom, a.fonction,a.statut FROM utilisateur as a ORDER by a.date_emp");
		$results = [];
		while($response = $req->fetch())
		{
			$results[] = $response;
		}
		return $results;
		$req->closeCursor();
	}
	function display_emp2()
	{
		global $db;

		$req = $db->query("  SELECT a.id_ext, a.utilisateur,a.nationality,a.email,a.lieu_trav,a.added FROM participantext as a ORDER by a.added");
		$results = [];
		while($response = $req->fetch())
		{
			$results[] = $response;
		}
		return $results;
		$req->closeCursor();
	}
function ubdate_product($Nlot, $Edate, $p_qtt)
	{
		global $db;
		$t= $db-> prepare("SELECT id_even FROM evenement where id_even= :lot");
		$t->execute(array('lot' =>$Nlot));
		$answer= $t->fetch();
		if($answer){
			
			$query = "UPDATE evenement SET date_deb = :Edate, date_fin = :Qtt WHERE id_even = :Nlot";
			$req = $db->prepare($query);
			$req->execute(array(
				'Edate' => $Edate,
				'Qtt' =>$p_qtt,
				'Nlot' => $Nlot
				));		
		$req->closeCursor();
		?>
			<div class="dsucess">
						<p><?php echo "Uppdated Succefuly";?></p>
					</div><?php
	}else{?>
			<div class="dashboardError">
						<p><?php echo "Enter a valid id";?></p>
					</div><?php
		}
			
	}

function ubdate_user1($Nlot, $Email, $statut)
	{
		global $db;
		$t= $db-> prepare("SELECT id_util FROM utilisateur where id_util= :lot");
		$t->execute(array('lot' =>$Nlot));
		$answer= $t->fetch();
		if($answer){
			
			$query = "UPDATE utilisateur SET email = :Edate, statut = :Qtt WHERE id_util = :Nlot";
			$req = $db->prepare($query);
			$req->execute(array(
				'Edate' => $Email,
				'Qtt' =>$statut,
				'Nlot' => $Nlot
				));		
		$req->closeCursor();
		?>
			<div class="dsucess">
						<p><?php echo "Uppdated Succefuly";?></p>
					</div><?php
	}else{?>
			<div class="dashboardError">
						<p><?php echo "Enter a valid id";?></p>
					</div><?php
		}
			
	}
?>

