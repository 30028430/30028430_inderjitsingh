<?php

    $db = "a3002843_app";
    $user = "a3002843_appuser";
    $pwd = "Toiohomai1234";
    
    $connection = new mysqli('localhost', $user, $pwd, $db) or die(mysqli_error($connection));
    
    $result = $connection->query("select * from pages") or die($connection->error);
    
    if(isset($_POST['submit']))
    {
        $pg = $_POST['pg'];
        
        $h1 = $_POST['h1'];
        $h2 = $_POST['h2'];
        $h2 = $_POST['h3'];
         
        $p1 = $_POST['p1'];
        $p2 = $_POST['p2'];
        $p3 = $_POST['p3'];
      
       $images = $_POST['images'];
        
        $sql = "insert into pages(pg, h1, h2, h3, p1, p2, p3, img1, img2, img3)
        values('$pg', '$h1','$h2', '$h3', '$p1', '$p2', '$p3', 'img1','img2','img3')";
        
        if($connection->query($sql) === TRUE)
        {
            
                 echo "<h1>Record added succesfully</h1>";
                  echo "<p><a href='../index.php'>Home</a></p>";
           
        }
        else
        {
           
            echo  "<h1>Error in submission</h1>";
             echo "<p>{$connection->error()}</p>";
             echo "<p><a href='../index.php'>back to index page</a></p>";
           
        }
    }
   
    if(isset($_GET['delete']))
    {
        $id = $_GET['delete'];

        $del = "delete from pages where id=$id";

        if($connection->query($del) === TRUE)
        {
            echo "<p>Record was deleted. <a href='../index.php'>return to index</a></p>
            ";
        }
    else{
        echo "
        <p>There was an error deleting this record.</p>
        <p{$connection->error()}></p>
        <p><a href='../index.php'>back to index page</a></p>
        ";
    }


    }
//update form
    if(isset($_POST['update']))


    {

         
        $id = $_POST['id'];
        $pg = $_POST['pg'];
        
        $h1 = $_POST['h1'];
        $h2 = $_POST['h2'];
        $h3 = $_POST['h3'];
         
        $p1 = $_POST['p1'];
        $p2 = $_POST['p2'];
        $p3 = $_POST['p3'];
      
      $img1 =$_POST['img1'];
      $img2 =$_POST['img2'];
      $img3 =$_POST['img3'];
        
      //update comand
 
      $update = "
      update pages set pg='$pg', h1='$h1', h2='$h2', h3='$h3', p1='$p1', p2='$p2', p3='$p3', img1='$img1', img2='$img2', img3='$img3'
      where id='$id'
      ";
        
        if($connection->query($update) === TRUE)
        {
            
                 echo "<h1>Record updated succesfully</h1>";
                  echo "<p><a href='../index.php'>Home</a></p>";
           
        }
        else
        {
           
            echo  "<h1>Error in updating</h1>";
             echo "<p>{$connection->error()}</p>";
             echo "<p><a href='../index.php'>back to index page</a></p>";
           
        }
    }
    

?>