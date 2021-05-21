<?php
session_start();
?>
<?php
  if(!isset($_SESSION['username'])){
       echo"<script>window.open('login.php','_self')</script>"; 
  }
?>
<html>
<head>
<title>Don</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="donate.css">
     <link rel="stylesheet" type="text/css" href="Resourses/boostrap/bootstrap.min.css">
    <link  href="Resourses/boostrap/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <script type="text/javascript" src="Resourses/boostrap/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
    <script src="Resourses/js/jquery-3.3.1.slim.min.js"></script>
    <script src="Resourses/js/bootstrap.js"></script>
    
    </head>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
               <a href="" class="navbar-brand" style="font-size:30px">Gramodaya</a>
               <button class="navbar-toggler" data-toggle="collapse" data-target="#new"><span class="navbar-toggler-icon"></span></button>
               
               <div class="collapse navbar-collapse justify-content-center" id="new">
               <ul class="navbar-nav">
               
               <li class="nav-item"><a href="home2.php" class="nav-link">Home</a></li>
               <li class="nav-item"><a href="helpdesk.php" class="nav-link">Help Desk</a></li>
               <li class="nav-item active"><a href="donation.php" class="nav-link">Donations</a></li>
               <li class="nav-item"><a href="comment.php" class="nav-link">Comments</a></li>
               <li class="nav-item"><a href="profile.php" class="nav-link">Profile</a></li>
               <li class="nav-item"><a href="logout.php" class="nav-link" onclick="return confirm('are you sure?')">log out</a></li>
               </ul>
               </div>
            </nav>
<body id="">
     <script type="text/javascript" src="Resourses/js/jquery-3.3.1.min.js"></script>
    
     <?php

          $conn = mysqli_connect("localhost","root","","foundation");

          $sql = "SELECT * FROM up_coming_events ORDER BY event_id";

          $result = mysqli_query($conn,$sql);

          echo "<table class='table table-defult'>";
          echo "<th>date</th>";
         echo  "<th>event</th>";
         echo "<th>donate good</th>";
         echo "<th>donate money</th>";
        

          while($row=mysqli_fetch_array($result)){
               $date = $row['date1'];
               $event = $row['description1'];

               ?>
               <tr>
               <td><?php echo $date;?></td>
               <td><?php echo $event;?></td>
               <td><a href="index2.php" class="btn btn-primary">donate goods</a></td>
               <td><a href="payment_checkout.php" class="btn btn-success">donate money</a></td>
          </tr>
               <?php
          }
         
          echo "</table>";
     ?>

          

              

    
   


</html>