

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

if(isset($_GET['idaccept'])) {
$sql1 = "update conge set etat ='accepté' where id_c=" . $_GET['idaccept'];
if($conn->query($sql1) === TRUE){
          echo("<script>window.location = 'consultation.php'</script>");
    }else{
        }
    }
if(isset($_GET['idrefus'])) {
$sql1 = "update conge set etat ='refusé' where id_c=" . $_GET['idrefus'];
if($conn->query($sql1) === TRUE){
          echo("<script>window.location = 'consultation.php'</script>");
    }else{
        }
    }

?>