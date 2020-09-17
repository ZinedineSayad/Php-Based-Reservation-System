<?php
	include_once "user_functions/addAnn.func.php";
?>
<div class="dashboardMenu">
 
  <a href="index.php?page=consultEvmt" class="waves-effect waves-light btn">evement<i class="material-icons right">add_box</i></a>
  
</div>
<div class="dashboardCoreA">

	<h1 class="flow-text" style="text-align: center;"><b>Evenement disponible</b></h1>

	
			<table class="highlight" style="font-size: 0.7em;">
		        <thead>
		          <tr class="blue-text text-darken">
		              <th>titre</th>
		              <th>type</th>
		              <th>Date_debut</th>
		              <th>date_fin</th>
		              <th>localisation</th>
		              <th>Description</th>
		              
		              
		          </tr>
		        </thead>
		        <?php
		foreach (display_evnt() as $evenement)
	{
			
		
		?>
		        <tbody>
		          <tr> 	
		          	<td> <?=$evenement['titre_even']?></td>
		            <td> <?=$evenement['type_even']?></td>
		            <td> <?=$evenement['date_deb']?></td>
		            <td> <?=$evenement['date_fin']?></td>
		            <td> <?=$evenement['localisation']?></td>
		            <th><?=$evenement['descriptt_even']?></th>
		            
		          </tr>

		          </tr>
		        </tbody>
		<?php 
}

	?>
       		</table>