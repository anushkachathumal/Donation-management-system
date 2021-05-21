<?php
    session_start();
?>
<?php
    if(!isset($_SESSION['adminuser'])){
        echo"<script>window.open('adminlogin.php','_self')</script>";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>admin physical donation.</title>
        
        <link rel="stylesheet" type="text/css" href="admin_comment.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    
      <body id="five">
    
         <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
               <a href="" class="navbar-brand" style="font-size:30px">Gramodaya</a>
               <button class="navbar-toggler" data-toggle="collapse" data-target="#new"><span class="navbar-toggler-icon"></span></button>
               
               <div class="collapse navbar-collapse justify-content-center" id="new">
               <ul class="navbar-nav">
               
               <li class="nav-item"><a href="upcomingevent.php" class="nav-link" style="margin-right:20px;font-size:25px">Events</a></li>
               <li class="nav-item"><a href="adminhedesk.php" class="nav-link" style="margin-right:20px;font-size:25px">Help Desk</a></li>
               <li class="nav-item"><a href="admin_manage_member.php" class="nav-link" style="margin-right:20px;font-size:25px">Remove members</a></li>
               <li class="nav-item"><a href="admindonation.php" class="nav-link" style="margin-right:20px;font-size:25px">Donations</a></li>
                 <li class="nav-item active"><a href="admin_comment.php" class="nav-link" style="margin-right:20px;font-size:25px">Comments</a></li>
                 <li class="nav-item"><a href="viewjob.php" class="nav-link" style="margin-right:20px;font-size:25px">job</a></li>
                 <li class="nav-item"><a href="mission.php" class="nav-link" style="margin-right:20px;font-size:25px">Achivements</a></li>
               <li class="nav-item"><a href="logout.php" class="nav-link" style="font-size:25px" onclick="return confirm('are you sure?')">log out</a></li>
               </ul>
               </div>
            </nav>
        
          <div class="row">
          <div class="col-12" style="text-align:center; margin-top: 5%;">
              
        <h1>Members comment.</h1>
        </div>
        </div>
        
        <div class="row">
             <div class="col-12" style="margin-top: 5%;">
              
          <div id="">
          <?php
        
        $dbServername = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "foundation";
        
        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
              
        $sql = "select * from comment ORDER BY comment_id";
        $result = mysqli_query($conn,$sql);
              
        while($row = mysqli_fetch_array($result)){
            $id = $row['comment_id'];
            $mcom = $row['uname'];
            $com = $row['comt'];
            
           ?>
   <div class="card" style="width: 50%;margin-left:30%;">
  <div class="card-body">
    <h5 class="card-title">user name :<?php echo $mcom;?></h5>
   
    <p class="card-text"><?php echo $com;?></p>
    
    <a <?php echo "href='commentadminreply.php?user_name=$mcom'"?> class="card-link">Reply</a>
    <a <?php echo "href='deletecomment.php?id=$id'"?> class="card-link" onclick="return confirm('are you sure?')">Delete</a>
  </div>
</div>
<br>
           <?php
        }
              
        ?>

        
          </div>  
          </div>
              
        <?php
        
        $errors = array();
        
        if(isset($_POST['submit'])){
            $dbServername = "localhost";
            $dbUsername = "root";
            $dbPassword = "";
            $dbName = "foundation";
            
            
        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

        if(empty(trim($_POST['adcomt']))){
            $errors[] = "comment is required";
        }

        if(strlen(trim($_POST['adcomt'])) < 10){
            $errors[] = "comment is too short";
        }

        
         if(empty($errors)){     
        $adcoment = $conn->real_escape_string($_POST['adcomt']);
              
        $sql = "INSERT INTO admin_comment(adcome) VALUES('$adcoment')";
        $result = mysqli_query($conn,$sql);
            
        if($result){
             echo"<script>alert('post is success...');</script>";
        }
        else{
             echo"<script>alert('post is not success.try again...');</script>";
        }
    }  
        }
        ?>
          </div>   
          
          
              
             
              
          </div>
          </div>
          <script src="Resourses/js/jquery-3.3.1.min.js"></script> 
    </body>