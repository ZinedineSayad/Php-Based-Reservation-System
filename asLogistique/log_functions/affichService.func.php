<?php
//desplay all product
function display_evnt()
	{
		global $db;
		$req = $db->query("  SELECT a.titre_even,b.name, b.email, c.datte_dep FROM evenement  AS a ,etablissement AS b , reservation as c where a.titre_even=b.name and b.name=c.titre_even");
		$results = [];
		while($response = $req->fetch())
		{
			$results[] = $response;
		}
		return $results;
		$req->closeCursor();
	}


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
function display_emp1()
	{
		global $db;

		$req = $db->query("  SELECT a.nom,a.prenom,a.email,a.date_emp,a.diplom, a.fonction,a.statut FROM utilisateur as a ORDER by a.date_emp");
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

		$req = $db->query("  SELECT a.utilisateur,a.nationality,a.email,a.lieu_trav,a.added FROM participantext as a ORDER by a.added");
		$results = [];
		while($response = $req->fetch())
		{
			$results[] = $response;
		}
		return $results;
		$req->closeCursor();
	}

	function insertRESE($type,$name, $p, $q)
{
  global $db;
        
  
  $query = $db->prepare("INSERT INTO reservation (nom_res,titre_even,date_arriv,datte_dep,added_time) VALUES (:name, :Ptt, :total, :type, current_timestamp())");
  $query->execute(array("name" => $type, "Ptt" => $name, "total"=>$p, "type"=> $q));
  $query->closeCursor();

}
	?>

