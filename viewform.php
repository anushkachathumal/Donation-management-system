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
    
<?php

    $conn = mysqli_connect("localhost","root","","foundation");

    $id = $_GET['id'];

    $sql = "SELECT * FROM job_application WHERE job_id = '{$id}'";

    $result = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_array($result)){
        $fullname = $row['full_name'];
        $initialname = $row['initial_name'];
        $email = $row['email'];
        $gender = $row['gender'];
        $contanct1 = $row['contact'];
        $contanct2 = $row['contact_1'];
        $higheducation = $row['hiegher_edu'];
        $wexpirience = $row['wexpirience'];
    }

?>

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
                 <li class="nav-item"><a href="mission.php" class="nav-link" style="margin-right:20px">mission</a></li>
               <li class="nav-item"><a href="logout.php" class="nav-link" onclick="return confirm('are you sure?')">log out</a></li>
               </ul>
               </div>
            </nav>
    
    <h2>Manage applied vacanicies.</h2>

    <form method='POST' action='action.php'>
<div id='ty'>
        <br>
       
        
	<h5>full_name:</h5>
	<input type='text' class='form-control' name='fname' <?php echo "value=$fullname";?> disabled>
	<br>
        
	<h5>initial name:</h5>
	<input type='text' class='form-control 'name='iname' <?php echo "value=$initialname";?> disabled>
	<br>
        
	
        
	<h5>Email:</h5>
	<input type='text'  class='form-control' name='email' <?php echo "value=$email";?> disabled>
	<br>
        
	<h5>gender:</h5>
	<input type='text'  class='form-control' name='gend' <?php echo "value=$gender";?> disabled>
	<br>
        
	<h5>contact:</h5>
	<input type='text'  class='form-control' name='co' <?php echo "value=$contanct1";?> disabled>
    <br>
        
    <h5>contact:</h5>
	<input type='text'  class='form-control' name='con' <?php echo "value=$contanct2";?> disabled>
    <br>
        
     <h5>hiegher education:</h5>";
	<input type='text'  class='form-control' name='he' <?php echo "value=$higheducation";?> disabled>
    <br>    
        
    <h5>working expirence:</h5>
	<input type='text'  class='form-control' name='we' <?php echo "value=$wexpirience";?> disabled>
<br>
        
     
    <br> 
        
        </div>
        
        <a <?php echo "href='deletejobapplication.php?id=$id'"?> class='btn btn-danger ' style="width:30%;margin-left:35%;" onclick="return confirm('are you sure?')">delete</a>
            
           
        
    
    
    </form>

</body>
</html>