<?php

    $conn = mysqli_connect("localhost","root","","foundation");

if(isset($_GET['name'])){
    $name = $_GET['name'];
    
    $sql = "DELETE FROM job_application WHERE initial_name = '{$name}' LIMIT 1";
    
    $result = mysqli_query($conn,$sql);
    
    if($result==1){
        echo "<script type='text/javascript'>alert('Deleted Successfully');
                window.location='viewjob.php';
        
        </script>";
       
    }
    
    else{
        "<script type='text/javascript'>alert('not deleted');</script>";
    }
}



?>