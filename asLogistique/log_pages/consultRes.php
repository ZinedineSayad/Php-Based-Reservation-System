<?php
	include_once "log_functions/affichService.func.php";
?>
<div class="dashboardMenu">
 
  <a href="index.php?page=reservation" class="waves-effect waves-light btn"> Reservation<i class="material-icons right">list</i></a>
<a href="index.php?page=consultRes" class="waves-effect waves-light btn">Manage Reservation<i class="material-icons right">list</i></a>
</div>
<div class="dashboardCoreA">

	<h1 class="flow-text" style="text-align: center;"><b>Evenement / Reservation</b></h1>

	
			<table class="highlight" style="font-size: 0.7em;">
		        <thead>
		          <tr class="blue-text text-darken">
		              <th>titre</th>
		              <th>email</th>
		              <th>date depart</th>
		              
		              
		          </tr>
		        </thead>
		        <?php
		foreach (display_evnt() as $evenement)
	{
			
		
		?>
		        <tbody>
		          <tr> 	
		          	<td> <?=$evenement['titre_even']?></td>
		            <td> <?=$evenement['email']?></td>
		            <td><?=$evenement['datte_dep']?></td>
		            
		          </tr>

		          </tr>
		        </tbody>
		<?php 
}

	?>
       		</table>