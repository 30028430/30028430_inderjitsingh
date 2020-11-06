<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>web application</title>
    <p><a href="index.php" class="btn btn-primary">Back to index page</a></P>
  </head>
  <body class ="container">

 <h1>Web application </h1>
 <h2>Use the form to update a new page record</h2>

  
 <?php
    
    include 'app/connection.php';
    
    $id = $_GET['update'];
    
    $record = $connection->query("select * from pages where id='$id'") or die($connection->error);
    
    $row = $record->fetch_assoc();

?>

 <form class="form-group" method="post" action="app/connection.php">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
  <label>page name </label>
  <br>
  <input type="text" class="form-control" name="pg" value="<?php echo $row['pg']; ?>">
  <br>
  <br>
  <label>Heading one</label>
  <br>
  <input type="text" class="form-control" name="h1" value="<?php echo $row['h1']; ?>">
  <br>
  <label>Paragraph One</label>
  <br>
  <textarea class="form-control" name="p1" rows="5" placeholder="<?php echo $row['p1']; ?>"><?php echo $row['p1']; ?></textarea>
  <br>
  <br>
  <label>Image one</label>
  <br>
  <input type="text" class="form-control" name="img1" value="<?php echo $row['img1']; ?>">

  <br>
  <br>
  <hr width="75%">


  <label>Heading two</label>
  <br>
  <input type="text" class="form-control" name="h2" value="<?php echo $row['h2']; ?>">
  <br>
  <label>Paragraph two</label>
  <br>
  <textarea class="form-control" name="p2" rows="5" placeholder="<?php echo $row['p2']; ?>"><?php echo $row['p2']; ?></textarea>
  <br>
  <br>
  <label>Image two</label>
  <br>
  <input type="text" class="form-control" name="img2" value="<?php echo $row['img2']; ?>">

  <br>
  <br>
  <hr width="75%">


  <label>Heading three</label>
  <br>
  <input type="text" class="form-control" name="h3" value="<?php echo $row['h3']; ?>">
  <br>
  <label>Paragraph three</label>
  <br>
  <textarea class="form-control" name="p3" rows="5" placeholder="<?php echo $row['p3']; ?>"><?php echo $row['p3']; ?></textarea>
  <br>
  <br>
  <label>Image three</label>
  <br>
  <input type="text" class="form-control" name="img3" value="<?php echo $row['img3']; ?>">

  <br>
  <br>
  <hr width="75%">
<input type="submit" class="btn btn-warning" name="update" value="update page data">

 </form>
   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>