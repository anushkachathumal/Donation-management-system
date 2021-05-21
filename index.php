<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>home</title>
     
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600"
    />
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate-style.css" />
      
        <script>
        function myfunction(){
            var dots = document.getElementById("dots");
            var moretext = document.getElementById("more");
            var link = document.getElementById("mybtn");
            
            if(dots.style.display==="none"){
                dots.style.display = "inline";
                link.innerHTML = "read more";
                moretext.style.display = "none";
            }
            else{
                dots.style.display = "none";
                link.innerHTML = "skip";
                moretext.style.display = "inline";
            }
        }
        
        function readmore(){
             var dots = document.getElementById("dots1");
            var moretext = document.getElementById("more1");
            var link = document.getElementById("mybtn1");
            
            if(dots.style.display==="none"){
                dots.style.display = "inline";
                link.innerHTML = "read more";
                moretext.style.display = "none";
            }
            else{
                dots.style.display = "none";
                link.innerHTML = "go up";
                moretext.style.display = "inline";
            }
        }
    </script>
    <!--
Tooplate 2111 Pro Line
http://www.tooplate.com/view/2111-pro-line
-->
  </head>

  <body>
    <!-- page header -->
    <div class="container" id="home">
      <div class="col-12 text-center">
        <div class="tm-page-header">
          
          <h1 class="d-inline-block text-uppercase">Grmodhaya</h1>
        </div>
      </div>
    </div>
    <!-- navbar -->
    <div class="tm-nav-section">
      <div class="container">
        <div class="row">
          <div class="col-12">
              
              <nav class="navbar navbar-expand-md navbar-light">
              
               <button class="navbar-toggler" data-toggle="collapse" data-target="#new"><span class="navbar-toggler-icon"></span></button>
               
               <div class="collapse navbar-collapse justify-content-center" id="new">
               <ul class="navbar-nav mx-auto tm-navbar-nav">
               
               <li class="nav-item"><a href="login.php" class="nav-link">log in</a></li>
               <li class="nav-item"><a href="adminlogin.php" class="nav-link">admin login</a></li>
               <li class="nav-item"><a href="re2.php" class="nav-link">sign up</a></li>
               
               
               </ul>
               </div>
            </nav>
              
         
          </div>
        </div>
      </div>
    </div>

    <!-- Video Banner -->
    <section class="tm-banner-section" id="tmVideoSection">
      <div class="container tm-banner-text-container">
        <div class="row">
          <div class="col-12">
            <header>
              <h2 class="tm-banner-title">Join with Gramodhaya</h2>
              <p class="mx-auto tm-banner-subtitle">
                Humanity makes world better place...
              </p>
            </header>
          </div>
        </div>
      </div>

      <!-- Video -->
      <video id="hero-vid" autoplay="" loop="" muted>
        <source src="videos/city-night-blur-01.mp4" type="video/mp4" />
        Your browser does not support the video tag.
      </video>
    </section>
    <!-- Features -->
    <div class="container tm-features-section" id="features">
      <div class="row tm-features-row">
        <section class="col-md-6 col-sm-12 tm-feature-block">
          <header class="tm-feature-header">
            <img src="https://img.icons8.com/ios/50/000000/high-importance.png">
            <h3 class="tm-feature-h">about gramodhya</h3>
          </header>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gramodaya is a non-profitable,non-government foundation that is establish for raise up welfare activities in mainly badulla area.Gramodaya has succusfull journey through ten years.In taht ten years Gramodaya done lot of welfare activities and from that Gramodaya became leader foundation in uva province for welfare activities.The award recive by honourable  minister of ministry of disaster managment is prove the Gramodaya is a well active foundation in badulla area.</p>
            
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gramodaya have island wide members and from that advantage the commitee members are decided to the exapand their activitie through island.We have good labour force and we are looking for more lobour.Annualy foundation have annual general meeting to discuss theire up coming events.In some special situation like flood,drought they call special meeting for discuss what they can do. </p>
            
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If any one reqiures some help they can apeal theire request through the web site.That wiil make easier than they come and meet our commitee members.But any have to register in our foundation before requsting the help.Through register in Gramodaya you can give us your feedback and if you like for give donate you can make it.  </p>
            
            
        </section>
        <section class="col-md-6 col-sm-12 tm-feature-block">
          <header class="tm-feature-header">
            <img src="https://img.icons8.com/ios/50/000000/find-matching-job.png">
            <h3 class="tm-feature-h">vacancies</h3>
          </header>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Let's step up your carrier with huminity and we are garanty that's will a new expirience for your carrier.We are responsible for your job security.</p>
           <u> <h2>*Clerk.</h2></u>
           
               <p>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In the clerk vacancy you have to perform  administrative 
         tasks,including answering telephones, typing or word processing,
         making copies of documents, and maintaining records<span id="dots">....</span> <span id="more">Your salary will be increasing with your expirience.But we are not looking always looking expirience skills.If your are just begin your carrier we can help you. 
                   </span> <button onclick="myfunction()" id="mybtn">Read more</button> </p>
           <a href="vancancies.html"><< more info and apply >></a>
           
           <u> <h2>*Accountants.</h2></u>
           
           <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Applicant have to abilty for Prepares asset, liability, and capital account entries by compiling and analyzing account information. Documents financial transactions by entering account<span id="dots1">...</span> <span id="more1">information.Recommends financial actions by analyzing accounting options.Expirience is not essential for accontants and your salary is increasing with your expirience.If you don't have expirience before working as an accountant you have to involve six month course which recommended by the foundation.Your are totaly free of course fee.</span><button onclick="readmore()" id="mybtn1">skip</button></p>
           
           <a href="jobapplication.php"><< more info and apply >></a>
        </section>
      </div>
    </div>

    <!-- Activities -->
    <div class="container" id="activities">
      <div class="row">
        <div class="col-12">
          <div class="">
            <header class="tm-parallax-header">
             <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2279482422346!2d81.06762341472091!3d6.982405394955868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae46223e05cbe7d%3A0x3c56434f49024ed7!2sSarvodaya+Badulla+District+Center!5e0!3m2!1sen!2slk!4v1540231222325" width="1200" height="300" frameborder="1" style="border:4" allowfullscreen></iframe></p>
            </header>
          </div>
        </div>
      </div>
        <div class='row'>
        
           <?php
         $dbServername = "localhost";
         $dbUsername = "root";
         $dbPassword = "";
         $dbName = "foundation"; 
        
        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
   
        
        $sql="select * from up_coming_events ORDER BY event_id DESC LIMIT 4";
    
        $result=mysqli_query($conn,$sql);
    
        while($row=mysqli_fetch_array($result)){
            
            $date1 = $row['date1'];
            $des1 = $row['description1'];
            
             
        echo "<div class='col-lg-6'>";
          echo "<div class='tm-activity-block mr-lg-0 ml-lg-auto'>";
            echo "<div class='tm-activity-img-container'>";
              
            echo "</div>";
            echo "<div class='tm-activity-block-text'>";
              echo "<h3 class='tm-text-blue'>"; echo $date1;echo "</h3>";
              echo "<p>";
                echo $des1;
              echo "</p>";
            echo "</div>";
          echo "</div>";
        echo "</div>";
        
        }
             ?>
            
           
       
            
        


        
     
        
        
    </div>

    <section class="container tm-company-section" id="company">
      <div class="row">
        <div class="col-xl-9 col-lg-8 col-md-12 tm-company-left">
          <div class="tm-company-about">
           
            <div class="tm-company-about-text">
              <header>
                <h2 class="tm-company-about-header">Contact us</h2>
              </header>
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
               <img src="https://img.icons8.com/windows/32/000000/phone-office.png">Fax:037-4563243.
              </p>
              
            </div>
          </div>
        </div>
        <div
          class="col-xl-9 col-lg-4 col-md-12 tm-company-right  ml-lg-auto mr-lg-0"
        >
          <div class="tm-company-right-inner">
            <ul class="nav nav-tabs" id="tmCompanyTab" role="tablist">
              <li class="nav-item">
                <a
                  class="nav-link tm-nav-link-border-right active"
                  id="vision-tab"
                  data-toggle="tab"
                  href="#vision"
                  role="tab"
                  aria-controls="vision"
                  aria-selected="true"
                  >Vision</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link tm-no-border-right"
                  id="mission-tab"
                  data-toggle="tab"
                  href="#mission"
                  role="tab"
                  aria-controls="mission"
                  aria-selected="false"
                  >Achivements</a
                >
              </li>
            </ul>
            <div class="tab-content" id="tmTabContent">
              <div
                class="tab-pane fade show active"
                id="vision"
                role="tabpanel"
                aria-labelledby="vision-tab"
              >
                <p>
                <img src='https://img.icons8.com/carbon-copy/100/000000/hand-right.png' style='width:10%;'> To create a society where there is a prosperity and peace with better quality of living.
                </p>
                <p>
                <img src='https://img.icons8.com/carbon-copy/100/000000/hand-right.png' style='width:10%;'> It strives to build trust and relationship with the needy people whose prosperity and security are ever at take.
                  
                </p>
                <p>
                <img src='https://img.icons8.com/carbon-copy/100/000000/hand-right.png' style='width:10%;'> It is all about a total upliftment of the badulla area society with a view to vertical mobility of every individual and group of people.
                </p>
              </div>
              <div
                class="tab-pane fade"
                id="mission"
                role="tabpanel"
                aria-labelledby="mission-tab"
              >
                <p>
                 <?php  
                 
                 $newsql = "SELECT * FROM mission";

                 $newresult = mysqli_query($conn,$newsql);

                 while($row = mysqli_fetch_array($newresult)){
                
                    echo "<p>";
                    echo "<img src='https://img.icons8.com/carbon-copy/100/000000/hand-right.png' style='width:10%;'>  ".$row['mission'];
                    echo "</p>";
                
                }
                 
                 
                
                 
                 
                 
                 ?>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    
    <footer class="container tm-footer">
      <div class="row tm-footer-row">
       
        <div class="col-md-2 col-sm-12 scrolltop">
          <div class="scroll icon"><i class="fa fa-4x fa-angle-up"></i></div>
        </div>
      </div>
    </footer>

    <script src="js/jquery-1.9.1.min.js"></script>
    <!-- Single Page Nav plugin works with this version of jQuery -->
    <script src="js/jquery.singlePageNav.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      /**
       * detect IE
       * returns version of IE or false, if browser is not Internet Explorer
       */
      function detectIE() {
        var ua = window.navigator.userAgent;

        var msie = ua.indexOf("MSIE ");
        if (msie > 0) {
          // IE 10 or older => return version number
          return parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)), 10);
        }

        var trident = ua.indexOf("Trident/");
        if (trident > 0) {
          // IE 11 => return version number
          var rv = ua.indexOf("rv:");
          return parseInt(ua.substring(rv + 3, ua.indexOf(".", rv)), 10);
        }

        // var edge = ua.indexOf('Edge/');
        // if (edge > 0) {
        //     // Edge (IE 12+) => return version number
        //     return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
        // }

        // other browser
        return false;
      }

      function setVideoHeight() {
        const videoRatio = 1920 / 1080;
        const minVideoWidth = 400 * videoRatio;
        let secWidth = 0,
          secHeight = 0;

        secWidth = videoSec.width();
        secHeight = videoSec.height();

        secHeight = secWidth / 2.13;

        if (secHeight > 600) {
          secHeight = 600;
        } else if (secHeight < 400) {
          secHeight = 400;
        }

        if (secWidth > minVideoWidth) {
          $("video").width(secWidth);
        } else {
          $("video").width(minVideoWidth);
        }

        videoSec.height(secHeight);
      }

      // Parallax function
      // https://codepen.io/roborich/pen/wpAsm
      var background_image_parallax = function($object, multiplier) {
        multiplier = typeof multiplier !== "undefined" ? multiplier : 0.5;
        multiplier = 1 - multiplier;
        var $doc = $(document);
        $object.css({ "background-attatchment": "fixed" });
        $(window).scroll(function() {
          var from_top = $doc.scrollTop(),
            bg_css = "center " + multiplier * from_top + "px";
          $object.css({ "background-position": bg_css });
        });
      };

      $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
          $(".scrolltop:hidden")
            .stop(true, true)
            .fadeIn();
        } else {
          $(".scrolltop")
            .stop(true, true)
            .fadeOut();
        }

        // Make sticky header
        if ($(this).scrollTop() > 158) {
          $(".tm-nav-section").addClass("sticky");
        } else {
          $(".tm-nav-section").removeClass("sticky");
        }
      });

      let videoSec;

      $(function() {
        if (detectIE()) {
          alert(
            "Please use the latest version of Edge, Chrome, or Firefox for best browsing experience."
          );
        }

        const mainNav = $("#tmMainNav");
        mainNav.singlePageNav({
          filter: ":not(.external)",
          offset: $(".tm-nav-section").outerHeight(),
          updateHash: true,
          beforeStart: function() {
            mainNav.removeClass("show");
          }
        });

        videoSec = $("#tmVideoSection");

        // Adjust height of video when window is resized
        $(window).resize(function() {
          setVideoHeight();
        });

        setVideoHeight();

        $(window).on("load scroll resize", function() {
          var scrolled = $(this).scrollTop();
          var vidHeight = $("#hero-vid").height();
          var offset = vidHeight * 0.6;
          var scrollSpeed = 0.25;
          var windowWidth = window.innerWidth;

          if (windowWidth < 768) {
            scrollSpeed = 0.1;
            offset = vidHeight * 0.5;
          }

          $("#hero-vid").css(
            "transform",
            "translate3d(-50%, " + -(offset + scrolled * scrollSpeed) + "px, 0)"
          ); // parallax (25% scroll rate)
        });

        // Parallax image background
        background_image_parallax($(".tm-parallax"), 0.4);

        // Back to top
        $(".scroll").click(function() {
          $("html,body").animate(
            { scrollTop: $("#home").offset().top },
            "1000"
          );
          return false;
        });
      });
    </script>
  </body>
</html>
