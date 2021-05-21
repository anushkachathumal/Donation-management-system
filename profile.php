<?php
session_start();

$username = $_SESSION['username'];

$newcon = mysqli_connect("localhost","root","","foundation");

$sql = "SELECT * FROM register_form WHERE user_name = '{$username}'";

$newresult = mysqli_query($newcon,$sql);

while($row=mysqli_fetch_array($newresult)){
    $id = $row['register_id'];
    $user_name = $row['user_name'];
    $useremail = $row['email'];
    $contact = $row['contact_1'];
    $contact1 = $row['contact_2'];
    $password = $row['password'];
    $dob = $row['dob'];

}

?>

<!DOCTYPE html>
<html>
    <head>
    
        <title>Update profile</title>
        
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
     <link rel="stylesheet" type="text/css" href="Resourses/boostrap/bootstrap.min.css">
    <link  href="Resourses/boostrap/bootstrap.css">
     <script type="text/javascript" src="Resourses/boostrap/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
    <script src="Resourses/js/jquery-3.3.1.slim.min.js"></script>
    <script src="Resourses/js/bootstrap.js"></script>
         <script type="text/javascript">
        
        function Validate() 
        {
            var password = document.getElementById("pass").value;
            var confirmPassword = document.getElementById("cmpass").value;
            if (password != confirmPassword){
                
                return false;
            }
            return true;
        }
    
    </script>
        
        
       <style>
* {
  box-sizing: border-box;
}

input[type=text],[type=email],[type=password],[type=date],[type=radio],[type=number],[type=tel], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}


