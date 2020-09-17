<?php
	include_once "admin_functions/affichService.func.php";
?>
<div class="dashboardMenu">
 <script src="../js/myjs.js"></script>
  <a href="index.php?page=adduser" class="waves-effect waves-light btn">Add Users<i class="material-icons right">add_box</i></a>
  <a href="index.php?page=addexternal" class="waves-effect waves-light btn">Add ParticipantExt<i class="material-icons right">add_box</i></a>
  <a href="index.php?page=addEvmt" class="waves-effect waves-light btn">add Evenementt<i class="material-icons right">add_box</i></a>
  
  <a href="index.php?page=consultUser" class="waves-effect waves-light btn">manage Users<i class="material-icons right">list</i></a>
  <a href="index.php?page=consultEvmt" class="waves-effect waves-light btn">manage evenement<i class="material-icons right">list</i></a>
  
</div>
<div class="dashboardCoreA">

	<h1 class="flow-text" style="text-align: center;"><b>Evenement disponible</b></h1>

	
			<table class="highlight" style="font-size: 0.7em;">
		        <thead>
		          <tr class="blue-text text-darken">
		          		<th>Id</th>
		              <th>titre</th>
		              <th>type</th>
		              <th>context</th>
		              <th>Date_debut</th>
		              <th>date_fin</th>
		              <th>localisation</th>
		              <th><b>Supprimer</b></th>
		              <th><a class="ne"  href="#" ><b>Modifier</b></a></th>
		              
		          </tr>
		        </thead>
		        <?php
		foreach (display_evnt() as $evenement)
	{
			
		
		?>
		        <tbody>
		          <tr> 	
		          	<td> <?=$evenement['id_even']?></td>
		          	<td> <?=$evenement['titre_even']?></td>
		            <td> <?=$evenement['type_even']?></td>
		            <td><?=$evenement['context_even']?></td>
		            <td> <?=$evenement['date_deb']?></td>
		            <td> <?=$evenement['date_fin']?></td>
		            <td> <?=$evenement['localisation']?></td>
		            <td id="delateEvenement" ><a class="ne"  href="#"  ><i class="material-icons">delete</i></a></td>
		            <td id="updateEvenent"><a class="ne"  href="#" ><i class="material-icons">edit</i></a></td>
		          </tr>

		          </tr>
		        </tbody>
		<?php 
}

	?>
       		
 <?php if(isset($_POST['updateProduct']))
		{
		$Nlot=htmlspecialchars(trim($_POST['n_lot']));
		$Edate=htmlspecialchars(trim($_POST['e_date']));
		$p_qtt=htmlspecialchars(trim($_POST['Qtt']));
			if(!empty($Nlot) && !empty($Edate) && !empty($p_qtt))
			{

				ubdate_product($Nlot, $Edate, $p_qtt);
			}else{?>
				<div class="eroreUpdate">
						<p><?php echo "Fill all the fields";?></p>
					</div><?php
			}
		}
		?>
</table>
<?php
		if(isset($_POST['delateEmp'])){
			global $db;
			$id=$_POST['id_emp'];
			$t= $db-> prepare("SELECT id_even FROM evenement where id_even= :lot");
		$t->execute(array('lot' =>$id));
		$answer= $t->fetch();
		if($answer){
			$sql = "DELETE FROM evenement WHERE id_even =  :id";
			$stmt = $db->prepare($sql);
			  
			$stmt->execute(array('id' =>$id));
		} else{?>
			<div class="dashboardError">
						<p><?php echo "Enter a valid id";?></p>
					</div><?php
		}

	}
		?>
<div class="updatePostProductManagement">
		<h1 class="flow-text"><i class="material-icons prefix">mode_edit</i>edit Evenement</h1>

	<form class="col s12" action="index.php?page=consultEvmt" method="POST">
      <div class="rows">
        
        <div class="a input-field">
          <input id="nlot" name="n_lot" type="number" class="validate" autocomplete="off">
          <label class="active" for="nlot">id</label>
        </div>
      <div class="rows">
        <div class="a input-field">
          <input class="datepicker"  id="edate" name="e_date" type="date" class="validate">
          <label class="active" for="edate">date Debut</label>
        </div>
      </div>
      <div class="rows">

		<div class="a a1 input-field">
          <input id="qtt" name="Qtt" type="date" class="validate" autocomplete="off">
          <label class="active" for="qtt"> Date fin</label>
        </div>
      </div>
      	<div class="row">
		<div class="col s12 m12">
			<button type="submit" name="updateProduct" id="reload" class="btn wave-effect wave-light green"><i class="material-icons right">save</i>Save</button>
			</div>
		</div>
		 <div class="row">
	   <div class="col s12 m6">
		 <input type="submit" name="concel" value="Concel" class="btn wave-effect wave-light black"></a>
			</div>
		</div>
	</div>
    </form>

	</div>


	<div class="delateEmployeeform">
<p>do you want to delate an eveneement ? please set the identifier</p>
	<form action="index.php?page=consultEvmt" method="POST">
		<div class="row">
				<div class="col s12 m12">
					<input type="text" name="id_emp" placeholder="identifier" autocomplete="off">
				</div>
			</div>
			<div class="row">
				<div class="col s12 m12">
					<input type="submit" name="delateEmp" value="Remove" class="btn wave-effect wave-light red">
				</div>
			</div>
			<div class="row">
				<div class="col s12 m12">
					<input type="submit" name="concelEmp" value="concel" class="btn wave-effect wave-light red">
				</div>
			</div>

	</form>
</div>