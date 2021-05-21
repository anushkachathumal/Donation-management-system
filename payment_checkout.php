<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>

<?php

session_start();

$uname = $_SESSION['username'];


?>

<?php
$errors = array();

if(isset($_POST['pay'])){
    require 'connection.php';

    if(empty(trim($_POST['amount']))){
        $errors[] = "amount  is required";
      }

if(empty($errors)){
$name = $username;
$amount = $_POST['amount'];


    $sql = "INSERT INTO bank_donation (bdname, bdamou)
    VALUES ('$name', '$amount')";

    if ($conn->query($sql) === TRUE) {
       // echo "New record created successfully";
      
        $_SESSION['amount'] = $amount;
        header('Location:index3.php');


    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    
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
               <li class="nav-item active"><a href="donation.php" class="nav-link">Donations</a></li>
               <li class="nav-item"><a href="comment.php" class="nav-link">Comments</a></li>
               <li class="nav-item"><a href="logout.php" class="nav-link" onclick="return confirm('are you sure?')">log out</a></li>
               </ul>
               </div>
            </nav>
<br>
<br>
   <div class="container">
       <div class="row">
           <div class="col-sm-12">
              
                <form action="payment_checkout.php" method="post">

                
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

                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name ="name" class="form-control" placeholder="Enter name" disabled <?php echo 'value="'.$uname.'"';?>>
                </div>
                <div class="form-group">
                    <label for="">Amount</label>
                    <input type="number" name ="amount" class="form-control" placeholder="Enter amount" max="10000" min="1000">
                </div>

                <input type="submit" value="Confirm" name = "pay" class="btn btn-primary">

                </form>

           </div>
       </div>
   </div>
</body>
</html>


