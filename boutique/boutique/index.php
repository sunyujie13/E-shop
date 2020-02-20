<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="inc/css/style.css">
    
    
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
    section{
    padding-top: 2em;
    margin: auto;
    }
    .row {
    display: flex;
    justify-content: center;
    width: 100%;
    text-align:center;
    }
    .row-flex-img{
    text-align:center;
    margin: 15px;
    }
    .actus-button{
        width: 300px;
    }
    p{
        color: #C17040;
        padding-top: 1em;
    }
    .row-flex-img img{
        border-radius:  0 0 0 45px;
        width: 100%;
    }
    .row-flex-img img:hover{
        border: 5px solid #C17040;
    }
    .promo-wrapper{
      display: flex;
      justify-content: space-around;
      margin-bottom: 10px;
      height: 2.5em;
      width: 100%;
      background-color:#F8CC1B;
      color: white;
    }
    .button-men-women{
      display: flex;
      justify-content: space-around;
    }
    footer div img.logoresou{
    width: 3%;
    cursor: pointer;
    }
    </style>
   
</head>
<body>
<!-- //HEADER// -->
<nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
    <a class='navbar-brand' href='index.php' style = "color:#F8CC1B;">MX CREATION</a>
    <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
        <span class='navbar-toggler-icon'></span>
    </button>
    
    <div class='collapse navbar-collapse' id='navbarSupportedContent'>
        <ul class='navbar-nav mr-auto'>
        <li class='nav-item active'>
            <a class='nav-link' href='connextion.php' style = "color:#F8CC1B;">CONNEXTION<span class='sr-only'>(current)</span></a>
        </li>
        <li class='nav-item active'>
            <a class='nav-link' href='fiche-produit.php' style = "color:#F8CC1B;">FICHE-PRODUIT<span class='sr-only'>(current)</span></a>
        </li>
        <li class='nav-item active'>
            <a class='nav-link' href='inscription.php' style = "color:#F8CC1B;">INSCRIPTION<span class='sr-only'>(current)</span></a>
        </li>
        <li class='nav-item active'>
            <a class='nav-link' href='panier.php' style = "color:#F8CC1B;">PANIER<span class='sr-only'>(current)</span></a>
        </li>
        <li class='nav-item active'>
            <a class='nav-link' href='profile.php' style = "color:#F8CC1B;">PROFILE<span class='sr-only'>(current)</span></a>
        </li>
        <li class='nav-item dropdown'>
            <a class='nav-link dropdown-toggle' href='index.php' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' style = "color:#F8CC1B;">
            Plus infos...
            </a>
            <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
            <a class='dropdown-item' href='inscription.php' style = "color:#F8CC1B;">Service Clients</a>
            <a class='dropdown-item' href='panier.php' style = "color:#F8CC1B;">Magasins</a>
            <div class='dropdown-divider'></div>
            <a class='dropdown-item' href='profile.php' style = "color:#F8CC1B;">Devenez membre & obtenez -10%</a>
            </div>
        </li>
        
        </ul>
        <form class='form-inline my-2 my-lg-0'>
        <input class='form-control mr-sm-2' type='search' placeholder='Search' aria-label='Search'>
        <button class='btn btn-outline-success my-2 my-sm-0' type='submit' style = "color:#F8CC1B;">Search</button>
        </form>
    </div>
    </nav>
<!-- //HEADER// -->


<section class='col-sm-12 col-md-12 col-lg-10'>
  <!-- bandeau-promo -->
<div class = "promo-wrapper">
  <p style="color: white;font-size :2em;padding-top:0;"> On fait durer le plaisir • Jusqu'à -50% sur TOUT ! </p>
  <button><a href="fiche-produit.php">Je craque!</a></button>
</div>
  <!-- // slider// -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="photo/slider/003.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="photo/slider/002.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="photo/slider/001.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<!-- button-homme-femme -->
<div class = "button-men-women">
    <button type = "submit" style = "width:40%;background-color:#1F1E24;color:white;margin-top:2em;">HOMME</button>
    <button type = "submit"style = "width:40%;background-color:#1F1E24;color:white;margin-top:2em;">FEMME</button>
</div>
<div style="height: 3em;"></div>

