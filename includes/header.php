<?php 
  include_once 'includes/session.php'
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Animeja - <?php echo $title ?></title>
  </head>
  <body>

      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
          <a class="navbar-brand" href="index.php">AnimeJA</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button> 
          
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mr-auto">
              <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="viewrecords.php">View user</a>
            </div>
            
          <div class="navbar-nav ml-auto">
              <?php 
                  if(!isset($_SESSION['userid'])){
              ?>
                <a class="nav-item nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
              <?php } else { ?>
                <a class="nav-item nav-link" href="#"><span>Ohaiyo <?php echo $_SESSION['username'] ?>-san! </span> <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>
              <?php } ?>
            </div>
          </div>
        </nav>
        <div class= "container">
     
    

    
      
        
<br>