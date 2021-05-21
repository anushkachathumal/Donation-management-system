<?php
    session_start();
?>
<?php
    if(!isset($_SESSION['adminuser'])){
        echo"<script>window.open('adminlogin.php','_self')</script>";
    }
?>

<html>
<head>
    <title>view job</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="donate.css">
     <link rel="stylesheet" type="text/css" href="Resourses/boostrap/bootstrap.min.css">
    <link  href="Resourses/boostrap/bootstrap.css">
     <script type="text/javascript" src="Resourses/boostrap/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
    <script src="Resourses/js/jquery-3.3.1.slim.min.js"></script>
    <script src="Resourses/js/bootstrap.js"></script>
    
   
   
    
    <style>
        #ty{
            
            width: 60%;
            margin-left: 20%;
            border-style: solid;
            margin-bottom: 20px;
            margin-top: 20px;
        }
        
        #btn{
            width: 30%;
            margin-left: 35%;
        }
        
        h2{
            font-family: sans-serif;
            margin-left: 20px;
            margin-top: 20px;
        }
    
    </style>
    
    </head>
<body>
    
     <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
               <a href="" class="navbar-brand" style="font-size:30px">Gramodaya</a>
               <button class="navbar-toggler" data-toggle="collapse" data-target="#new"><span class="navbar-toggler-icon"></span></button>
               
               <div class="collapse navbar-collapse justify-content-center" id="new">
               <ul class="navbar-nav">
               
               <li class="nav-item"><a href="upcomingevent.php" class="nav-link" style="margin-right:20px">Events</a></li>
               <li class="nav-item"><a href="adminhedesk.php" class="nav-link" style="margin-right:20px">Help Desk</a></li>
               <li class="nav-item"><a href="admin_manage_member.php" class="nav-link" style="margin-right:20px">Remove members</a></li>
               <li class="nav-item"><a href="admindonation.php" class="nav-link" style="margin-right:20px">Donations</a></li>
                 <li class="nav-item"><a href="admin_comment.php" class="nav-link" style="margin-right:20px">Comments</a></li>
                 <li class="nav-item active"><a href="viewjob.php" class="nav-link" style="margin-right:20px">job</a></li>
                 <li class="nav-item"><a href="mission.php" class="nav-link" style="margin-right:20px">Achivements</a></li>
               <li class="nav-item"><a href="logout.php" class="nav-link" onclick="return confirm('are you sure?')">log out</a></li>
               </ul>
               </div>
            </nav>
    
    <h2>Manage applied vacanicies.</h2>
    <?php
   
    
    $dbServername = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "foundation";
        
        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    
    $sql = "select * from job_application ORDER BY job_id";
    
    
    $result = mysqli_query($conn,$sql);

    echo "<table class='table table-default'>";
    echo "<th>name</th>";
   echo  "<th>email</th>";
   echo "<th>send message</th>";
   echo "<th>view</th>";
   echo "<th>delete</th>";
    
  
    while($row=mysqli_fetch_array($result)){
      /* ?>

        <div id = 'ty'>
        <form action="">
        
        Full Name: <br>
        <input type="text" name="" id="" value="<?php echo $row['full_name'] ?>">
        Full Name: <br>
        <input type="text" name="" id="" value="<?php echo $row['full_name'] ?>">
        
        </form>
        </div>


       <?php
*/  $id = $row['job_id'];
    $name =  $row['initial_name'];
    $email = $row['email'];
    
        ?>
        <tr>
        <td><?php echo $name;?></td>
             <td><?php echo $email;?></td>
             <td><a <?php echo "href='sendconfirmation.php?id=$id'"?> class='btn btn-primary' onclick="return confirm('are you sure?')">send message</a></td>
             <td><a <?php echo "href='viewform.php?id=$id'"?> class='btn btn-success'>view</a></td>
             <td><a <?php echo "href='deletejobapplication.php?id=$id'"?> class='btn btn-danger' onclick="return confirm('are you sure?')">delete</a></td>
    </tr>
    <?php
    
    }
    echo "</table>";
    ?>
    
    </body>


</html>