<!-- menu-taille -->
<div style="height: 5em; text-align :center;color:#F8CC1B;"><h1>NOS-PRODUITS</h1></div>


<div class = "row">
     <div class = "row-flex-img">
        <img src="photo/flex-img/flex-img02.jpg" alt="#">
        <p class = "note-flex-img">T-SHIRTS-COUPLE<br><strong>25$</strong></p>
        <button class = "actus-button">SHOP NOW !</button>
    </div>
     <div class = "row-flex-img">
        <img src="photo/flex-img/flex-img01.jpg" alt="#">
        <p class = "note-flex-img">T-SHIRTS-OVER-SIZE<br><strong>15$</strong></p>
        <button class = "actus-button">SHOP NOW !</button>
    </div>
     <div class = "row-flex-img">
        <img src="photo/flex-img/flex-img03.jpg" alt="#">
        <p class = "note-flex-img">T-SHIRTS-HOMME<br><strong>36$</strong></p>
        <button class = "actus-button">SHOP NOW !</button>
    </div>
     <div class = "row-flex-img">
        <img src="photo/flex-img/flex-img04.jpg" alt="#">
        <p class = "note-flex-img">T-SHIRTS-FEMME<br><strong>19$</strong></p>
        <button class = "actus-button">SHOP NOW !</button>
    </div>
 </div>
</section>






      

<!-- footer -->
 
<footer class='page-footer font-small indigo' style='background-color: #1F1E24;'>
    <!-- Footer Links -->
    <div class='container'>
    <!-- Grid row-->
    <div class='row text-center d-flex justify-content-center pt-5 mb-3'>
        <!-- Grid column -->
        <div class='col-md-2 mb-3'>
        <h6 class='text-uppercase font-weight-bold'>
            <a href='#!'style ="color:white;">About us</a>
        </h6>
        </div>
        <!-- Grid column -->
        <div class='col-md-2 mb-3'>
        <h6 class='text-uppercase font-weight-bold'>
            <a href='#!'style ="color:white;">Produits</a>
        </h6>
        </div>
        <!-- Grid column -->
        <div class='col-md-2 mb-3'>
        <h6 class='text-uppercase font-weight-bold'>
            <a href='#!'style ="color:white;">Mon panier</a>
        </h6>
        </div>
        <!-- Grid column -->
        <div class='col-md-2 mb-3'>
        <h6 class='text-uppercase font-weight-bold'>
            <a href='#!'style ="color:white;">Besion d'aide ?</a>
        </h6>
        </div>
        <!-- Grid column -->
        <div class='col-md-2 mb-3'>
        <h6 class='text-uppercase font-weight-bold'>
            <a href='#!'style ="color:white;">Contact</a>
        </h6>
        </div>
        <!-- Grid column -->
    </div>

    <div class='row d-flex text-center justify-content-center mb-md-0 mb-4'>

        <!-- Grid column -->
        <div class='col-md-8 col-12 mt-5'>
        <p style='line-height: 1.7rem; color:#F8CC1B;'>Le concept du groupe MX-CREATION est de proposer mode et qualité au meilleur prix et de façon durable. Depuis sa création en 1947, H&M est devenu l'un des principaux groupes de prêt-à-porter du......</p>
        </div>
        <!-- Grid column -->
        <div>
              <img src="photo/logo/facebook.png" alt="https://www.facebook.com/" class = "logoresou">
              <img src="photo/logo/ins.png" alt="https://www.facebook.com/" class = "logoresou">
              <img src="photo/logo//linkedin.png" alt="https://www.facebook.com/" class = "logoresou">
              <img src="photo/logo/pinterest.png" alt="https://www.facebook.com/" class = "logoresou">
              <img src="photo/logo/twiter.png" alt="https://www.facebook.com/" class = "logoresou">
              <img src="photo/logo/youtube.png" alt="https://www.facebook.com/" class = "logoresou">
            </div>
        <!-- reseau -->
    </div>
     <!-- reseau -->
     

    <div class='footer-copyright text-center py-3' style = "color:white;">France | €
    <a href='https://mdbootstrap.com/education/bootstrap/'style = "color:#F8CC1B;"> MX-creation.com</a>
    </div>
    <!-- Copyright -->
    </footer>




<!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



</body>
</html>
