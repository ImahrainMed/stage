 
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
   <?php include("admnav.php"); ?>

  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
    <table style="border: 1px, white;">
        <thead>
            <tr>
                <th style="color: hsl(0, 0%, 100%);">ID</th>
                <th  style="color: hsl(0, 0%, 100%);">login</th>
                <th  style="color: hsl(0, 0%, 100%);">password</th>
                <th  style="color: hsl(0, 0%, 100%);">session</th>
                <th  style="color: hsl(0, 0%, 100%);">code employe</th>
                
            </tr>
        </thead>
    

        <tbody>
      			<!-- Récupération de la liste des exercices  -->
      			<?php
     	 			$sql = "SELECT * FROM utilisateur";
		 			$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) {
    					while($row = mysqli_fetch_assoc($result)) {
        					echo "<tr><td> " . $row["id"]. "</td><td>" . $row["login"]. "</td><td>" . $row["passw"]."</td><td>" . $row["session"]."</td><td>" . $row["cin"] ."</td></tr>";
    					}
    				

					} 
				?>
      		</tbody>

</tbody>
        </tbody>
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

</html> -->