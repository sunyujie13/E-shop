<?php 
    include 'inc/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
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
        border-radius: 0 0 0 45px ;
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
    .menu-title{
      display: flex;
      justify-content: space-around;
      margin-bottom: 10px;
      width: 100%;
      color: white;
    }

    </style>
</head>
<body>
<section>

<div class = "promo-wrapper">
  <p style="color: white;font-size :2em;padding-top:0;"> On fait durer le plaisir • Jusqu'à -50% sur TOUT ! </p>
  <button><a href="fiche-produit.php">Je craque!</a></button>
</div>
<!-- menu-taille -->
<div class = "menu-title">
<select class="mdb-select md-form col-2" searchable="Search here..">
        <option value="" disabled selected>TRIER PAR</option>
        <option value="3" data-secondary-text="Production year: 2017">RECOMMANDE</option>
        <option value="3" data-secondary-text="Production year: 2015">PLUS RECENT</option>
        <option value="3" data-secondary-text="Production year: 2019">PLUS BAS PRIX</option>
        <option value="3" data-secondary-text="Production year: 2016">PRIX LE PLUS ELEVE</option>
    </select>
    <select class="mdb-select md-form col-2" searchable="Search here..">
        <option value="" disabled selected>Select taille</option>
        <option value="2" data-secondary-text="Production year: 2012">S</option>
        <option value="3" data-secondary-text="Production year: 2017">M</option>
        <option value="3" data-secondary-text="Production year: 2015">L</option>
        <option value="3" data-secondary-text="Production year: 2019">XL</option>
        <option value="3" data-secondary-text="Production year: 2016">XXL</option>
    </select>
    <select class="mdb-select md-form col-2" searchable="Search here..">
        <option value="" disabled selected>Select Color</option>
        <option value="2" data-secondary-text="Production year: 2012">Noir</option>
        <option value="3" data-secondary-text="Production year: 2017">Blue</option>
        <option value="3" data-secondary-text="Production year: 2015">Yellow</option>
        <option value="3" data-secondary-text="Production year: 2019">Blanch</option>
        <option value="3" data-secondary-text="Production year: 2016">red</option>
    </select>
    <select class="mdb-select md-form col-2" searchable="Search here..">
        <option value="" disabled selected>Select Style</option>
        <option value="2" data-secondary-text="Production year: 2012">Over-size</option>
        <option value="3" data-secondary-text="Production year: 2017">Col-ronde</option>
        <option value="3" data-secondary-text="Production year: 2015">polo</option>
        <option value="3" data-secondary-text="Production year: 2019">sweat</option>
        <option value="3" data-secondary-text="Production year: 2016">Debardeur</option>
    </select>
  
    <button class="col-2"><a href="fiche-produit.php ">Let'Go!</a></button>
</div>


<!-- menu-taille -->
<div style="height: 5em; text-align :center;"><h1>NOS-PRODUITS</h1></div>

    <!-- preduits -->
<div class = "row">
     <div class = "row-flex-img">
        <img src="photo/flex-img/flex-img02.jpg" alt="#">
        <p class = "note-flex-img">T-SHIRTS-COUPLE<br><strong style="font-size:28px;">25€</strong></p>
        <button class = "actus-button">SHOP NOW !</button>
    </div>
     <div class = "row-flex-img">
        <img src="photo/flex-img/flex-img01.jpg" alt="#">
        <p class = "note-flex-img">T-SHIRTS-OVER-SIZE<br><strong style="font-size:28px;">15€</strong></p>
        <button class = "actus-button">SHOP NOW !</button>
    </div>
     <div class = "row-flex-img">
        <img src="photo/flex-img/flex-img03.jpg" alt="#">
        <p class = "note-flex-img">T-SHIRTS-HOMME<br><strong style="font-size:28px;">36€</strong></p>
        <button class = "actus-button">SHOP NOW !</button>
    </div>
     <div class = "row-flex-img">
        <img src="photo/flex-img/flex-img04.jpg" alt="#">
        <p class = "note-flex-img">T-SHIRTS-FEMME<br><strong style="font-size:28px;">19€</strong></p>
        <button class = "actus-button">SHOP NOW !</button>
    </div>
