<?php

if(isset($_GET['user_id'])){
    

    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "foundation"; 
      
  $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

  $userid = $_GET['user_id'];

  $sql = "DELETE FROM bank_donation WHERE bkid = '{$userid}'";

  $result = mysqli_query($conn,$sql);

  if($result == 1){
    echo"<script>alert('data is deleted');
    window.location='admin_bank_donation.php';
    </script>";
  }

  else{
    echo"<script>alert('Not deleted')";
  }
}

?>