<?php
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
//Après appel de la page on récupéré l'id de l'exercice en question
if(isset($_GET["id"])){
	//protection de données
	$idm = mysqli_real_escape_string($conn,$_GET["id"]);
	$sql = "SELECT * FROM utilisateur WHERE id=$idm";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
    	// Récupérer des informations de l'exercice en question qui seront par la suite afficher dans le formulaire en bas
        $row = mysqli_fetch_assoc($result);
        $id=$row["id"];
        $titre=$row["login"];
        $auteur=$row["passw"];
        $date=$row["session"];
    }  
        else{
        	//Si erreur envoie de message à la page exercice.php
            $message="L'utilisateur est introuvable";
        	header("Loation:accueil.php?message=$message");
        }
    }
    // Après clic sur le bouton modifier on récupère les données envoyées par la méthode post
 if(count($_POST)>3) {
	$titre = mysqli_real_escape_string($conn,$_POST["titre"]);
	$auteur = mysqli_real_escape_string($conn, $_POST["auteur"]);
	$date = mysqli_real_escape_string($conn, $_POST["date"]);
	$id=mysqli_real_escape_string($conn, $_POST["id"]);
	$sql = "update  utilisateur set login='{$titre}' , passw='{$auteur}', session='{$date}'
     WHERE id=$id";
    //executer le requete de l'update et redirection vers la page exercice.php
	if (mysqli_query($conn, $sql)) {
    	$message= "L'utilisateur a été mis à jour avec succes";
	} else {
    	$message = "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	header("Location:accueil.php?message=$message");
}

        ?>
<!--  Afficher le formulaire rempli par les données de l'exercice récupéré en haut.-->
<form name="exe" action="accueil.php" method="post">
      	<fieldset>
      		<legend>Ajouter un compte</legend>
      	
      	<label for="titre">Identifiant de l'utilisateur</label>
      	<input type="text" id="titre" name="titre" required autofocus><br/>
      	<label for="auteur">mot de passe</label>
      	<input type="password" id="auteur" name="auteur" required><br/>
      	<label for="date">session</label>
      	<select id="date" name="date">
              <option value="administrateur">administrateur</option>
              <option value="chef de service">chef de service</option>
			  <option value="secritaire generale">secritaire generale</option>
			  <option value="employe">Employe</option>
          </select>
      	<input Type="submit" value="Envoyer">
      	</fieldset>
      </form>
