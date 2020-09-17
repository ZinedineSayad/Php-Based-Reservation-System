<?php
	include_once "admin_functions/addEmploi.func.php";
	if(isset($_POST['addEmp']))
	{
		
    $fname=htmlspecialchars(trim($_POST['Fname']));
   $lname=htmlspecialchars(trim($_POST['Lname']));
   $email=htmlspecialchars(trim($_POST['email']));
   $Nas=$_POST['sex'];
  
   

		if(!empty($fname) && !empty($lname) && !empty($Nas) && !empty($email))
		{
      global $db;
            $t= $db-> prepare("SELECT utilisateur,nationality FROM participantext where utilisateur= :fname and nationality=:nas ");
            $t->execute(array('fname'=>$fname, 'nas'=>$Nas));
            $answer= $t->fetch();

          if($answer){?>
            <div class="dashboardErrorAddEnt">
                  <p><?php echo "User already exists ";?></p>
                </div><?php
          }
              else{ 
      			insertExtern($fname,$lname,$Nas,$email);
      			?>
      				<div class="dsucess">
      						<p><?php echo "Participant est ajouté avec succès";?></p>
      					</div>
      			<?php }

		}else{
			
				?>

					<div class="dashboardError">
						<p><?php echo "veuillez remplir toutes les cases";?></p>
					</div>
				<?php
			
		}}
?>
<div class="dashboardMenu">
 
  <a href="index.php?page=adduser" class="waves-effect waves-light btn">Add Users<i class="material-icons right">add_box</i></a>
  <a href="index.php?page=addexternal" class="waves-effect waves-light btn">Add ParticipantExt<i class="material-icons right">add_box</i></a>
  <a href="index.php?page=addEvmt" class="waves-effect waves-light btn">add Evenementt<i class="material-icons right">add_box</i></a>
  
  <a href="index.php?page=consultUser" class="waves-effect waves-light btn">manage Users<i class="material-icons right">list</i></a>
  <a href="index.php?page=consultEvmt" class="waves-effect waves-light btn">manage evenement<i class="material-icons right">list</i></a>
  

</div>


<div class="dashboardCoreA" >
		<h1 class="flow-text"><i class="material-icons prefix">mode_edit</i>Ajouter un Participant Extern</h1>
<div class="row">
	<form class="col s12" action="index.php?page=addexternal" method="POST">
      <div class="rows">

        <div class="a a1 input-field">
          <input id="nom" name="Fname" type="text" class="validate" autocomplete="off">
          <label class="active" for="nom">Utilisateure</label>
        </div>
        
        <div class="a a1 input-field">
          <input id="lnom" name="Lname" type="text" class="validate" autocomplete="off">
          <label class="active" for="lnom">lieu de travaille</label>
        </div>
    </div>

                <div class="rows">
                  <div class="a a1">
                  <label class="active" style="font-size: 0.7em;">Nationality</label> <br>
                  <input type="radio" name="sex" value="Algeria" id="mal" checked /> <label for="mal">Algeria</label>
                  <input type="radio" name="sex" value="foreign" id="female"/> <label for="female">foreign</label>
                    </div>
                    <div class="a a1 input-field">
          <input id="lnom" name="email" type="Email" class="validate" autocomplete="off">
          <label class="active" for="lnom">Email</label>
        </div>
                  </div>
    <div class="row">
        <div class="col s12 m6">
          <input type="submit" name="addEmp" value="Enregistrer" class="btn wave-effect wave-light green"> 
          
        </div>
        <div class="col s12 m6">
          <input type="reset" value="Reset" class="btn wave-effect wave-light black"> 
          
        </div>
      </div>
       
    </form>
</div>
</div>