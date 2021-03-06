<?php
	include_once "admin_functions/affichService.func.php";
?>
<div class="dashboardMenu">
 
  <a href="index.php?page=adduser" class="waves-effect waves-light btn">Add Users<i class="material-icons right">add_box</i></a>
  <a href="index.php?page=addexternal" class="waves-effect waves-light btn">Add ParticipantExt<i class="material-icons right">add_box</i></a>
  <a href="index.php?page=addEvmt" class="waves-effect waves-light btn">add Evenementt<i class="material-icons right">add_box</i></a>
  
  <a href="index.php?page=consultUser" class="waves-effect waves-light btn">manage Users<i class="material-icons right">list</i></a>
  <a href="index.php?page=consultEvmt" class="waves-effect waves-light btn">manage evenement<i class="material-icons right">list</i></a>
  
</div>
<div class="dashboardCoreA" class="flow-text" style="text-align: center;">

	<h1 class="flow-text" style="text-align: center;"><b>Utilisateur</b></h1>

	<a href="index.php?page=consultintrn" class="waves-effect waves-light btn">Interne<i class="material-icons right">list</i></a>
<a href="index.php?page=consultextrn" class="waves-effect waves-light btn">Externe<i class="material-icons right">list</i></a>
			
<table class="a highlight" style="font-size: 0.8em;">
		        <thead>
		          <tr class="blue-text text-darken">
		              <th>id</th>
		              	<th>Nom</th>
		              <th>Email</th>
		              <th>Diplom</th>
		              <th>Fonction</th>
		              <th>Enrolement</th>
		              <th><b>suprimer</b></a></th>
		              <th><b>Modifier</b></a></th>
		          </tr>
		        </thead>
		       <?php
		foreach (display_emp1() as $users)
	{
		?>
		        <tbody>
		          <tr>
		          	<td><?=$users['id_util']?></td>
		            <td><?=$users['nom']?></td>
		            <td> <?=$users['email']?></td>
		            <td> <?=$users['diplom']?></td>
		            <td> <?=$users['fonction']?></td>
		            <td><?= date('Y-m-d', strtotime($users['date_emp']));?></td>
		            <td  id="delateEvenement"><a class="ne"  href="#" ><i class="material-icons">delete</i></a></td>
		            <td id="updateEvenent" ><a class="ne"  href="#" ><i class="material-icons">edit</i></a></td>
		          </tr>

		          </tr>
		        </tbody>
		<?php }?>
	</table>
</div>
<?php if(isset($_POST['updateuser']))
		{
		$Nlot=htmlspecialchars(trim($_POST['n_lot']));
		$Email=htmlspecialchars(trim($_POST['e_date']));
		$statut=htmlspecialchars(trim($_POST['Qtt']));
			if(!empty($Nlot) && !empty($Email) && !empty($statut))
			{

				ubdate_user1($Nlot, $Email, $statut);
			}else{?>
				<div class="eroreUpdate">
						<p><?php echo "Fill all the fields";?></p>
					</div><?php
			}
		}
		
		if(isset($_POST['delateuser'])){
			global $db;
			$id=$_POST['id_emp'];
			$t= $db-> prepare("SELECT id_util FROM utilisateur where id_util= :lot");
		$t->execute(array('lot' =>$id));
		$answer= $t->fetch();
		if($answer){
			$sql = "DELETE FROM utilisateur WHERE id_util =  :id";
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
		<h1 class="flow-text"><i class="material-icons prefix">mode_edit</i>edit utilisateur</h1>

	<form class="col s12" action="index.php?page=consultintrn" method="POST">
      <div class="rows">
        
        <div class="a input-field">
          <input id="nlot" name="n_lot" type="number" class="validate" autocomplete="off">
          <label clas="active" for="nlot">id</label>
        </div>
      <div class="rows">
        <div class="a input-field">
          <input class="datepicker"  id="edate" name="e_date" type="text" class="validate" autocomplete="off">
          <label class="active" for="edate">Email</label>
        </div>
      </div>
      <div class="rows">

		<div class="a a1 input-field">
          <input id="qtt" name="Qtt" type="text" class="validate" autocomplete="off">
          <label class="active" for="qtt"> statut</label>
        </div>
      </div>
      	<div class="row">
		<div class="col s12 m12">
			<button type="submit" name="updateuser" id="reload" class="btn wave-effect wave-light green"><i class="material-icons right">save</i>Save</button>
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
<p>do you want to delate a user ? please set the identifier</p>
	<form action="index.php?page=consultintrn" method="POST">
		<div class="row">
				<div class="col s12 m12">
					<input type="text" name="id_emp" placeholder="identifier" autocomplete="off">
				</div>
			</div>
			<div class="row">
				<div class="col s12 m12">
					<input type="submit" name="delateuser" value="Remove" class="btn wave-effect wave-light red">
				</div>
			</div>
			<div class="row">
				<div class="col s12 m12">
					<input type="submit" name="concelEmp" value="concel" class="btn wave-effect wave-light red">
				</div>
			</div>

	</form>
</div>