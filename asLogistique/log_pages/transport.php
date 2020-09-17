
<div class="dashboardMenu">
 
  <a href="index.php?page=reservation" class="waves-effect waves-light btn"> Reservation<i class="material-icons right">list</i></a>
<a href="index.php?page=consultRes" class="waves-effect waves-light btn">Manage Reservation<i class="material-icons right">list</i></a>
</div>
<div class="dashboardCoreA" class="flow-text" style="text-align: center;">

  <h1 class="flow-text" style="text-align: center;"><b>Reservation</b></h1>
<div class="flow-text" style="text-align: center; padding-top: 10px;">
<a href="index.php?page=transport" class="waves-effect waves-light btn">Transport<i class="material-icons right">list</i></a>
  <a href="index.php?page=resturant" class="waves-effect waves-teal waves-ripple btn">Resturant<i class="material-icons right">add_box</i></a>
<a href="index.php?page=hebergement" class="waves-effect waves-light btn">Hebergement<i class="material-icons right">add_box</i></a>
<a href="index.php?page=salle" class="waves-effect waves-light btn">Salle<i class="material-icons right">add_box</i></a>
    </div>
      
   <?php
  include_once "log_functions/addEmploi.func.php";
  if(isset($_POST['addfree']))
  {
    

    $nom=$_POST['titre'];
   $matri=htmlspecialchars(trim($_POST['immatriculation']));
   $type=htmlspecialchars(trim($_POST['type_transport']));
   $marke=htmlspecialchars(trim($_POST['marque']));
   $model=htmlspecialchars(trim($_POST['modele']));
   $nbr=htmlspecialchars(trim($_POST['nbr_place']));
$prix=htmlspecialchars(trim($_POST['frais']));
$name=htmlspecialchars(trim($_POST['nom']));
    $prenom=htmlspecialchars(trim($_POST['prenom']));
    $email=htmlspecialchars(trim($_POST['email']));
   $phon=htmlspecialchars(trim($_POST['tel']));
     $catt=htmlspecialchars(trim($_POST['categorie_prm']));
    
  
    if($nom!="select" && !empty($matri) && !empty($type) && !empty($marke)&& !empty($model) && !empty($nbr) && !empty($prix) && !empty($name) && !empty($prenom) && !empty($phon) && !empty($catt))
    {
      insertTransportAndCh($nom, $matri, $type, $marke, $model, $nbr, $prix, $name, $prenom, $email, $phon, $catt);
      ?>
        <div class="dsucess">
            <p><?php echo "Ajouté avec succès";?></p>
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

    <h1 class="flow-text"><i class="material-icons prefix">mode_edit</i>reserver Un transport</h1>
<div class="row">
  <form class="col s12" action="index.php?page=transport" method="POST">
      
         <div class="rows">
                  <div class="w3-section col s12 m12 blue-text text-darken">Select reserved
        <?php
         $stmt = $db->prepare("SELECT name, id_etab FROM etablissement order by name asc");
        $stmt->execute();

        echo "<select name='titre' class='w3-light-grey w3-dropdown-click'>";
        ?>
        
        <option value="select">--select--</option>
       <?php
        while($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
          
          print("<option value='".$result['name']."'>".$result['name']."</option>");
        }
        echo "</select>";?>
    </div>
                    <div class="a a1 input-field">
          <input id="lnom" name="immatriculation" type="text" class="validate" autocomplete="off">
          <label class="active" for="lnom">imatriculation</label>
        </div>
                     <div class="a a1 input-field">
                <input id="pay" name="type_transport" type="text" class="validate" autocomplete="off">
                <label class="active" for="pay">type de transport</label>
              </div>
                </div>
      <div class="rows">

       <div class="a a1 input-field">
          <input id="cont" name="marque" type="text" class="validate" autocomplete="off">
          <label class="active" for="cont">marque</label>
        </div>
        <div class="a a1 input-field">
                      <input id="dat" name="modele" type="text" class="validate" autocomplete="off">
                      <label class="active" for="dat">model</label>
                    </div>
        
    </div>

  <div class="rows"> 
          
        <div class="a a1 input-field">
                <input id="pay" name="nbr_place" type="number" class="validate" autocomplete="off">
                <label class="active" for="pay">nbr place</label>
              </div>
           <div class="a a1 input-field">
                <input id="pay" name="frais" type="number" class="validate" autocomplete="off">
                <label class="active" for="pay">frais transport</label>
              </div>
              
            </div>
<h1 class="flow-text"><i class="material-icons prefix">mode_edit</i>les Information du Chauffeur</h1>
     <div class="a a1 input-field">
          <input id="lnom" name="nom" type="text" class="validate" autocomplete="off">
          <label class="active" for="lnom">nom du chauffeur</label>
        </div>
                     <div class="a a1 input-field">
                <input id="pay" name="prenom" type="text" class="validate" autocomplete="off">
                <label class="active" for="pay">prenom</label>
              </div>
                </div>

      <div class="rows">

       <div class="a a1 input-field">
          <input id="cont" name="tel" type="number" class="validate"  placeholder="012-345-678-9" maxlength="14" autocomplete="off">
          <label class="active" for="cont">numiro</label>
        </div>
        <div class="a a1 input-field">
                      <input id="dat" name="email" type="email" class="validate" autocomplete="off">
                      <label class="active" for="dat">email</label>
                    </div>
        
    </div>

  <div class="rows"> 
          
        <div class="a a1 input-field">
                <input id="pay" name="categorie_prm" type="text" class="validate" autocomplete="off">
                <label class="active" for="pay">categorie prm</label>
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