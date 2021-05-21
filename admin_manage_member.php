<?php
$con=mysqli_connect('localhost','root','','foundation');

if($con-> connect_errno)
{
	echo $con->connect_error;
	die();
}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     
    <link rel="stylesheet" type="text/css" href="donate.css">
     <link rel="stylesheet" type="text/css" href="Resourses/boostrap/bootstrap.min.css">
    <link  href="Resourses/boostrap/bootstrap.css">
     <script type="text/javascript" src="Resourses/boostrap/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
    <script src="Resourses/js/jquery-3.3.1.slim.min.js"></script>
    <script src="Resourses/js/bootstrap.js"></script>
    
   
  
<style>
body {font-family:Arial,Helvetica,sans-serif;}
* {box-sizing:border-box;}

.bg-img{
background-image:
url("bookstore.jpeg");

min-height: 450px;

background-position:right;
background-repeat: no-repeat;
background-size: cover;

position:relative;
}

.container{
position: absolute;
margin: 20px;
width: auto;
}

.topnav {
overflow:hidden;
background-color: #ffA500;
}

.topnav a{

	float:left;
	color: #000000;
	text-align: center;
	padding: 14px 15px;
	text-decoration: none;
	font-size: 17px;
	}
	
.topnav a: hover{
background-color:#FF0000;
color: black;
}

.topnav a.active{
background-color:#DC143C;
color: white;
}

.topnav-right{
float: right;
}
    
    .quotes{ 
 padding: 10px; 
 background-color: #3A2166; 
 color:white; 
font-family: Consolas; 
text-align: center; 
font-size: 20px;
}

h2{ 
color:white; 
font-family: Consolas; 
text-align: center; 
font-size: 20px; 
font-family: "Arial", Times, serif;
}  

h1{
  font-family: "Times New Roman", Times, serif;
	font-size: 45px;
	font-weight: bold;
		
}



[class*="col-"] {
			float: left;
			padding: 15px;
		}
		
		.col-1 {width: 8.33%;}
		.col-2 {width: 16.66%;}
		.col-3 {width: 25%;}
		.col-4 {width: 33.33%;}
		.col-5 {width: 41.66%;}
		.col-6 {width: 50%;}
		.col-7 {width: 58.33%;}
		.col-8 {width: 66.66%;}
		.col-9 {width: 75%;}
		.col-10 {width: 83.33%;}
		.col-11 {width: 91.66%;}
		.col-12 {width: 100%;}
		
	legend {
				color: #002080;
				font-size: 18px;
				font-weight:bold;
			}
			.field input,textarea,select {
		
				margin-left: 150px;
			}

/* Style all input fields */
input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
}
#footer{
    background-color: #80C4DE;
    
}

#footer h1{
    margin-left: 100px;
    font-family: sans-serif;
    margin-top: 1px;
    height: 50px;
}

#footer strong{
    margin-left: 20px;
    font-size: 20px;
    line-height: 60px;
    font-family: sans-serif;
}


/* Style the submit button */
input[type=submit] {
    background-color: #80C4DE;
    color: white;
    width: 50%;
    text-align: center;
    margin-left: 20%;
}

		.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}
/* The message box is shown when the user clicks on the password field */
#message {
    display:none;
    background: #f1f1f1;
    color: #000;
    position: relative;
    padding: 20px;
    margin-top: 10px;
}

#message p {
    padding: 10px 35px;
    font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
    color: green;
}

.valid:before {
    position: relative;
    left: -35px;
    content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
    color: red;
}

.invalid:before {
    position: relative;
    left: -35px;
    content: "✖";
}

/* Style the body for inputs */
.body {
    background-color: #f1f1f1;
    padding: 20px;
}

        #footerDiv {
			
			font-family: "Times New Roman", Times, serif;
			font-size: 18px;
			text-shadow: 0.5px 1px white;
        text-align: center;
			
			}
footer {
    list-style-type: none;
    margin: 0;
    padding: 0px;
    overflow: hidden;
    background-color:black;
	
	
}
</style>
</head>

