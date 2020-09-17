<!DOCTYPE html>
<html lang="french" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="CodePixar">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Cevital</title>

  <link href="css/mycss.css" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstraap.css">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body >

    <div class="main-wrapper-first">
      <header>
        <div class="container">
          <div class="header-wrap">
            <div class="header-top d-flex justify-content-between align-items-center">
              <div class="logo">
                <a href="index.php"><img src="imges/logo.png" alt=""></a>
              </div>
              <div class="main-menubar d-flex align-items-center">
                <nav>
                  <a href="index.php">Home</a>
                  <a href="home.php">conecter</a>
                </nav>
                <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
              </div>
            </div>
          </div>
        </div>
      </header>
    </div>
    <div class="main-wrapper">
      <div class="active-banner-slider">
        <div class="item d-flex align-items-center"  style="background: url('img/a.jpg') no-repeat center center/cover;">
          <div class="container">
            <div class="content">
              <h1 class="text-white text-uppercase">SK App<br> Algerie telecom</h1>
              <p class="text-white">Check Out nous evenement et soyer les bienvenue</p>
              <a href="home.php" class="primary-btn d-inline-flex align-items-center"><span class="mr-10">Connect</span><span class="lnr lnr-arrow-right"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php  

  include_once "home_functions/connect_db.php";
 

 
  function displayData(){
    global $db;
 $req = $db->query(" SELECT b.titre_even, b.date_deb, b.date_fin, b.localisation, b.descriptt_even FROM evenement AS b where context_even='Externe' ORDER BY b.date_deb");
    $results = [];
    while($response = $req->fetch())
    {
      $results[] = $response;
    }
    return $results;
    $req->closeCursor();
   }
?>

 <div class="main-wrapper">
     
      <section class="featured-area">
      <div class="container">
        <a style="background-color:grey; margin-left: 40%;" class="primary-btn d-inline-flex align-items-center text-uppercase"><span style="color:black;">Evenement Recent</span></a>
         
        <div class="row">  
<?php 
foreach (displayData() as $evenement)
  {
    
    ?>
   
            <div class="col-md-4">
              <div class="single-feature">
                <div class="icon">
                  <span class="lnr lnr-bookmark"></span>
                </div>
                <div class="desc text-center">
                  <h6 class="title text-uppercase" style="font-size: 1.5em;"> <?=$evenement['titre_even'];?></h6>
                  <p><?=$evenement['descriptt_even'];?> </p>Periode:<span> <?=$evenement['date_deb'];?> and <?=$evenement['date_fin']?></span>
                </div>
              </div>
            </div>
          
       
      
     <?php }   ?> </div>
   </section>
   </div>
        <footer>
          <div class="container">
            <div class="footer-content d-flex justify-content-between align-items-center flex-wrap">
              <div class="logo">
                <a href="index.php"><img src="imges/logo.png" alt=""></a>
              </div>
              <div class="copy-right-text">Copyright &copy; 2019  |  All rights reserved.  <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://algerieTelecom.com" target="_blank">Algerie Telecom</a></div>
              <div class="footer-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-behance"></i></a>
              </div>
            </div>
          </div>
        </footer>
      </section>
      <!-- End Footer Widget Area -->

    </div>




    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="js/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
