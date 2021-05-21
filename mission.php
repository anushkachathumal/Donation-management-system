<?php
    session_start();
?>
<?php
    if(!isset($_SESSION['adminuser'])){
        echo"<script>window.open('adminlogin.php','_self')</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Resourses/boostrap/bootstrap.min.css">
    <link  href="Resourses/boostrap/bootstrap.css">
    
   
   
    <title>Document</title>

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

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
               <a href="" class="navbar-brand" style="font-size:30px">Gramodaya</a>
               <button class="navbar-toggler" data-toggle="collapse" data-target="#new"><span class="navbar-toggler-icon"></span></button>
               
               <div class="collapse navbar-collapse justify-content-center" id="new">
               <ul class="navbar-nav">
               
               <li class="nav-item"><a href="upcomingevent.php" class="nav-link" style="margin-right:20px;font-size:25px">Events</a></li>
               <li class="nav-item"><a href="adminhedesk.php" class="nav-link" style="margin-right:20px;font-size:25px">Help Desk</a></li>
               <li class="nav-item"><a href="admin_manage_member.php" class="nav-link" style="margin-right:20px;font-size:25px">Remove members</a></li>
               <li class="nav-item"><a href="admindonation.php" class="nav-link" style="margin-right:20px;font-size:25px">Donations</a></li>
                 <li class="nav-item"><a href="admin_comment.php" class="nav-link" style="margin-right:20px;font-size:25px">Comments</a></li>
                 <li class="nav-item"><a href="viewjob.php" class="nav-link" style="margin-right:20px;font-size:25px">job</a></li>
                 <li class="nav-item active"><a href="mission.php" class="nav-link" style="margin-right:20px;font-size:25px">Achivements</a></li>
               <li class="nav-item"><a href="logout.php" class="nav-link" onclick="return confirm('are you sure?')" style="font-size:25px;">log out</a></li>
               </ul>
               </div>
            </nav>

    <?php
    
    $errors = array();

    $mission = "";

    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "foundation"; 
      
  $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

        if(isset($_POST['register'])){

            $mission = $_POST['mission'];            

           

          if(empty(trim($_POST['mission']))){
              $errors[] = "mission is reqired";
          }

          if(strlen(trim($_POST['mission'])) < 20){
              $errors[] = "mission description too short";
          }

          if(empty($errors)){
              $mission = $_POST['mission'];

              $sql = "INSERT INTO mission(mission) VALUES ('{$mission}')";

              $result = mysqli_query($conn,$sql);

              if($result == 1){
                echo"<script>alert('Mission is updated');</script>";
              }
              else{
                echo"<script>alert('Mission is not updated');</script>";
              }
          }

        }
    
    ?>

<div class="row btn-primary">
        <div class="col-12">
        <h1 style="text-center;margin-left:40%">Achivements</h1>
         </div>
        </div> 
        
<div class="container mt-5">
        <form method="post" action="mission.php">
        
        <?php
          if(!empty($errors)){
           echo "<div class='errmsg alert alert-danger'>";
           echo "<b>There is errors on update mission</b><br>";
            foreach($errors as $error){
              echo '- '.$error.'<br>';
            }

           echo "</div>";
           echo "<br>";
          }
        
        ?>

    <div class="row">
      <div class="col-25">
        <label for="fname" style="margin-left:20%;">Achievements :</label>
      </div>
      <div class="col-75">
         <input type="text" name="mission" id="name"
            placeholder="state latest achivement" <?php echo 'value="'.$mission.'"';?>>
      </div>
    </div>
            
     <br>
  
    <div class="form-group text-center">
            
           <input class="form-control btn btn-primary" type="submit" name="register" value="post achivements" style="width: 50%;">
            </div>
            
             <div class="form-group text-center">
               
                 <input class="form-control btn btn-primary" type="reset"  value="reset" style="width: 50%;">
                
            </div>
  </form>

         

  <table class="table table-dark">
  <th>achivements</th>
  <th>delete</th>

  <?php

$newsql = "SELECT * FROM mission";

$newresult = mysqli_query($conn,$newsql);

while($row = mysqli_fetch_array($newresult)){
  
    echo "<tr>";

        echo "<td>";
        echo $row['mission'];
        echo "</td>";

        echo "<td>";
        echo "<a href='delete.php?user_id={$row['id']}' role='button' class='btn btn-danger'>delete</a> ";
        echo "</td>";

    echo "</tr>";
}

    
?>
  
  </table>
</div>
    
</body>
</html>