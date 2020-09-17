
<?php
  include_once "log_functions/affichService.func.php";
  if(isset($_POST['addEvnt']))
  {
    
  global $db;

    $p_qtt=htmlspecialchars(trim($_POST['Qtt']));
    $lot=htmlspecialchars(trim($_POST['lot']));
    $name = htmlspecialchars(trim($_POST['titre']));
    $type= $_POST['sex'];
    
    if(!empty($lot) && !empty($p_qtt) && $name!= "select" && !empty($type))
    {
      
            insertRESE($type,$name, $lot, $p_qtt);
            ?>
              <div class="dsucess">
                  <p><?php echo "reservation Added Succesfully";?></p>
                </div>
            <?php 
        }else{
      
        ?>

          <div class="dashboardError">
            <p><?php echo "please fill all the fields";?></p>
          </div>
        <?php
      
    }
  }

?>

<div class="dashboardMenu">
 
  <a href="index.php?page=reservation" class="waves-effect waves-light btn"> Reservation<i class="material-icons right">list</i></a>
<a href="index.php?page=consultRes" class="waves-effect waves-light btn">Manage Reservation<i class="material-icons right">list</i></a>
</div>

<div class="dashboardCoreA" style="font-size: 1.em;">
  <a href="index.php?page=etablisement" class="waves-effect waves-light btn" style="margin-left: 17%;">Etablisement Disponible<i class="material-icons right">list</i></a>
    <h1 class="flow-text"><i class="material-icons prefix">mode_edit</i>Ajouter une reservation</h1>
     
<div class="row">
  <form class="col s12" action="index.php?page=reservation" method="POST">
      <div class="rows">
        <label class="active">Nom</label> <br>
      <input type="radio" name="sex" value="etablissement" id="mal" checked /> <label for="mal">Etablisement</label>
       </div>    
      <div class="rows">
  <div class="w3-section col s12 m12 blue-text text-darken">Select evenement
        <?php
         $stmt = $db->prepare("SELECT titre_even, id_even FROM evenement order by titre_even asc");
        $stmt->execute();

        echo "<select name='titre' class='w3-light-grey w3-dropdown-click'>";
        ?>
        
        <option value="select">--select--</option>
       <?php
        while($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
          
          print("<option value='".$result['titre_even']."'>".$result['titre_even']."</option>");
        }
        echo "</select>";?>
    </div>
  </div>
    <div class="a a1 input-field">
    <input id="lot" name="lot" type="date" class="validate" autocomplete="off">
          <label class="active" for="lot">date Arrive</label>
        </div>

    <div class="a a1 input-field">

    <input id="qtt" name="Qtt" type="date" class="validate" autocomplete="off">
          <label class="active" for="qtt">Date Dep</label>
        </div>
      
      <div class="rows">
        <button id="addreservation" class="btn waves-effect waves-light green" type="submit" name="addEvnt">Save
      <i class="material-icons right">send</i></button>
      </div>
  </div>
    </form>
  </div>