<?php

if(isset($_GET['user_id'])){
    

    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "foundation"; 
      
  $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

  $userid = $_GET['user_id'];

  $sql = "DELETE FROM help_desk WHERE helpdesk_id = '{$userid}'";

  $result = mysqli_query($conn,$sql);

  if($result == 1){
    echo"<script>alert('request is deleted');
    window.location='adminhedesk.php';
    </script>";
  }

  else{
    echo"<script>alert('Not deleted')";
  }
}



?>