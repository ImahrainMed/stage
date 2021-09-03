<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "conges";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(!empty($_GET["id"])){
    //Supprimer l'exercice dont l'id est envoyé avec l'URL
	$ids = mysqli_real_escape_string($conn,$_GET["id"]);
	$sql = "DELETE FROM utilisateur WHERE id=$ids";
	echo $sql;
	if ($conn->query($sql) === TRUE) {
		header("location:accueil.php");
	  } else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	  }
	
	
	  // Fermer la connexion 
	  $conn->close();

//Source : www.exelib.net
}
//les autres pages peuvent envoyer un message dans L’URL. On le  récupère ici pour l'afficher dans l’élément "div.message"
if(isset($_GET["message"])){
	$message=$_GET["message"];
}


?>