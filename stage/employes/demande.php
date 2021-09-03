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
if(count($_POST)>2) {
	$dated = mysqli_real_escape_string($conn,$_POST["dated"]);
	$datef = mysqli_real_escape_string($conn, $_POST["datef"]);
	$choix = mysqli_real_escape_string($conn, $_POST["choix"]);
  $motif= mysqli_real_escape_string($conn, $_POST["motif"]);
	$sql = "INSERT INTO conge (date_dep, date_f, type, motif)
	VALUES ('{$dated}', '{$datef}', '{$choix}', '{$motif}')";
    //exécuter la requête d'insertion
	if ($conn->query($sql) === TRUE) {
		header("location:index.php");
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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Accueil de CHU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="form.css" rel="stylesheet">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  
</head>

<body>
 <?php include("empnav.php"); ?>

  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
    <div id="container">
      <form method="POST" action="demande.php">
      <h2 style="color: rgb(6, 143, 113);">Nouvelle demande</h2>
      <div  class="form-floating mb-3">
            <input name="dated" type="date" class="form-control" id="floatingInput" placeholder="date de depart">
            <label for="floatingInput">Départ de congé</label>
          </div>
          <div class="form-floating">
            <input name="datef" type="date" class="form-control" id="floatingPassword" placeholder="date de fin">
            <label for="floatingInput">date de fin</label>
          </div><br>
          
        <div class="row g-2">
  <div class="col-md">
    <div class="form-floating">
    <select name="choix" class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" style="border: 1px solid rgb(6, 143, 113);">
        <option selected>selectionne</option>
        <option value="annuelle">annuelle</option>
        <option value="exception">exception</option>
        <option value="sans solde">Autrer</option>
      </select>
      <label for="floatingSelectGrid">Type de congé</label>
    </div>
 <br>
<div class="form-outline mb-4">
    <textarea name="motif"class="form-control" id="form4Example3" rows="4" placeholder="laissez une note..." style="border: 1px solid rgb(6, 143, 113);"></textarea>
   
  </div>
  

  </div>
  <input type="submit" value="Envoyer la demande" id="envoye"  class="btn " style="background-color:rgb(6, 143, 113);">

</div>

      </form>
    </div>
    </div>
  </section>

  <main id="main">

  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/superfish/superfish.min.js"></script>
  <script src="assets/vendor/hoverIntent/hoverIntent.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html> -->