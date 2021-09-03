<?php
//session_destroy();
session_start();
if(isset($_POST['username']) && isset($_POST['pass']))
{
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "conges";
   
   // Création de la  connexion
   $conn = mysqli_connect($servername, $username, $password, $dbname);
   // Tester la connexion 
   if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
   }
   else{

    $Utilisateur = mysqli_real_escape_string($conn,htmlspecialchars($_POST['username'])); 
    $MotDepasse = mysqli_real_escape_string($conn,htmlspecialchars($_POST['pass']));
  
    if($Utilisateur !== "" && $MotDepasse !== "")
    {
   
      $requete1 = "SELECT count(*) as utilicount1 FROM utilisateur where 
       login = '".$Utilisateur."' and passw = '".$MotDepasse."'and session='employe'" ;
      $exec_requete1 = mysqli_query($conn,$requete1);
      $reponse1 = mysqli_fetch_array($exec_requete1);
      $count1 = $reponse1['utilicount1'];
      //secritaire
      $requete2="SELECT count(*) as utilicount2 FROM utilisateur where 
      login = '".$Utilisateur."' and passw = '".$MotDepasse."'and session='secritaire generale'";
      print_r($requete2);
      $exec_requete2 = mysqli_query($conn,$requete2);
      $reponse2 = mysqli_fetch_array($exec_requete2);
      $count2 = $reponse2['utilicount2'];
      //admin
      $requete3="SELECT count(*) as utilicount3 FROM utilisateur where 
      login = '".$Utilisateur."' and passw = '".$MotDepasse."'and session='administrateur'";
      $exec_requete3 = mysqli_query($conn,$requete3);
      $reponse3 = mysqli_fetch_array($exec_requete3);
      $count3 = $reponse3['utilicount3'];
if($count1>0) // nom d'utilisateur et mot de passe correctes
{
   
    $r1= "SELECT e.cin FROM utilisateur u INNER JOIN employe e on(u.cin = e.cin)
        where u.login='".$Utilisateur."' && u.passw='".$MotDepasse."'";
     
      $exec_req1 = mysqli_query($conn,$r1);
      $rs1 = mysqli_fetch_assoc($exec_req1);
      $cin = $rs1['cin'];

      $_SESSION['SESS_CIN'] = "$cin";
      $_SESSION['SESS_FIRST_NAME'] = "$Utilisateur-$MotDepasse";
   header('Location:../employes/index.php');
}

if($count2>0) // nom d'utilisateur et mot de passe correctes
{
  
  $r2= "SELECT e.cin FROM utilisateur u INNER JOIN employe e on(u.cin = e.cin)
        where u.login='".$Utilisateur."' && u.passw='".$MotDepasse."'";
     
      $exec_req2 = mysqli_query($conn,$r2);
      $rs2 = mysqli_fetch_assoc($exec_req2);
      $cin = $rs2['cin'];

      $_SESSION['SESS_CIN'] = "$cin";
  $_SESSION['SESS_FIRST_NAME'] = "$Utilisateur-$MotDepasse";
   header('Location:../secritaire/index.php');
}

if($count3>0) // nom d'utilisateur et mot de passe correctes
{
  $r3= "SELECT e.cin FROM utilisateur u INNER JOIN employe e on(u.cin = e.cin)
        where u.login='".$Utilisateur."' && u.passw='".$MotDepasse."'";
     
      $exec_req3 = mysqli_query($conn,$r3);
      $rs3 = mysqli_fetch_assoc($exec_req3);
      $cin = $rs3['cin'];

      $_SESSION['SESS_CIN'] = "$cin";
   $_SESSION['SESS_FIRST_NAME'] = "$Utilisateur-$MotDepasse";
   header('Location:../administrateur/index.php');
}

//secritaire
}
}
}
?>