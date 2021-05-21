<?php

if(isset($_GET['id'])){
    

    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "foundation"; 
      
  $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

  $userid = $_GET['id'];

  $sql = "DELETE FROM up_coming_events WHERE event_id = '{$userid}'";

  $result = mysqli_query($conn,$sql);

  if($result == 1){
    echo"<script>alert('event is deleted');
    window.location='upcomingevent.php';
    </script>";
  }

  else{
    echo"<script>alert('Not deleted')";
  }
}

?>