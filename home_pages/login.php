
<?php 
include_once "home_functions/login.func.php";
 if(isset($_POST['send']))
  {
    //header_remove("location: asEntrprise/index.php?");
    $E_mail = htmlspecialchars(trim($_POST['mail']));
    $pword = htmlspecialchars(trim($_POST['pword']));
    
    if(!empty($E_mail) && !empty($pword))
    {
      if (headers_sent() ) {
    header_remove();
      }
      loginUser($E_mail, $pword);
    }else{
      
        echo '<script language="JavaScript">
  alert("Remplir tout les champ. Merci de recommencer");
  window.location.replace("home.php");
  </script>';

    }
  }
?>
<!--Employee form-->
<script src="../js/myjs.js"></script>
<div class="loginAsFreeForm">
  <img src="imges/avatar.png" class="avatar"><h3><b>User</b></h3>
  <form action="home.php?page=login" method="POST">
  
    <div class="row">
      <div class="col s12 m12">
        <i class="material-icons prefix">account_circle</i><input type="email" name="mail" placeholder="email" autocomplete="off">
      </div>
    </div>

    <div class="row">
      <div class="col s12 m12">
        <input type="password" name="pword" placeholder="Mot de passe" maxlength="20">
      </div>


    </div>
      <div class="row">
        <div class="col s12 m6">
          <input type="submit" name="send" value="Se connecter" class="btn wave-effect wave-light green">
        </div>
      </div>
      

  </form>
</div>  
<?php 
	include_once "home_functions/login.func.php";
	if(isset($_POST['submit']))
	{
   // header_remove("location: asFreelance/index.php?");
		$email = htmlspecialchars(trim($_POST['eemail']));
		$password = htmlspecialchars(trim($_POST['ppword']));

		if(!empty($email) && !empty($password))
		{
      if (headers_sent() ) {
    header_remove();
}
			loginEntreprise($email, $password);
		}else{
			echo '<script language="JavaScript">
  alert("Remplir tout les champ. Merci de recommencer");
  window.location.replace("home.php");
  </script>';
		}
	}
?>


<!-- Admin Form-->
<div class="loginAsEntrepriseForm">
  <style type="text/css">
    .avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}

  </style>
  <img src="imges/avatar.png" class="avatar"><h3><b>Admin</b></h3>
	<form action="home.php?page=login" method="POST">	
		<div class="row">
			<div class="col s12 m12">
			<i class="material-icons prefix">account_circle</i>	<input type="email" name="eemail" placeholder="Email" autocomplete="off">
			</div>
		</div>
		<div class="row">
			<div class="col s12 m12">
				<input type="password" name="ppword" placeholder="Mot de passe" maxlength="20">
			</div>
		</div>
			<div class="row">
				<div class="col s12 m6">
					<input type="submit" id="a" name="submit" value="Se connecter" class="btn wave-effect wave-light green">
				</div>
			</div>
			

		</form>
</div>

<?php 
  include_once "home_functions/login.func.php";
  if(isset($_POST['donee']))
  {
   // header_remove("location: asFreelance/index.php?");
    $email = htmlspecialchars(trim($_POST['ela']));
    $password = htmlspecialchars(trim($_POST['olach']));

    if(!empty($email) && !empty($password))
    {
      if (headers_sent() ) {
    header_remove();
}
      loginLogis($email, $password);
    }else{
      echo '<script language="JavaScript">
  alert("Remplir tout les champ. Merci de recommencer");
  window.location.replace("home.php");
  </script>';
    }
  }
?>


<div class="loginAsClientForm">
  
  <img src="imges/avatar.png" class="avatar"><h3><b>Logi</b></h3>
  <form action="home.php?page=login" method="POST">
  
    <div class="row">
      <div class="col s12 m12">
        <i class="material-icons prefix">account_circle</i><input type="email" name="ela" placeholder="email" autocomplete="off">
      </div>
    </div>

    <div class="row">
      <div class="col s12 m12">
        <input type="password" name="olach" placeholder="Mot de passe" maxlength="20">
      </div>
    </div>
      <div class="row">
        <div class="col s12 m6">
          <input type="submit" name="donee" value="Connecter" class="btn wave-effect wave-light bleu">
        </div>
      </div>
      
  </form>
</div>  