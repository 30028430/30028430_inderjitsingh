
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
    <title>WEB Application</title>
  </head>
  <body class="container">
      
      <?php include 'app/connection.php'; ?>
      
      <div class="row">
          <div class="col">
              <ul class="nav navbar-light bg-light">
                  <li><a href="index.php" class="nav-link">Home</a></li>
                  
                  
                  <?php foreach($result as $page): ?>
                  
                  <li class="nav-item active">
                      
                <a href="index.php?page='<?php echo $page['pg']; ?>'" class="nav-link"><?php echo $page['pg']; ?></a>
                      
                  </li>
                  
                  <?php endforeach; ?>
                   <li><a href="form.php" class="nav-link">Enter a new page record</a></li>
              </ul>
          </div>
      </div>
      
      <div class="row">
          <div class="col">
              <?php 
                    
                    if(isset($_GET['page']))
                    {
                        $pg = trim($_GET['page'], "'");
                        
                     
                        $record = $connection->query("select * from pages where pg='$pg'") or die($connection->error);
                        
                        $row = $record->fetch_assoc();
                        
                 
                        $h1 = $row['h1'];
                           $h2 = $row['h2'];
                              $h3 = $row['h3'];
                              
                              
                             $p1 = $row['p1'];
                              $p2 = $row['p2'];
                                $p3 = $row['p3'];
                             
                              
                     
                          $img1 = $row['img1'];
                           $img2 = $row['img2'];
                           $img3 = $row['img3'];
                        
                   
                    
                        
                        
                       
                       
                    
                        
                        $id = $row['id'];
                        $update = "update.php?update=" . $id;
                      
                        $delete = "app/connection.php?delete=" . $id;
                        echo "
                        
                        <h1>{$pg}</h1>
                        
                        <h2>{$h1}</h2>
                        <h3>{$h2}</h3>
                        <h4>{$h3}</h4>
                        
                   
                     
                        
                        
                        <p>{$p1}</p>
                        <p>{$p2}</p>
                        <p>{$p3}</p>
                        
                          <p><img src='{$img1}'></p>
                        
                        
                        ";

                        echo "
                        <p><a href='{$update}' class='btn btn-success'>Update</a><p>
                        <p><a href='{$delete}' class='btn btn-danger'>Delete</a><p>
                        ";
                        
                    }
                    else
                    {
                        echo"

                        <h1>Welcome to scp website</h1>
                        <p class='text-centre'>From the above links the user can open any scp page or create new pages </p>
                        <p class='text-centre'><img src='images/logo.png'></p>
                        ";
                       
                    }
              
              ?>
        
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>