</div>
<div class = "row">
     <div class = "row-flex-img">
        <img src="photo/flex-img/flex-img05.jpg" alt="#">
        <p class = "note-flex-img">T-SHIRTS-COUPLE<br><strong style="font-size:28px;">25€</strong></p>
        <button class = "actus-button">SHOP NOW !</button>
    </div>
     <div class = "row-flex-img">
        <img src="photo/flex-img/flex-img06.jpg" alt="#">
        <p class = "note-flex-img">T-SHIRTS-OVER-SIZE<br><strong style="font-size:28px;">15€</strong></p>
        <button class = "actus-button">SHOP NOW !</button>
    </div>
     <div class = "row-flex-img">
        <img src="photo/flex-img/flex-img07.jpg" alt="#">
        <p class = "note-flex-img">T-SHIRTS-HOMME<br><strong style="font-size:28px;">36€</strong></p>
        <button class = "actus-button">SHOP NOW !</button>
    </div>
     <div class = "row-flex-img">
        <img src="photo/flex-img/flex-img08.jpg" alt="#">
        <p class = "note-flex-img">T-SHIRTS-FEMME<br><strong style="font-size:28px;">19€</strong></p>
        <button class = "actus-button">SHOP NOW !</button>
    </div>
</div>
<div class = "row">
     <div class = "row-flex-img">
        <img src="photo/flex-img/flex-img09.jpg" alt="#">
        <p class = "note-flex-img">T-SHIRTS-COUPLE<br><strong style="font-size:28px;">25€</strong></p>
        <button class = "actus-button">SHOP NOW !</button>
    </div>
     <div class = "row-flex-img">
        <img src="photo/flex-img/flex-img010.jpg" alt="#">
        <p class = "note-flex-img">T-SHIRTS-OVER-SIZE<br><strong style="font-size:28px;">15€</strong></p>
        <button class = "actus-button">SHOP NOW !</button>
    </div>
     <div class = "row-flex-img">
        <img src="photo/flex-img/flex-img011.jpg" alt="#">
        <p class = "note-flex-img">T-SHIRTS-HOMME<br><strong style="font-size:28px;">36€</strong></p>
        <button class = "actus-button">SHOP NOW !</button>
    </div>
     <div class = "row-flex-img">
        <img src="photo/flex-img/flex-img012.jpg" alt="#">
        <p class = "note-flex-img">T-SHIRTS-FEMME<br><strong style="font-size:28px;">19€</strong></p>
        <button class = "actus-button">SHOP NOW !</button>
    </div>
</div>
<div class = "row">
     <div class = "row-flex-img">
        <img src="photo/flex-img/flex-img02.jpg" alt="#">
        <p class = "note-flex-img">T-SHIRTS-COUPLE<br><strong style="font-size:28px;">25€</strong></p>
        <button class = "actus-button">SHOP NOW !</button>
    </div>
     <div class = "row-flex-img">
        <img src="photo/flex-img/flex-img01.jpg" alt="#">
        <p class = "note-flex-img">T-SHIRTS-OVER-SIZE<br><strong style="font-size:28px;">15€</strong></p>
        <button class = "actus-button">SHOP NOW !</button>
    </div>
     <div class = "row-flex-img">
        <img src="photo/flex-img/flex-img03.jpg" alt="#">
        <p class = "note-flex-img">T-SHIRTS-HOMME<br><strong style="font-size:28px;">36€</strong></p>
        <button class = "actus-button">SHOP NOW !</button>
    </div>
     <div class = "row-flex-img">
        <img src="photo/flex-img/flex-img04.jpg" alt="#">
        <p class = "note-flex-img">T-SHIRTS-FEMME<br><strong style="font-size:28px;">19€</strong></p>
        <button class = "actus-button">SHOP NOW !</button>
    </div>
</div>
</section>
    





<script src="js/app.js"></script>

<?php include 'inc/footer.php'; ?>

</body>
</html>