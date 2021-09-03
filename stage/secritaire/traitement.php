
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
$requête="select nom from employe";
$lignes=mysqli_query($conn,$requête);
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
  <link href="form.css" rel="stylesheet">
  
</head>

<body>
  <header id="header" class="header-transparent">
    <div class="container">


      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li ><a href="index.php">Accueil</a></li>
          <li><a href="demande.php">demande conge</a></li>
          <li  ><a href="consultation.php">consultation</a></li>
          <li><a href="employe.php">ajouter emloye</a></li>
          <li  class="menu-active"><a href="traitement.php">traiter les demande</a></li>
          <li><a href="index.php?Deconecter=Exit">Deconnecter</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
    <table style="border: 1px, white;">
        <thead>
            <tr>
                <!-- <th style="color: hsl(0, 0%, 100%);">ID</th> -->
                <th>Nom de demandeur</th>
                <th>Date de debut</th>
                <th>Date de fin</th>
                <th  style="color: hsl(0, 0%, 100%);">type de congé</th>
                <th  style="color: hsl(0, 0%, 100%);">Motif</th>
                <th   colspan="2">Décision</th>
            </tr>
        </thead>
  <?php
            $sql = "SELECT * FROM conge where etat ='en cours' ";
$result = $conn->query($sql);
    while( $row = $result->fetch_assoc()){
                ?>  

        <tbody>
      			<!-- Récupération de la liste des exercices  -->
        					<tr>
                    <td><?php
    while($ligne=mysqli_fetch_assoc($lignes)){
      echo $ligne["nom"];
    } 
  ?></td>
                    <td><?php echo $row["date_dep"]?></td>
                    <td><?php echo $row["date_f"]; ?></td>
                    <td><?php echo $row["type"]; ?></td>
                    <td><?php echo $row["motif"]; ?></td>
                    <td><a href='mod.php?idaccept=<?php echo $row["id_c"] ?>'><img src='yes.png' height='30' width='30' alt='Modifier'></a>
                    <td><a href='mod.php?idrefus= <?php echo $row["id_c"] ?>'><img src='no.png' height='30' width='30' alt='Modifier'></a></td>
                  </tr>
    			
			
      		</tbody>
              <?php }
            

             ?>
    </table>
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

</html>