<?php
session_start();

$username = $_SESSION['username'];

$newcon = mysqli_connect("localhost","root","","foundation");

$sql = "SELECT * FROM register_form WHERE user_name = '{$username}'";

$newresult = mysqli_query($newcon,$sql);

while($row=mysqli_fetch_array($newresult)){
    $email = $row['email'];
}
?>
<?php
  if(!isset($_SESSION['username'])){
       echo"<script>window.open('login.php','_self')</script>"; 
  }
?>
<html>
<head>
    <title> Help Desk Form Degin </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="help.css">
    <link rel="stylesheet" type="text/css" href="Resourses/boostrap/bootstrap.min.css">
     <link  href="Resourses/boostrap/bootstrap.css">
     <script type="text/javascript" src="Resourses/boostrap/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Resourses/js/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="Resourses/js/bootstrap.js"></script>
   
    
</head>
<body>
    <?php
    

        $errors = array();

        
        
        $hereason = "";

        if(isset($_POST['submit'])){


            
           
            $hereason = $_POST['Reason'];
            

        $dbServername = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "foundation"; 
            
        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

       
            
            if(strlen( $hereason = $conn->real_escape_string($_POST['Reason'])) < 15){
                $errors[] = "Reason must be descriptive one";
            }

            

              

              if(empty(trim($_POST['Reason']))){
                $errors[] = "Reason  is required";
              }



        if(empty($errors)){
        $hename = $username;
        $heemail = $email;
        $hereason = $conn->real_escape_string($_POST['Reason']);
            
        $sql = "INSERT INTO help_desk(name,email,reason) VALUES('$hename','$heemail','$hereason')";
        $requesthelp = mysqli_query($conn,$sql);
        if($requesthelp){
            echo"<script>alert('request is succesfully post...');</script>";
        }
         else{
             echo"<script>('something wrong..refill the form..');</script>";
         }  
        }
        }
    ?>
    
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
               <a href="" class="navbar-brand" style="font-size:30px">Gramodaya</a>
               <button class="navbar-toggler" data-toggle="collapse" data-target="#new"><span class="navbar-toggler-icon"></span></button>
               
               <div class="collapse navbar-collapse justify-content-center" id="new">
               <ul class="navbar-nav">
               
               <li class="nav-item"><a href="home2.php" class="nav-link">Home</a></li>
               <li class="nav-item active"><a href="helpdesk.php" class="nav-link">Help Desk</a></li>
               <li class="nav-item"><a href="donation.php" class="nav-link">Donations</a></li>
               <li class="nav-item"><a href="comment.php" class="nav-link">Comments</a></li>
               <li class="nav-item"><a href="profile.php" class="nav-link">Profile</a></li>
               <li class="nav-item"><a href="logout.php" class="nav-link" onclick="return confirm('are you sure?')">log out</a></li>
               </ul>
               </div>
            </nav>
    
    <div class="row">
    <div class= "helpdesk-title col-12" style="text-align:center">
        <h1 style="font-size:4vw"> GRAMODHAYA Donation</h1>
        <br>
        <br>
        
        
        
        <h1> HELP DESK...</h1>
   
    </div>
    </div>
    
    <div class="container text-center">
        <div class="row">
            <div class="col-md-8 col-md-offset-2" style="margin-left: 15%; margin-top: 5%;">
                 <form  method="post" action="helpdesk.php">

                 <?php
          if(!empty($errors)){
           echo "<div class='errmsg alert alert-danger'>";
           echo "<b>There is errors on posting comment</b><br>";
            foreach($errors as $error){
              echo '- '.$error.'<br>';
            }

           echo "</div>";
           echo "<br>";
           echo "<br>";
          }
        
        ?>
       
        <input name="" type="text" class="form-control" placeholder="Your Name" disabled <?php echo 'value="'.$username.'"';?>>
        <br>
        <input name="" type="email" class="form-control" placeholder="Your e-mail" disabled <?php echo 'value="'.$email.'"';?>>
        <br>
            
            <input type="text" name="Reason" class="form-control" placeholder="Reason" row="6" <?php echo 'value="'.$hereason.'"';?>><br>
            
            <input type="submit" name="submit" class="form-control btn btn-primary" value="SEND MESSAGE" style="width: 50%;">
            
        </form>
            </div>
        </div>
    </div>
    <script src="Resourses/js/jquery-3.3.1.min.js"></script>
</body>

</html>