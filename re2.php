<!DOCTYPE html>
<html>
    <head>
    
        <title>Registration Form Creation</title>
        
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







        if(isset($_POST['register'])){



          $dbServername = "localhost";
          $dbUsername = "root";
          $dbPassword = "";
          $dbName = "foundation"; 
            
        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

        $username = $conn->real_escape_string($_POST['uname']);
        $con = $conn->real_escape_string($_POST['mnum1']);
        $cont = $conn->real_escape_string($_POST['mnum2']);
        $email = $conn->real_escape_string($_POST['email']);
        $password = $conn->real_escape_string($_POST['pass']);
        $compassword = $conn->real_escape_string($_POST['cmpass']);
        $Dob = $conn->real_escape_string($_POST['date']);
        $Gender = $conn->real_escape_string($_POST['gender']);
         

        if(empty(trim($_POST['uname']))){
          $errors[] = "User Name is required";
        }

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

        if(empty(trim($_POST['gender']))){
          $errors[] = "Gender is required";
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
        $username = $conn->real_escape_string($_POST['uname']);

        $sql = "SELECT * FROM register_form WHERE email = '{$email}' LIMIT 1";
        $newsql = "SELECT * FROM register_form WHERE user_name = '{$username}' LIMIT 1";

        $result  = mysqli_query($conn,$sql);

        if($result){
          if(mysqli_num_rows($result)==1){
            $errors[] = "Email address already exists";
          }
        }

        $new_result = mysqli_query($conn,$newsql);

        if($new_result){

          if(mysqli_num_rows($new_result)==1){
            $errors[] = "User Name already exists";
          }
        }
        
        $currentdate = date("Y");
        $userdate = $_POST['date'];
        
        $yearoly = date('Y',strtotime($userdate));

        $datedifference = $currentdate - $yearoly;

        if($datedifference <= 16){
            $errors[] = "your age is should be greater than 16";
        }


        if(empty($errors)){    
            $username = $conn->real_escape_string($_POST['uname']);
            $con = $conn->real_escape_string($_POST['mnum1']);
            $cont = $conn->real_escape_string($_POST['mnum2']);
            $email = $conn->real_escape_string($_POST['email']);
            $password = $conn->real_escape_string($_POST['pass']);
            $compassword = $conn->real_escape_string($_POST['cmpass']);
            $Dob = $conn->real_escape_string($_POST['date']);
            $Gender = $conn->real_escape_string($_POST['gender']);
            $hashpassword = sha1($password);
            $hcpassword = sha1($compassword);
            
    
            if($password == $compassword){
                $qry = "INSERT INTO register_form(user_name, contact_1, contact_2, email, password, con_pass, dob, gender) VALUES ('$username','$con','$cont','$email','$hashpassword','$hcpassword',' $Dob','$Gender')";
                $save = mysqli_query($conn,$qry);
                if($save){
                    echo"<script>alert('registration is complete.');
                        window.location='index.php';
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
        
     <div class="row btn-primary">
        <div class="col-12">
        <h1 style="text-center;margin-left:40%">Register</h1>
         </div>
        </div> 
        
<div class="container mt-5">
        <form method="post" action="re2.php">

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
            placeholder="Enter user Name" / pattern="[a-zA-Z0-9]{3,}" <?php echo 'value="'.$username.'"';?>>
      </div>
    </div>
            
      <div class="row">
      <div class="col-25">
        <label for="country">Mobile number :</label>
      </div>
      <div class="col-75">
        <select id="ph" name="mnum1" >
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
            placeholder="other numbers of contact" <?php echo 'value="'.$cont.'"';?>>
          </div>
            
            </div>
            
    <div class="row">
      <div class="col-25">
        <label for="lname">Email :</label>
      </div>
      <div class="col-75">
         <input type="email" name="email" id="email"
            placeholder="user@mail.com" <?php echo 'value="'.$email.'"';?>>
      </div>
    </div>
            
      <div class="row">
      <div class="col-25">
        <label for="subject">Password :</label>
      </div>
      <div class="col-75">
         <input type="password" name="pass" id="pass"
            placeholder="Enter Your Password"/ pattern="[a-zA-Z0-9]{3,}" <?php echo 'value="'.$password.'"';?>> 
      </div>
    </div>    
            
     <div class="row">
      <div class="col-25">
        <label for="subject">Confirm password :</label>
      </div>
      <div class="col-75">
         <input type="password" name="cmpass" id="cmpass"
            placeholder="Enter Your Password"/ pattern="[a-zA-Z0-9]{3,}" <?php echo 'value="'.$compassword.'"';?>> 
      </div>
    </div>    
            
     <div class="row">
      <div class="col-25">
        <label for="subject">Date of birth :</label>
      </div>
      <div class="col-75">
         <input type="date" name="date" id="dob" <?php echo 'value="'.$Dob.'"';?>>
      </div>
    </div>    
            
    <div class="row">
      <div class="col-25">
        <label for="subject">Gender :</label>
      </div>
      <div class="col-75">
         <input type="radio" id=""  name="gender" value="male" checked>Male
          <input type="radio" id="" name="gender" value="female">Female
      </div>
    </div>    
  
    <div class="form-group text-center">
            
           <input class="form-control btn btn-primary" type="submit" name="register" value="register" style="width: 50%;">
            </div>
            
             <div class="form-group text-center">
               
                 <input class="form-control btn btn-danger" type="reset"  value="reset" style="width: 50%;">
                
            </div>
  </form>
</div>
    
    
    </body>






</html>