<?php

if(isset($_GET['id'])){
    

    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "foundation"; 
      
  $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

  $userid = $_GET['id'];

  $sql = "DELETE FROM job_application WHERE job_id = '{$userid}'";

  $result = mysqli_query($conn,$sql);

  if($result == 1){
    echo"<script>alert('request is deleted');
    window.location='viewjob.php';
    </script>";
  }

  else{
    echo"<script>alert('Not deleted')";
  }
}

?>