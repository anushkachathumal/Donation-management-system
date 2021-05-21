<?php

session_start();


require 'commentmailer/class.phpmailer.php';
require 'commentmailer/PHPMailerAutoload.php';
?>
<?php
  if(!isset($_SESSION['username'])){
       echo"<script>window.open('login.php','_self')</script>"; 
  }

  $username = $_SESSION['username'];

  $errors = array();

  if(isset($_POST['submit'])){

  if(empty(trim($_POST['reply']))){
    $errors[] = "reply is required";
}

if(strlen(trim($_POST['reply'])) < 10){
    $errors[] = "reply is too short";
}

if(empty($errors)){

    $user_name = $username;
    $reply = $_POST['reply'];

    $conn = mysqli_connect("localhost","root","","foundation");

  $sql = "INSERT INTO comment(uname,comt) VALUES ('{$user_name}','{$reply}')";

  $result = mysqli_query($conn,$sql);

  if($result){
    echo"<script>alert('reply send.');
        window.location='comment.php';
    </script>";
    
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Debugoutput = 'html';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "np.madushamethsiri81@gmail.com";
    $mail->Password = "0332272333";
    $mail->setFrom('mailer.azone@gmail.com', 'gramodaya');
    $mail->addAddress('np.madushamethsiri81@gmail.com', 'gramodaya');
    //$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
    $mail->Subject = 'conirmation';
    $mail->Body = "
          new comment
          ";
    if (!$mail->send()) {
        echo "<script>alert('Mail not sent')</script>";
    } 
    else {
         echo "<script>alert('Mail Sent!')</script>";
      
    }
}

else{
    echo"<script>alert('Not saved,check Inputs!');</script>";
}
  }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <style>
input[type=text], select, textarea{
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
  margin-left:25%;
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
<br>
<br>
<div class="container">
  <form action="" method="post">

  <?php
          if(!empty($errors)){
           echo "<div class='errmsg alert alert-danger'>";
           echo "<b>There is errors on sending reply</b><br>";
            foreach($errors as $error){
              echo '- '.$error.'<br>';
            }

           echo "</div>";
           echo "<br>";
          }
        
        ?>

    <div class="row">
      <div class="col-25">
        <label for="fname">user name :</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" disabled <?php echo "value='$username'";?>>
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="subject">reply :</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="reply" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="post" name="submit">
    </div>
  </form>
</div>
</body>
</html>