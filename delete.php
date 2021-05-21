<?php

if(isset($_GET['user_id'])){
    

    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "foundation"; 
      
  $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

  $userid = $_GET['user_id'];

  $sql = "DELETE FROM mission WHERE id = '{$userid}'";

  $result = mysqli_query($conn,$sql);

  if($result == 1){
    echo"<script>alert('existing mission is deleted');
    window.location='mission.php';
    </script>";
  }

  else{
    echo"<script>alert('Not deleted')";
  }
}

?>