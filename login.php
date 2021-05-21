<?php
 session_start();

?>
<! DOCTYPE html>
<html>
<head>
    <title>Log in page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" type="text/css" href="Resourses/boostrap/bootstrap.min.css">
    <link  href="Resourses/boostrap/bootstrap.css">
     <script type="text/javascript" src="Resourses/boostrap/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
    <script src="Resourses/js/jquery-3.3.1.slim.min.js"></script>
    <script src="Resourses/js/bootstrap.js"></script>
</head>

<body id="one">
    
    <?php
    
        if(isset($_POST['login'])){
        $dbServername = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "foundation";
        
        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
     
    
    
       $uname =$_POST['user'];
       $pass =$_POST['password'];

       $hpass = sha1($pass);
        
        $sql="select * from register_form where user_name='$uname' AND password='$hpass' limit 1";
        
        $result=mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($result)==1){
            $_SESSION['username'] = $uname;
            $newsql = "UPDATE register_form SET last_login = NOW() where user_name = '{$uname}'";
            mysqli_query($conn,$newsql);            
            if(isset($_SESSION['username'])){
                 
               echo"<script>window.open('home2.php','_self')</script>"; 
                
            }
           
            
           
        }else{
            echo"<script>alert('incorrect user name or password');</script>";
        }
            

    }    
?>
   
        
        <div class="container mt-5">
            <div class="row h-50 justify-content-center align-items-center">
                
                 <div class="form-group text-center" id="header">
                <label class="text-center"><h1>LOGIN</h1></label>
                </div>
                 <div  id="qw">
                <div>
                      <form method="post">
            
            <div class="form-group text-center">
                <label >Username</label>
                <input type="text" class="form-control" name="user" required>
            </div>
            <div class="form-group text-center">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" required>
                
            </div>
                    <p>
                        <label><b>show password :</b></label>      
                    <input type="checkbox" onclick="showpassword()" style="width :20px;height :20px;">
            <div class="text-center">
                <input class="form-control btn btn-primary" type="submit" name="login" value="Login" style="width: 50%;">
            </div>
                 <br>
            <div class="form-group text-center">
               
                 <a href="re2.php" class="btn btn-primary" role="button" style="width: 50%;">sign up</a>
                <br>
            </div>
                          
            </form>
                     </div>
            </div>
            
           
               
        </div>
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
    
    <script type="text/javascript" src="Resourses/boostrap/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
</body>
</html>
