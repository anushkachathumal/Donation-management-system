<?php
  session_start();
   
?>
<?php
      if(!isset($_SESSION['username'])){
               echo"<script>window.open('login.php','_self')</script>"; 
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="home2.css">
    <link rel="stylesheet" type="text/css" href="Resourses/boostrap/bootstrap.min.css">
    <link  href="Resourses/boostrap/bootstrap.css">
     <script src="Resourses/js/jquery-3.3.1.min.js"></script>
    <script src="Resourses/js/jquery-3.3.1.slim.min.js"></script>
    <script src="Resourses/js/bootstrap.js"></script>
    
    </head>

    <style>
    
    #one {
  width: 100%;
  height: auto;
  
}
    </style>
<body>
    
   
    
       <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
               <a href="" class="navbar-brand" style="font-size:30px">Gramodaya</a>
               <button class="navbar-toggler" data-toggle="collapse" data-target="#new"><span class="navbar-toggler-icon"></span></button>
               
               <div class="collapse navbar-collapse justify-content-center" id="new">
               <ul class="navbar-nav">
               
               <li class="nav-item active"><a href="home2.php" class="nav-link">Home</a></li>
               <li class="nav-item"><a href="helpdesk.php" class="nav-link">Help Desk</a></li>
               <li class="nav-item"><a href="donation.php" class="nav-link">Donations</a></li>
               <li class="nav-item"><a href="comment.php" class="nav-link">Comments</a></li>
               <li class="nav-item"><a href="profile.php" class="nav-link">Profile</a></li>
               <li class="nav-item"><a href="logout.php" class="nav-link" onclick="return confirm('are you sure?')">log out</a></li>
               </ul>
               </div>
            </nav>
    
    <div id="header" class="col-md-4 col-xs-6">
        <img src="img/new2.jpeg" class="img-responsive" id="one">
    </div>
    
    
    <div id="mid" class="form-group">
    <div class="col-md-10 col-xs-8">
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>GRAMODAYA</strong>&nbsp;&nbsp;is a service providing foundation whose stated purpose is to bring together business and other employees in order to provide humanitarian service and to advance goodwill and peace.Gramodaya members belive that they have a shared responsibilty to take action on in islandwide about most persistent issues.We provide services to others,promote,integrity,goodwill, and peace through our fellowship of businessmens,other employees and community leaders.We coonect passionate people with diverse perspective to exchange ideas,forge lifelong friendship,and above all take action to change the society.Together we apply our professional experience and personal commitment to tackle our communities most persistent problems,finding new effective ways toenhance health,stability,and prosperity across the society. </p>
    
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>GRAMODAYA</strong>&nbsp;&nbsp;members look for opportunities to improve our communities today and invest in the next generation for tomorrow.We collaborate with community leaders who want to get to work on projects that have a real,lasting impact on people's lives.Each day,our members pour their passion,intergrity,and intelligence into completing projects that have a lasting impact.We perserve until we deliver real,lasting solutions.For more than ten years we have bridged cultures and connected continenets to champion peace,fight illiteracy and poverty,promote clean water and sanitation,and fight disease.Our goal is to strength the capiacity of communities to support basic education and literacy,reduce gender disparity in education,and increas adult litercy.We carry out service projects that enhance economic and community development and create opportunities for decent and productive work for young and old.Club activities,social events,and volunteer projects offer networking opportunities that build persoanal and professional connecters.And gramodaya can extend those networks by extend the capacity of members.</p>
    
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Together</strong>&nbsp;&nbsp;,we see a socitey where people unite and take action to create lasting change-accross the socitey,in our communities,and in ourselves.We launch our projects base on members donations.Your financial help makes all this happen,and more.When you give donations to Gramodaya you fuel our service projects that promote  peace,and improve developing communities.And also let us know your opinion by giving comment to improve our activities.With your help,we can make lives better in your community and arround the society.Help us change lives in the socite and community.   </p>
        </div>
        </div>
       
  
    
    <hr style="border-top: 2px solid #000;">
  
        <div class="row">
    
            <div class="col-12" style="text-align:center;background-color:hsla(290,60%,70%,0.3);">
            
                
                 <header>
                <h2 class="tm-company-about-header" style="text-align:center">Contact us</h2>
              </header>
                <br>
                <p>
               <img src="https://img.icons8.com/windows/32/000000/phone-disconnected.png">Tel:037-4345654
              </p>
                
                <p class="mb-4">
               <img src="https://img.icons8.com/windows/32/000000/phone-disconnected.png">Tel:037-2345321
              </p>
                <p class="mb-4">
               <img src="https://img.icons8.com/ios/50/000000/order-delivered.png">Address:Gromodaya foundation,no1/14,Rabukpotha,Badulla.
              </p>
                <p class="mb-4">
               <img src="https://img.icons8.com/windows/32/000000/email-sign.png">Email:Gramodaya@gmail.com.
              </p>
                <p class="mb-4">
               <img src="https://img.icons8.com/windows/32/000000/phone-office.png">Fax:037-4563243
              </p>
              
            </div>
        </div>
  
    </body>




</html>