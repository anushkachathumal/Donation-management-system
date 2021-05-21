<?php
session_start();

$username = $_SESSION['username'];

$newcon = mysqli_connect("localhost","root","","foundation");

$sql = "SELECT * FROM register_form WHERE user_name = '{$username}'";

$newresult = mysqli_query($newcon,$sql);

while($row=mysqli_fetch_array($newresult)){
    $contact1 = $row['contact_1'];
    $contact2 = $row['contact_2'];
}
?>

<?php
  if(!isset($_SESSION['username'])){
       echo"<script>window.open('login.php','_self')</script>"; 
  }
?>

<html>
<head>
    <title> Don2</title>
   <link rel="stylesheet" type="text/css" href="donate.css" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
     <link rel="stylesheet" type="text/css" href="Resourses/boostrap/bootstrap.min.css">
    <link  href="Resourses/boostrap/bootstrap.css">
     <script type="text/javascript" src="Resourses/boostrap/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
    <script src="Resourses/js/jquery-3.3.1.slim.min.js"></script>
    <script src="Resourses/js/bootstrap.js"></script>
    
    
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
  border-radius: 25px;
  background-color: gray;
   
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
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
               <a href="" class="navbar-brand" style="font-size:30px">Gramodaya</a>
               <button class="navbar-toggler" data-toggle="collapse" data-target="#new"><span class="navbar-toggler-icon"></span></button>
               
               <div class="collapse navbar-collapse justify-content-center" id="new">
               <ul class="navbar-nav">
               
               <li class="nav-item"><a href="home2.php" class="nav-link">Home</a></li>
               <li class="nav-item"><a href="helpdesk.php" class="nav-link">Help Desk</a></li>
               <li class="nav-item active"><a href="donation.php" class="nav-link">Donations</a></li>
               <li class="nav-item"><a href="comment.php" class="nav-link">Comments</a></li>
               <li class="nav-item"><a href="logout.php" class="nav-link" onclick="return confirm('are you sure?')">log out</a></li>
               </ul>
               </div>
            </nav>
    
            <body id="two">
                
                <?php
                


                $dbServername = "localhost";
                 $dbUsername = "root";
                 $dbPassword = "";
                 $dbName = "foundation"; 
            
        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
                
                ?>
                
     <?php
                
        $errors = array();
                
            if(isset($_POST['submit'])){
           
              if(empty(trim($_POST['pdamount']))){
                $errors[] = "category  is required";
              }

              if(strlen($_POST['pdamount']) < 3){
                $errors[] = "invalid category";
            }
            
        if(empty($errors)){
            
        $dn = $username;
        $cont = $contact1;
        $conta = $contact2;
        $amou = $conn->real_escape_string($_POST['pdamount']);
            
            $qry = "INSERT INTO physical_donation( pdname, contac, contact, pdam) VALUES ('$dn','$cont','$conta','$amou')";
            $save = mysqli_query($conn,$qry);
            if($save){
                    echo"<script>alert('submit is complete.');</script>";
                }else{
                    echo"<script>alert('Not saved,check Inputs!');</script>";
                }
        }
        }
                ?>
                
                
        <h1>Physical Donation Here......</h1>
        
        <div class="container">
            
        <form method="post"  action="">

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
            
             <div class="row">
      <div class="col-25">
        <label for="fname">Donater Name :</label>
      </div>
      <div class="col-75">
         <input type="text" name="Fname" 
            placeholder="Enter User Name" disabled <?php echo 'value="'.$username.'"';?>>
      </div>
    </div>
            
     <div class="row">
      <div class="col-25">
        <label for="fname">Mobile Number:</label>
      </div>
      <div class="col-75">
          <select id="ph" name="n1" disabled <?php echo 'value="'.$contact1.'"';?>>
            <option>070</option>
            <option>071</option>
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
        <label for="fname">Other numbers :</label>
      </div>
      <div class="col-75">
         <input type="text" name="n2" id="num"
            placeholder="Enter Your Mobile Number" disabled <?php echo 'value="'.$contact2.'"';?>>
      </div>
    </div>
            
              <div class="row">
      <div class="col-25">
        <label for="fname">category :</label>
      </div>
      <div class="col-75">
          <input type="text" name="pdamount" 
            placeholder="books,plants..."  >
      </div>
    </div>
        <br>
          
            
    
    <div class="form-group text-center">
            
           <input class="form-control btn btn-primary" type="submit" name="submit" value="submit" style="width: 50%">
            </div> 
            
    <div class="form-group text-center">
               
                 <input class="form-control btn btn-danger" type="reset"  value="reset" style="width: 50%;">
                
            </div>
             
            
            
            
        </form>
        </div>    
     <script type="text/javascript" src="Resourses/js/jquery-3.3.1.min.js"></script>
    </body>




</html>