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
    <title>admin help desk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Resourses/boostrap/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="donate.css">
     <link rel="stylesheet" type="text/css" href="Resourses/boostrap/bootstrap.min.css">
    <link  href="Resourses/boostrap/bootstrap.css">
     <script type="text/javascript" src="Resourses/boostrap/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
    <script src="Resourses/js/jquery-3.3.1.slim.min.js"></script>
    <script src="Resourses/js/bootstrap.js"></script>
    
    
   
    
    <style>
        #na{
            margin-left: 20px;
            margin-top: 20px;
        
        }
        
        #na h4{
            margin-left: 40px;
        }
        
        #ea{
            margin-left: 20px;
        
        }
        
        #ea h4{
            margin-left: 40px;
        }
        
        #re{
            margin-left: 20px;
            
        }
        
        #re h4{
            margin-left: 40px;
        }
        
        #he{
            background-color: gray;
        }
        
        hr{
            background-color: black;
            height: 1px;
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
               <li class="nav-item active"><a href="adminhedesk.php" class="nav-link" style="margin-right:20px">Help Desk</a></li>
               <li class="nav-item"><a href="admin_manage_member.php" class="nav-link" style="margin-right:20px">Remove members</a></li>
               <li class="nav-item"><a href="admindonation.php" class="nav-link" style="margin-right:20px">Donations</a></li>
                 <li class="nav-item"><a href="admin_comment.php" class="nav-link" style="margin-right:20px">Comments</a></li>
                 <li class="nav-item"><a href="viewjob.php" class="nav-link" style="margin-right:20px">job</a></li>
                 <li class="nav-item"><a href="mission.php" class="nav-link" style="margin-right:20px">Achivements</a></li>
               <li class="nav-item"><a href="logout.php" class="nav-link" onclick="return confirm('are you sure?')">log out</a></li>
               </ul>
               </div>
            </nav>
    <br>
    <br>
    
<?php
        $dbServername = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "foundation";
        
        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

        $sql=" select * from help_desk ORDER BY helpdesk_id";

         $result=mysqli_query($conn,$sql);

         

         echo "<table class='table table-defult'>";
         echo "<th>name</th>";
        echo  "<th>email</th>";
        echo "<th>reaason</th>";
        echo "<th>send</th>";
        echo "<th>delete</th>";

         while($row=mysqli_fetch_array($result)){
             $name = $row['name'];
              $email = $row['email'];
              $reason = $row['reason'];
              $userid = $row['helpdesk_id'];
             
             
            ?>

           <tr>
          
           
        <td><?php echo $name;?></td>
           <td><?php echo $email;?></td>
           <td><?php echo $reason; ?></td>
           <td><a <?php echo "href='helpdeskmail.php?user_id={$row['helpdesk_id']}'"?> class='btn btn-primary' onclick="return confirm('are you sure?')">send</a></td>
            <td><a <?php echo "href='deletehelpdesk.php?user_id={$row['helpdesk_id']}'"?> class='btn btn-danger' onclick="return confirm('are you sure?')">delete</a></td>
           
          
           </tr>

                <?php
          
         }
         echo "</table>";
?>
    

    
    
    </body>
</html>