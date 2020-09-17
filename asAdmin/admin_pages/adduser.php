<?php
	include_once "admin_functions/addEmploi.func.php";
	if(isset($_POST['addfree']))
	{
		
    $fname=htmlspecialchars(trim($_POST['Fname']));
   $lname=htmlspecialchars(trim($_POST['Lname']));
   $sex=$_POST['sex'];
   $address=htmlspecialchars(trim($_POST['addres']));
    $fdate=$_POST['Fdate'];
   $cont=htmlspecialchars(trim($_POST['coun']));
   $tel=htmlspecialchars(trim($_POST['phone']));
    $mail=htmlspecialchars(trim($_POST['email']));
     $disp=htmlspecialchars(trim ($_POST['dip']));
      $fonc=htmlspecialchars(trim ($_POST['fonc']));
    $statut=htmlspecialchars(trim ($_POST['stat']));
      $d_emp=$_POST['dtt'];
   $pass=htmlspecialchars(trim ($_POST['pword']));

		if(!empty($fname) && !empty($lname) && !empty($sex) && !empty($address) && !empty($fdate) && !empty($cont)  && !empty($mail)  && !empty($disp)  && !empty($fonc)  && !empty($statut) && !empty($d_emp) && !empty($pass))
		{
			insertEmploi($fname,$lname,$sex,$address,$fdate,$tel,$cont,$mail,$disp,$fonc,$statut,$d_emp,$pass);
			?>
				<div class="dsucess">
						<p><?php echo "L'annonce est ajouté avec succès";?></p>
					</div>
			<?php

		}else{
			
				?>

					<div class="dashboardError">
						<p><?php echo "veuillez remplir toutes les cases";?></p>
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
<div class="dashboardCoreA" >
		<h1 class="flow-text"><i class="material-icons prefix">mode_edit</i>Ajouter un Participant Intern</h1>
<div class="row">
	<form class="col s12" action="index.php?page=adduser" method="POST">
      <div class="rows">

        <div class="a a1 input-field">
          <input id="nom" name="Fname" type="text" class="validate" autocomplete="off">
          <label class="active" for="nom">Nom</label>
        </div>
        
        <div class="a a1 input-field">
          <input id="lnom" name="Lname" type="text" class="validate" autocomplete="off">
          <label class="active" for="lnom">Prénom</label>
        </div>
    </div>

                <div class="rows">
                  <div class="a a1">
                  <label class="active" style="font-size: 0.7em;">Civilite</label> <br>
                  <input type="radio" name="sex" value="Masculin" id="mal" checked /> <label for="mal">Masculin</label>
                  <input type="radio" name="sex" value="Feminin" id="female"/> <label for="female">Feminin</label>
                  
                    </div>
                    <div class="a a1 input-field">
                      <input id="dat" name="addres" type="text" class="validate" autocomplete="off">
                      <label class="active" for="dat">Adresse</label>
                    </div>
                </div>


          <div class="rows"> 
           <div class="a a1 input-field">
                <input id="dat" name="Fdate" type="date" class="validate" autocomplete="off">
                <label class="active" for="dat">Date de naissance</label>
              </div>

            <div class="a a1 input-field">
                <input id="pay" name="coun" type="text" class="validate" autocomplete="off">
                <label class="active" for="pay">lieu de naissance</label>
              </div>
              
            </div>

  <div class="rows"> 
          <div class="a a1 input-field">
          <input id="cont" name="phone" type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{1}" class="validate"  placeholder="012-345-678-9" maxlength="14" autocomplete="off">
          <label class="active" for="cont">Numéro</label>
        </div>

            <div class="a a1 input-field">
                <input id="pay" name="email" type="email" class="validate" autocomplete="off">
                <label class="active" for="pay">Email</label>
              </div>
              
            </div>

      <div class="rows">
        <div class="input-field col s12 m6 ">
          <input id="ppa" name="dip" type="text" class="validate" placeholder="Adress of the company" autocomplete="off"> <label class="active" for="ppa">Diplom</label>
        </div>
         <div class="a a1 input-field">
          <input id="Email" name="fonc" type="text" class="validate" autocomplete="off">
          <label class="active" for="Email">fonction</label>
        </div>
    </div>
      <div class="rows">
        <div class="a a1 input-field">
          <input id="Email" name="stat" type="text" class="validate" autocomplete="off">
          <label class="active" for="Email">Statut</label>
        </div><div class="a a1 input-field">
          <input id="Email" name="dtt" type="date" class="validate" autocomplete="off">
          <label class="active" for="Email">date de emp</label>
        </div>
</div>
 <div class="row">
      <div class="a a1 input-field">
          <input id="pass" name="pword" type="password" class="validate" autocomplete="off">
          <label class="active" for="pass">Mot de passe</label>
        </div>
       </div>
      <div class="row">
        <div class="col s6 m4">
          <input type="submit" id="a" name="addfree" value="Enregistrer" class="btn wave-effect wave-light green">
        </div>
        <div class="col s6 m4">
          <input type="reset" value="Reset" class="btn wave-effect wave-light black">
        </div>
      </div>
    </form>
</div>
	<!--
	<div class="dashboardErrorAddser">
		<p>lk,lknlnln</p>
	</div>
	-->
</div>