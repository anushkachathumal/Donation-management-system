<?php
    session_start();
?>
<?php
    if(!isset($_SESSION['adminuser'])){
        echo"<script>window.open('adminlogin.php','_self')</script>";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>admin physical donation.</title>
          <link rel="stylesheet" type="text/css" href="donate.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" type="text/css" href="Resourses/boostrap/bootstrap.min.css">
    <link  href="Resourses/boostrap/bootstrap.css">
     <script type="text/javascript" src="Resourses/boostrap/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
    <script src="Resourses/js/jquery-3.3.1.slim.min.js"></script>
    <script src="Resourses/js/bootstrap.js"></script>
        <style>
            #ty{
                background-color: gray;
                height: 500px;
            }
            
            h3{
                margin-left: 10px;
            }
            
            h2{
                margin-left: 140px;
            }
            
            hr{
                background-color: black;
                height: 2px;
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
               <li class="nav-item  active"><a href="admindonation.php" class="nav-link" style="margin-right:20px">Donations</a></li>
                 <li class="nav-item"><a href="admin_comment.php" class="nav-link" style="margin-right:20px">Comments</a></li>
                 <li class="nav-item"><a href="viewjob.php" class="nav-link" style="margin-right:20px">job</a></li>
                 <li class="nav-item"><a href="mission.php" class="nav-link" style="margin-right:20px">Achivements</a></li>
               <li class="nav-item"><a href="logout.php" class="nav-link" onclick="return confirm('are you sure?')">log out</a></li>
               </ul>
               </div>
            </nav>
        
        <?php
        
        $dbServername = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "foundation";
        
        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
        
        $sql = "select * from bank_donation ORDER BY bkid";
        
        $result = mysqli_query($conn,$sql);

        echo "<table class='table table-default'>";
         echo "<th>donator name</th>";
        echo  "<th>amount</th>";
       
       
        echo "<th>delete</th>";
        
        while($row = mysqli_fetch_array($result)){
            $dname = $row['bdname'];
            $did = $row['bkid'];
            $damount = $row['bdamou'];
            
            ?>

            <tr>
            <td><?php echo $dname;?></td>
             <td><?php echo $damount;?></td>
             <td><a <?php echo "href='deletebankdonation.php?user_id=$did'"?> class='btn btn-danger' onclick="return confirm('are you sure?')">delete</a></td>
        </tr>


            <?php
       
        }
        echo "</table>";
        ?>
    
    </body>


</html>