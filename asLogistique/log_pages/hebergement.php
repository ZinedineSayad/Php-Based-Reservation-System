
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
    
    $titre=$_POST['titre'];
    
   $type=htmlspecialchars(trim($_POST['Lname']));
   $nom=htmlspecialchars(trim($_POST['catt']));
   $frais=htmlspecialchars(trim($_POST['addres']));
   $besoin=htmlspecialchars(trim($_POST['phone']));
   
  
    if($titre!='select' &&!empty($nom) && !empty($frais)  && !empty($type))
    {
      insertHeberge($titre,$nom,$frais,$type,$besoin);
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

    <h1 class="flow-text"><i class="material-icons prefix">mode_edit</i>reserver Un heberge</h1>
<div class="row">
  <form class="col s12" action="index.php?page=hebergement" method="POST">
      
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
          <input id="lnom" name="Lname" type="text" class="validate" autocomplete="off">
          <label class="active" for="lnom">type</label>
        </div>
                     <div class="a a1 input-field">
                <input id="pay" name="catt" type="text" class="validate" autocomplete="off">
                <label class="active" for="pay">nom_piece</label>
              </div>
                </div>

      <div class="rows">

       <div class="a a1 input-field">
          <input id="cont" name="phone" type="tel" class="validate" autocomplete="off">
          <label class="active" for="cont">besoin heberge</label>
        </div>
        <div class="a a1 input-field">
                      <input id="dat" name="addres" type="text" class="validate" autocomplete="off">
                      <label class="active" for="dat">frais</label>
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