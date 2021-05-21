<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Admin login</title>
    <link rel="stylesheet" href="adminlogin.css">
    <link rel="stylesheet" href="Resourses/boostrap/bootstrap.min.css">
    <link rel="stylesheet" href="Resourses/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="Resourses/js/bootstrap.min.js">
    
    </head>
<body>
    <?php
         if(isset($_POST['login'])){
        $dbServername = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "foundation";
             
         $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
             
         $username = $_POST['user'];
         $password = $_POST['passwd'];
             
         $sql = "select * from admin_register where user_name='$username' AND password='$password' limit 1";
             
        $result=mysqli_query($conn,$sql);
        
          if(mysqli_num_rows($result)==1){
              $_SESSION['adminuser'] = $username;
              if(isset($_SESSION['adminuser'])){
                  echo"<script>window.open('upcomingevent.php','_self')</script>";
              }
           
        }
       else{
            echo"<script>alert('incorrect user name or password');</script>";
             
         }
         }
    ?>
    <div class="login-box">
    <h1>GRAMODHAYA ADMIN LOGIN</h1>
        
        <form method="post">
        <div class="textbox" >
            <i class="fa fa-user" aria-hidden="true"></i>
        <input type="text" placeholder="Username" name="user" value="" required
               >
        
        </div>
        
        <div class="textbox" >
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" placeholder="Password" name="passwd" value="" required id="password">
        
        </div>
            
            <p>
                <label><h7>show pasword :</h7></label>
            <input type="checkbox" onclick="showpassword()" style="width :20px;height :20px;margin-top :5%;">
            </p>   
        
            <input class="btn btn-primary" type="submit" name="login" value="LogIn">
        </form>
    
    
    </div>
    
    <script>
		
		
			function showpassword() {
		  var x = document.getElementById("password");
		  if (x.type === "password") {
		    x.type = "text";
		  } else {
		    x.type = "password";
		  }
		}
</script>
    
    </body>


</html>