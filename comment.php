<?php
session_start();

$username = $_SESSION['username'];
require 'commentmailer/class.phpmailer.php';
require 'commentmailer/PHPMailerAutoload.php';
?>
<?php
  if(!isset($_SESSION['username'])){
       echo"<script>window.open('login.php','_self')</script>"; 
  }
?>



<html>
<head>
    <title>Member comment </title>
    <link rel="stylesheet" type="text/css" href="comment.css">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="donate.css">
     <link rel="stylesheet" type="text/css" href="Resourses/boostrap/bootstrap.min.css">
    <link  href="Resourses/boostrap/bootstrap.css">
     <script type="text/javascript" src="Resourses/boostrap/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
    <script src="Resourses/js/jquery-3.3.1.slim.min.js"></script>
    <script src="Resourses/js/bootstrap.js"></script>
    
  <style>
  
  .card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
  
  </style>

    </head>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
               <a href="" class="navbar-brand" style="font-size:30px">Gramodaya</a>
               <button class="navbar-toggler" data-toggle="collapse" data-target="#new"><span class="navbar-toggler-icon"></span></button>
               
               <div class="collapse navbar-collapse justify-content-center" id="new">
               <ul class="navbar-nav">
               
               <li class="nav-item"><a href="home2.php" class="nav-link">Home</a></li>
               <li class="nav-item"><a href="helpdesk.php" class="nav-link">Help Desk</a></li>
               <li class="nav-item"><a href="donation.php" class="nav-link">Donations</a></li>
               <li class="nav-item active"><a href="comment.php" class="nav-link">Comments</a></li>
               <li class="nav-item"><a href="profile.php" class="nav-link">Profile</a></li>
               <li class="nav-item"><a href="logout.php" class="nav-link" onclick="return confirm('are you sure?')">log out</a></li>
               </ul>
               </div>
            </nav>

<body id="two">

<div class="row">
    <div class="col-md-8 col-md-offset-2" style="margin-left: 15%; margin-top: 1%;">
    
        <h2 id="ad" style="color:black">Admin comments.</h2>
    
    <?php

    $errors = array();

    $cname = "";
    $com = "";

    
    if(isset($_POST['post'])){
        $dbServername = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "foundation"; 
            
        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

       
        $com =  $conn->real_escape_string($_POST['comment']);

        
        if(empty(trim($_POST['comment']))){
            $errors[] = "Comment is required";
        }

        if(strlen(trim($_POST['comment'])) < 10){
            $errors[] = "comment is too short";
        }

        if(empty($errors)){
         $cname = $username;
         $com =  $conn->real_escape_string($_POST['comment']);
        
        $sql = "INSERT INTO comment(uname,comt) VALUES('$cname', '$com')";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "<script>alert('comment is succesfully post...');</script>";

           
        }
        else{
            echo "<script>alert('post is not success.Try again...');</script>";
 }
    }
}
    ?>
    
    <?php
   
 
   $dbServername = "localhost";
   $dbUsername = "root";
   $dbPassword = "";
   $dbName = "foundation";
   
   $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
   
   $sql ="select * from admin_comment where uname = '{$username}'";
   
   $result = mysqli_query($conn,$sql);
   
   while($row=mysqli_fetch_array($result)){
       $id = $row['cm_id'];
       $come = $row['adcome'];
       
      ?>

<div class="card" style="width: 50%;margin-left:25%;">
  <div class="card-body">
   
    <p class="card-text"><?php echo $come;?></p>
    <a href="commentreply.php" class="card-link">Reply</a>
    <a <?php echo "href='deleteadmincomment.php?user_id=$id'"?> class="card-link" onclick="return confirm('are you sure?')">Delete</a>
    
  </div>
</div>
<br>
      <?php
   }
   
   ?>
            
     <div class="card" style="width: 50%;margin-left:25%;">
  <div class="card-body">
   
    <h5 class="card-text">Post new comment</h5>
    <a href="commentreply.php" class="card-link">Post</a>
  
    
  </div>
</div>
    
     
    
    
  

        
    
    
    
    
        </div>
    </div>
    
    <script type="text/javascript" src="Resourses/js/jquery-3.3.1.min.js"></script>
</body>
</html>