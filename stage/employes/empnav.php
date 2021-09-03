<header id="header" class="header-transparent">
    <div class="container">


      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.html">Accueil</a></li>
          <li><a href="demande.php">demande conge</a></li>
          <li><a href="consultation.php">consultation</a></li>
          <li class="nav-item">
      <?php
      if(isset($_SESSION["SESS_FIRST_NAME"]))
      {
        $data = explode("-", $_SESSION['SESS_FIRST_NAME']);
       
        $login = $data[0];
        
        ?>
        <a class="nav-link" href="#"><?php echo $login; ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../logout.php">Se Deconnecter</a>
        <?php
      }
      else
      {
        ?>
        
        <a class="nav-link" href="../Login/conx.php">Se Connecter</a>
    
        <?php
      }
      
      ?>
      </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header>