<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">




    
    

<body>

     
       <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
               <a href="" class="navbar-brand" style="font-size:30px">Gramodaya</a>
               <button class="navbar-toggler" data-toggle="collapse" data-target="#new"><span class="navbar-toggler-icon"></span></button>
               
               <div class="collapse navbar-collapse justify-content-center" id="new">
               <ul class="navbar-nav">
               
               <li class="nav-item"><a href="upcomingevent.php" class="nav-link" style="margin-right:20px">Events</a></li>
               <li class="nav-item"><a href="adminhedesk.php" class="nav-link" style="margin-right:20px">Help Desk</a></li>
               <li class="nav-item active"><a href="admin_manage_member.php" class="nav-link" style="margin-right:20px">Remove members</a></li>
               <li class="nav-item"><a href="admindonation.php" class="nav-link" style="margin-right:20px">Donations</a></li>
                 <li class="nav-item"><a href="admin_comment.php" class="nav-link" style="margin-right:20px">Comments</a></li>
                 <li class="nav-item"><a href="viewjob.php" class="nav-link" style="margin-right:20px">job</a></li>
                 <li class="nav-item"><a href="mission.php" class="nav-link" style="margin-right:20px">Achivements</a></li>
               <li class="nav-item"><a href="logout.php" class="nav-link" onclick="return confirm('are you sure?')">log out</a></li>
               </ul>
               </div>
            </nav>



 
 <div class="quotes"> 
 <h1>Remove members.</h1> 
 </div> 
 
  
  

  <div class="row">
  <div class = "xy col-12">
		<div class= "x col-3"></div>

<div class="body col-6">
  <form action="admin_manage_member.php" method="post">

 
 
    <label for="user_name">User name</label>
	
    <input type="text" id="register_id" name="register_id" required>

     <input class="form-control btn btn-primary" type="submit" name="submit" value="Manage Details" style="width: 50%;">
    
    
  </form>
    
        <h4>User names :</h4>
    <?php  
    
        $newsql = "SELECT * FROM register_form";

        $newresult = mysqli_query($con,$newsql);

        while($row = mysqli_fetch_array($newresult)){
            $username = $row['user_name'];

            echo $username ."<br>";
        }
    ?>

    </div>
    </div>
    
    </div>
    <br>
  <?php
    
    
  if(isset($_POST["submit"])){
	$register_id=$_POST['register_id'];
      
    
$sql="SELECT * FROM register_form where user_name='$register_id' LIMIT 1";
$sqldata=mysqli_query($con,$sql)or die('error getting');

      
      
echo "<form action='action1.php' method='POST' style=' width: 60%;margin-left: 20%;border-style: solid;margin-bottom: 20px;'>";

while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
    echo "<br>";
	echo "Last login";
	echo "<input type='text' name='rid' value=".$row['last_login']." disabled >";
	
	echo "user_name";
	echo "<input type='text' name='uname' value=".$row['user_name']." disabled>";
	
	echo "Contact";
	echo "<input type='text' name='contact1' value='".$row['contact_1'].'-'.$row['contact_2']."' disabled>";
	
	echo "Email";
	echo "<input type='text' name='email' value=".$row['email']." disabled>";
	
	echo "Password";
	echo "<input type='password' name='pwd' value=".$row['password']." disabled>";
	
	echo "con_password";
	echo "<input type='password' name='cpass' value=".$row['con_pass']." disabled>";
    
    echo "DOB";
	echo "<input type='date' name='dob' value=".$row['dob']." disabled>";
    
     echo "Gender";
	echo "<input type='text' name='gender' value=".$row['gender']." disabled>";
    
	
   
   
    
	
    echo "<input type='button' onclick='window.location=\"action1.php?name={$row['user_name']}\"' class='btn btn-primary' name='submit2' value='Delete' style='width: 30%;margin-left: 35%;'>";
}
echo "</form>";
  }
     
  
?>

    
    

	

	  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script>
	$.validate({
	
	});
	</script>
  
  
</body>
</html>