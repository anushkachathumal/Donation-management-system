<!DOCTYPE html>


<html>
    <head>
        <title>Job application</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <script type="text/javascript">
            function myfunction(){
                document.getElementById("box1").reset();
            } 
            
           
        </script>
      
    <style>
        
        input[type=text],[type=email],[type=number], select, textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

/* Style the label to display next to the inputs */
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left: 25%;
}

/* Style the container */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

/* Floating column for labels: 25% width */
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

/* Floating column for inputs: 75% width */
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
        $iname = "";
      
        $email = "";
        $Gender = "";
        $Contacts = "";
        $Heducation = "";
        $qulification = "";
       
        $Contact1 = "";



        
        if(isset($_POST['submit'])){
          $dbServername = "localhost";
          $dbUsername = "root";
          $dbPassword = "";
          $dbName = "foundation"; 
        
        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

        $username = $conn->real_escape_string($_POST['Fname']);
        $iname = $conn->real_escape_string($_POST['inname']); 
        
        $email = $conn->real_escape_string($_POST['email']); 
        $Gender = $conn->real_escape_string($_POST['gender']);
        $Contacts = $conn->real_escape_string($_POST['contacts']);
        $Heducation = $conn->real_escape_string($_POST['heducation']);
        $qulification = $conn->real_escape_string($_POST['wq']);
      
        $Contact1 = $conn->real_escape_string($_POST['contact1']);

        if(empty(trim($_POST['Fname']))){
          $errors[] = "First name is required";
        }

        if(empty(trim($_POST['inname']))){
          $errors[] = "Initial name is required";
        }

       

        if(empty(trim($_POST['email']))){
          $errors[] = "email is required";
        }

        if(empty(trim($_POST['gender']))){
          $errors[] = "gender is required";
        }

        if(empty(trim($_POST['contacts']))){
          $errors[] = "Contact number is required";
        }

        if(empty(trim($_POST['heducation']))){
          $errors[] = "About hiegher education is required";
        }

        if(empty(trim($_POST['wq']))){
          $errors[] = "Mention do or don't yor have working expirience is required";
        }

        

       

        if(strlen(trim($_POST['contacts'])) > 10){
          $errors[] = "Contact number invalid";
        }

        if(strlen(trim($_POST['contacts'])) < 10){
          $errors[] = "Contact number invalid";
        }

        if(strlen(trim($_POST['contact1'])) > 10){
          $errors[] = "Contact number invalid";
        }

        if(strlen(trim($_POST['contact1'])) < 10){
          $errors[] = "Contact number invalid";
        }

        if(strlen($_POST['Fname']) < 10){
          $errors[] = "First name is invalid";
        }

        $email = $conn->real_escape_string($_POST['email']);
        $sql = "SELECT * FROM job_application WHERE email = '{$email}' LIMIT 1";

        $result = mysqli_query($conn,$sql);

        if($result){
          if(mysqli_num_rows($result)){
            $errors[] = "email is already exist";
          }
        }

       
       

        

            

        if(empty($errors)){
            $username = $conn->real_escape_string($_POST['Fname']);
            $iname = $conn->real_escape_string($_POST['inname']); 
            
            $email = $conn->real_escape_string($_POST['email']); 
            $Gender = $conn->real_escape_string($_POST['gender']);
            $Contacts = $conn->real_escape_string($_POST['contacts']);
            $Heducation = $conn->real_escape_string($_POST['heducation']);
            $qulification = $conn->real_escape_string($_POST['wq']);
           
            $Contact1 = $conn->real_escape_string($_POST['contact1']);
            
            
            $sql = "INSERT INTO job_application(full_name,initial_name,email,gender,contact,hiegher_edu,wexpirience,contact_1) VALUES('$username','$iname', '$email','$Gender','$Contacts','$Heducation', '$qulification','$Contact1')";
            $saveapplication = mysqli_query($conn,$sql);
            if($saveapplication){
                echo "<script>alert('submit is succesfull...Our commite member will contact you for further actions');</script>";
            }else{
                echo "<script>alert('Not Saved, Check Inputs!');</script>";
            }
            
            
          }
                    }

?>

        <div id="header">
            <h1>Join with us</h1>
        
        </div>
        
        <div>
            <h3 style="margin-left:10px;"><a href="condition.html">terms & conditions</a></h3>
            <div id="two">
                </div>
        </div>
        
        <div class="container">
       

  <form action="jobapplication.php" method="post">

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
        <label for="fname">Full Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="Fname" placeholder="Your name.." <?php echo 'value="'.$username.'"';?>>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Name with initial :</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="inname" placeholder="intial name.." <?php echo 'value="'.$iname.'"';?>>
      </div>
    </div>
    
       <div class="row">
      <div class="col-25">
        <label for="country">Email :</label>
      </div>
      <div class="col-75">
        <input type="email" id="lname" name="email" placeholder="email.." <?php echo 'value="'.$email.'"';?>>
      </div>
    </div>
      <div class="row">
      <div class="col-25">
        <label for="country">Gender :</label>
      </div>
      <div class="col-75">
         <input type="radio" id="bl5"  name="gender" value="male" checked/>Male
                
                <input type="radio" id="bl6" name="gender" value="female"/>Female
      </div>
    </div>
      
       <div class="row">
      <div class="col-25">
        <label for="country">Contact 1 :</label>
      </div>
      <div class="col-75">
        <input type="number"  name="contacts"/  <?php echo 'value="'.$Contacts.'"';?> placeholder="xxxxxxxxxx">
      </div>
    </div>
      
      <div class="row">
      <div class="col-25">
        <label for="country">Contact 2 :</label>
      </div>
      <div class="col-75">
        <input type="number"  name="contact1"/ pattern="[0-9]{10}" <?php echo 'value="'.$Contact1.'"';?> placeholder="xxxxxxxxxx">
      </div>
    </div>
      
      
    <div class="row">
      <div class="col-25">
        <label for="subject">Hiegher education :</label>
      </div>
      <div class="col-75">
        <input type="text" id="subject" name="heducation" placeholder="Write something.." style="height:60px" <?php echo 'value="'.$Heducation.'"';?>>
      </div>
    </div>
      
       <div class="row">
      <div class="col-25">
        <label for="country">Do you have working experience: </label>
      </div>
      <div class="col-75">
         <input type="radio" style="margin-top:30px;" id="bl5" name="wq" value="yes" checked>Yes
                
                <input type="radio"  id="bl6" name="wq" value="no">No
      </div>
    </div>
      
      
    <div class="row">
      <input type="submit" value="Submit" name="submit">
    </div>
  </form>
</div>
        
        
       
            
    
    
    
    </body>







</html>