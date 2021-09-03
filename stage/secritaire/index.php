<?php
/*
if(isset($_GET["Deconecter"]))
{
    // Deconecter
    session_start();
    session_destroy();
}*/
session_start();
 if(!isset($_SESSION['SESS_FIRST_NAME']))
 {
   header("location:../Login/conx.php");
     session_destroy();

 }
 else{
   $data = explode("-", $_SESSION['SESS_FIRST_NAME']);
       
        $login = $data[0];
        $pass = $data[1];

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

 $requete2= "SELECT e.cin FROM utilisateur u INNER JOIN employe e on(u.cin = e.cin)
        where u.login='".$login."' && u.passw='".$pass."'";
     
      $exec_requete2 = mysqli_query($conn,$requete2);
      $reponse2 = mysqli_fetch_assoc($exec_requete2);
      $cin = $reponse2['cin'];
      $_SESSION['SESS_CIN'] = "$cin";
    
     }   
 }
    

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Accueil de CHU</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
 <?php include("secnav.php"); ?>
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Welcome to Our Website</h1>
      <h2>Centre hospitalier univérsitaire Mouhamed VI</h2>
      votre solde est
    </div>
  </section><!-- End Hero Section -->

  <main id="main">
    
    <section id="facts">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Résume des congé</h3>
          <p class="section-description"></p>
        </div>
        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">9</span>
            <p>Congé accepter</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">10</span>
            <p>Congé refusé</p>
          </div>

          <div class="col-lg-3 col-9 text-center">
            <span data-toggle="counter-up">5</span>
            <p>Congé en cour</p>
          </div>

          

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Nos service</h3>
          <p class="section-description"></p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-desktop"></i></a></div>
              <h4 class="title"><a href="">Maintenance informatique</a></h4>
              <p class="description">installe et déploie des logiciels, des matériels informatiques et réseaux et assure le support client et la maintenance du matériel et du réseau.Il prend en charge le support technique auprès des utilisateurs et apporte des solutions aux différents problèmes qu’ils rencontrent dans l’utilisation des moyens informatiques.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-desktop"></i></a></div>
              <h4 class="title"><a href="">Réseaux informatiques</a></h4>
              <p class="description">chargé d’exploiter, sécuriser, optimiser et faire évoluer les ressources informatiques de l’entreprise.Il est le garant de la qualité du service attendu par l’informatique.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-desktop"></i></a></div>
              <h4 class="title"><a href="">Développement informatiques</a></h4>
              <p class="description">charge du développement et de la maintenance des applications informatiques. Il intervient, généralement pour le compte de Sociétés de Services et d’Ingénierie Informatiques, </p>
            </div>
          </div>

         
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
    
  <!-- Vendor JS Files -->
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
