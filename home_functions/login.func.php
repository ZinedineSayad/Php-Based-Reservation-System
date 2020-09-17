<?php
//login as entreprise
function loginEntreprise($email, $password)
    {
       // ob_start(); 
    global $db;
    $rss[]='';
    $sql= "SELECT login, mot_passe, nom FROM administrateur where login=:email and mot_passe=:pass and type='admin'";
        $query = $db->prepare($sql);
        $query->execute(array('email' =>$email, 'pass'=>$password));
        $row = $query->fetch();
       $rss=$row;
        
     //$_SESSION["name"] = $found_admin["username"];
        //$cookie_name = "user";
        //$cookie_value = $rss[0];
        if($row) {
            session_start();
            $_SESSION['name']=$rss[2];
            $_SESSION['logged'] = true;
            $_SESSION['email'] = $email;
            if(!headers_sent() && isset($_SESSION['name'])){
                
           // header("location: asEntrprise/index.php?");          
            header("location: asAdmin/index.php?"); 
            
        }exit;}
        else {
            echo "<script>alert('Not Found.... try again!');</script>";
    
}
}
//login as free
function loginUser($email, $password)
{
       // ob_end_flush();
        global $db;
     //  id_util nom prenom  tel adress  email   civilite    fonction    date_aiss   lieu_naiss  diplome date_emp    grade   poste   type

         $rs[]='';
    $query = $db->prepare("SELECT nom, prenom, email, mot_passe FROM utilisateur  where email=:email and mot_passe=:pass");
        $query->execute(array('email' =>$email,'pass'=>$password));
        $row = $query->fetch();
       $rs=$row;
if($row) {
    session_start();
            $_SESSION['nam']=$rs[0];
            $_SESSION['pnm']=$rs[1];
            $_SESSION['logged'] = true;
            $_SESSION['email'] = $email;
            if(!headers_sent() && isset($_SESSION['nam']))
            header("location: asEmployee/index.php?");
    exit;
}
else { 
   echo "<script>alert('Not Found.... try again!');</script>";

}}

function loginLogis($email, $password)
    {
       // ob_start(); 

    global $db;
    $rss[]='';
    $sql= "SELECT nom, login, mot_passe FROM administrateur where login=:email and mot_passe=:pass and type='logistique'";
        $query = $db->prepare($sql);
        $query->execute(array('email' =>$email, 'pass'=>$password));
        $row = $query->fetch();
       $rss=$row;
        
     //$_SESSION["name"] = $found_admin["username"];
        //$cookie_name = "user";
        //$cookie_value = $rss[0];
        if($row) {
            session_start();
            $_SESSION['namee']=$rss[0];
            $_SESSION['logged'] = true;
            $_SESSION['mail'] = $email;
             if(!headers_sent() && isset($_SESSION['namee'])){
                
           // header("location: asEntrprise/index.php?");          
            header("location: asLogistique/index.php?"); 
            
        }exit;}
        else {
            echo "<script>alert('Not Found.... try again!');</script>";
    
}
}
?>