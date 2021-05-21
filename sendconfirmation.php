<?php

session_start();


require 'commentmailer/class.phpmailer.php';
require 'commentmailer/PHPMailerAutoload.php';
?>
<?php
  if(!isset($_SESSION['adminuser'])){
       echo"<script>window.open('login.php','_self')</script>"; 
  }
?>


<?php

  $user_id = $_GET['id'];

  $conn = mysqli_connect("localhost","root","","foundation");

  $sql = "SELECT * FROM job_application WHERE job_id = '{$user_id}'";

  $result = mysqli_query($conn,$sql);

  while($row=mysqli_fetch_array($result)){
      $email = $row['email'];
  }

  $errors = array();


  if(isset($_POST['submit'])){

    if(empty(trim($_POST['reply']))){
        $errors[] = "reply is required";
    }

    if(strlen(trim($_POST['reply'])) < 10){
        $errors[] = "reply is too short";
    }

    if(empty($errors)){

    $body = $_POST['reply'];

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
    $mail->setFrom('np.madushamethsiri81@gmail.com', 'gramodaya');
    $mail->addAddress($email);
    //$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
    $mail->Subject = 'job confirmation';
    $mail->Body = 
                $body
                ;
    if (!$mail->send()) {
        echo "<script>alert('Mail not sent')</script>";
    } 
    else {
           echo "<script>alert('Mail Sent!');
           window.location='viewjob.php';
           </script>";
        
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
        <label for="fname">email :</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" disabled <?php echo "value='$email'";?>>
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
      <input type="submit" value="send" name="submit">
    </div>
  </form>
</div>
</body>
</html>