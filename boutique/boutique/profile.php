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
        .cantainer{
            display: flex;
            justify-content: center;
            flex-direction: column;
        }
        .cantainer div{
            display: flex;
            flex-direction: column;
        }
        
    </style>
</head>

<body>
    <section>
     <div style="height: 20em; text-align :center;"><h1>hello-profile</h1></div>
<div class = "cantainer">

    <div class="nom-id">
        <h4>Nom</h4>
        <h4>Pronom</h4>
    </div>
    <div>
        <select class="mdb-select md-form col-2" searchable="Search here..">
            <option value="" disabled selected>TRIER PAR</option>
            <option value="3" data-secondary-text="Production year: 2017">RECOMMANDE</option>
            <option value="3" data-secondary-text="Production year: 2015">PLUS RECENT</option>
            <option value="3" data-secondary-text="Production year: 2019">PLUS BAS PRIX</option>
            <option value="3" data-secondary-text="Production year: 2016">PRIX LE PLUS ELEVE</option>
        </select>
        <select class="mdb-select md-form col-2" searchable="Search here..">
            <option value="" disabled selected>TRIER PAR</option>
            <option value="3" data-secondary-text="Production year: 2017">RECOMMANDE</option>
            <option value="3" data-secondary-text="Production year: 2015">PLUS RECENT</option>
            <option value="3" data-secondary-text="Production year: 2019">PLUS BAS PRIX</option>
            <option value="3" data-secondary-text="Production year: 2016">PRIX LE PLUS ELEVE</option>
        </select>
    </div>
</div>
</section>

<?php include 'inc/footer.php'; ?>

</body>
</html>