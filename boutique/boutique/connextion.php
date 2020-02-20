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
    form{
        width: 50%;
        margin: auto;
    }
    .button-reseau{
      display: flex;
      justify-content: space-around;
      padding:2em;
    }
    </style>
</head>
<body>
  <!-- TITRE DE CONNEXTION -->
<div style="height: 8em; text-align :center;"><h1>Bienvenue-MX CREATION</h1></div>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<div style="height: 8em; text-align :center;"></div>


<div style="height: 1em; text-align :center;"><h3>Partage avec nous avec vos reseau!</h3></div>
<div class = "button-reseau">
  <button><a href="https://www.facebook.com/">Facebook</a></button>
  <button><a href="https://www.facebook.com/">Google</a></button>
  <button><a href="https://www.facebook.com/">Twitter</a></button>
</div>


<?php include 'inc/footer.php'; ?>

</body>
</html>