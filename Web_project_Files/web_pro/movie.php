<?php
    session_start();

    if(!isset($_SESSION['username'])) 
    {
        echo "you are logged out";
        header('location:login.php');
    }   

?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MovieInfo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style_ent.css">
    <src="https://code.jquery.com/jquery-3.5.1.min.js">

    
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php" style="color: rgb(214, 224, 155);">MovieInfo</a>
        </div>
      </div>
    </nav>

    <div class="container">
      <div id="movie" class="well"></div>
    </div>
    <script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="js/ent_script.js"></script>
    <script>
      getMovie();
    </script>
   
  </body>
</html>