.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
           
               
</style>
    
    
    </head>
    <body>
        <?php
        
      $errors = array();

      $username = "";
      $con = "";
      $cont = "";
      $email = "";
      $password = "";
      $compassword = "";
      $Dob = "";
      $gender = "";


    




        if(isset($_POST['submit'])){



          $dbServername = "localhost";
          $dbUsername = "root";
          $dbPassword = "";
          $dbName = "foundation"; 
            
        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

       
        $con = $conn->real_escape_string($_POST['mnum1']);
        $cont = $conn->real_escape_string($_POST['mnum2']);
        $email = $conn->real_escape_string($_POST['email']);
        $password = $conn->real_escape_string($_POST['pass']);
        $compassword = $conn->real_escape_string($_POST['cmpass']);
        $Dob = $conn->real_escape_string($_POST['date']);

        $newpassword = sha1($password);
        
         

      

        if(empty(trim($_POST['mnum1']))){
          $errors[] = "Mobile number is required";
        }

        if(empty(trim($_POST['mnum2']))){
          $errors[] = "Mobile number is required";
        }

        
        if(empty(trim($_POST['email']))){
          $errors[] = "Email  is required";
        }

        if(empty(trim($_POST['pass']))){
          $errors[] = "Password is required";
        }

        if(empty(trim($_POST['cmpass']))){
          $errors[] = "Confirm password is required";
        }

        if(empty(trim($_POST['date']))){
          $errors[] = "Date of birth is required";
        }

        

        if(strlen(trim($_POST['mnum2'])) > 7){
          $errors[] = "Mobile number not correct form";
        }

        if(strlen(trim($_POST['mnum2'])) < 7){
          $errors[] = "Mobile number not correct form";
        }

        if(strlen(trim($_POST['pass'])) < 6){
          $errors[] = "Password at least should 6 characters";
        }

        $email = $conn->real_escape_string($_POST['email']);
        $username = $user_name;

        $sql = "SELECT * FROM register_form WHERE email = '{$email}' LIMIT 1";
        $newsql = "SELECT * FROM register_form WHERE user_name = '{$username}' LIMIT 1";

        $result  = mysqli_query($conn,$sql);

     

        
        
        $currentdate = date("Y");
        $userdate = $_POST['date'];
        
        $yearoly = date('Y',strtotime($userdate));

        $datedifference = $currentdate - $yearoly;

        if($datedifference <= 16){
            $errors[] = "your age is should be greater than 16";
        }


        if(empty($errors)){    
            
            $con = $conn->real_escape_string($_POST['mnum1']);
            $cont = $conn->real_escape_string($_POST['mnum2']);
            $email = $conn->real_escape_string($_POST['email']);
            $password = $conn->real_escape_string($_POST['pass']);
            $compassword = $conn->real_escape_string($_POST['cmpass']);
            $Dob = $conn->real_escape_string($_POST['date']);
           
            $hashpassword = sha1($password);
            $hcpassword = sha1($compassword);
            
    
            if($password == $compassword){
               
               $qry ="UPDATE register_form SET contact_1='{$con}',contact_2='{$cont}',email='{$email}',password='{$hashpassword}',con_pass='{$hcpassword}',dob='{$Dob}' WHERE register_id = '{$id}'";
                $save = mysqli_query($conn,$qry);
                if($save){
                    echo"<script>alert('succesfull update.');
                        window.location='home2.php';
                    </script>";
                    
                }
                
                else{
                    echo"<script>alert('Not saved,check Inputs!');</script>";
                }
            }else{
                echo "<script>alert('Incorrect password!');</script>";
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
               <li class="nav-item"><a href="helpdesk.php" class="nav-link">Help Desk</a></li>
               <li class="nav-item"><a href="donation.php" class="nav-link">Donations</a></li>
               <li class="nav-item"><a href="comment.php" class="nav-link">Comments</a></li>
               <li class="nav-item active"><a href="profile.php" class="nav-link">Profile</a></li>
               <li class="nav-item"><a href="logout.php" class="nav-link" onclick="return confirm('are you sure?')">log out</a></li>
               </ul>
               </div>
            </nav>
        
     <div class="row btn-primary">
        <div class="col-12">
        <h1 style="text-center;margin-left:40%">Update profile</h1>
         </div>
        </div> 
        
<div class="container mt-5">
        <form method="post" action="">

        <?php
          if(!empty($errors)){
           echo "<div class='errmsg alert alert-danger'>";
           echo "<b>There is errors on your form</b><br>";
            foreach($errors as $error){
              echo '- '.$error.'<br>';
            }

           echo "</div>";
           echo "<br>";
          }
        
        ?>

    <div class="row">
      <div class="col-25">
        <label for="fname">User Name :</label>
      </div>
      <div class="col-75">
         <input type="text" name="uname" id="name"
            placeholder="Enter user Name" / pattern="[a-zA-Z0-9]{3,}" disabled <?php echo 'value="'.$user_name.'"';?>>
      </div>
    </div>
            
      <div class="row">
      <div class="col-25">
        <label for="country">Mobile number :</label>
      </div>
      <div class="col-75">
        <select id="ph" name="mnum1" <?php echo 'value="'.$contact.'"';?>>
         <option>070</option>
            <option >071</option>
            <option>072</option>
            <option>075</option>
            <option>076</option>
            <option>077</option>
            <option>078</option>
        </select>
          
      </div>
         
    </div> 
        
    <div class="row">
        <div class="col-25">
        <label for="country">Mobile number:</label>
      </div>
             <div class="col-75">
        <input type="number" name="mnum2" id="num"
            placeholder="other numbers of contact" <?php echo 'value="'.$contact1.'"';?>>
          </div>
            
            </div>
            
    <div class="row">
      <div class="col-25">
        <label for="lname">Email :</label>
      </div>
      <div class="col-75">
         <input type="email" name="email" id="email"
            placeholder="user@mail.com" <?php echo 'value="'.$useremail.'"';?>>
      </div>
    </div>
            
      <div class="row">
      <div class="col-25">
        <label for="subject">Password :</label>
      </div>
      <div class="col-75">
         <input type="password" name="pass" id="pass"
            placeholder="Enter Your Password"/ pattern="[a-zA-Z0-9]{3,}"> 
      </div>
    </div>    
            
     <div class="row">
      <div class="col-25">
        <label for="subject">Confirm password :</label>
      </div>
      <div class="col-75">
         <input type="password" name="cmpass" id="cmpass"
            placeholder="Enter Your Password"/ pattern="[a-zA-Z0-9]{3,}" > 
      </div>
    </div>    
            
     <div class="row">
      <div class="col-25">
        <label for="subject">Date of birth :</label>
      </div>
      <div class="col-75">
         <input type="date" name="date" id="dob" <?php echo 'value="'.$dob.'"';?>>
      </div>
    </div>    
            
    
  
    

            <div class="row form-group" >
        <div class="col-25">
          
        </div>
  
        <div class="col-75">
          <button type="submit" name="submit" class="btn btn-primary">
            update
         </button>
         <button type="reset" class="btn btn-danger">
            Clear
         </button>
  </form>
</div>
    
    
    </body>






</html>




