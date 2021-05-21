<?php
session_start();
?>
<?php
  if(!isset($_SESSION['username'])){
       echo"<script>window.open('login.php','_self')</script>"; 
  }
?>
<html>
<head>
<script
            src="https://www.paypal.com/sdk/js?client-id=sb">
          </script>
<title>Don3</title>
    <link rel="stylesheet" type="text/css" href="donate.css" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="donate.css">
     <link rel="stylesheet" type="text/css" href="Resourses/boostrap/bootstrap.min.css">
    <link  href="Resourses/boostrap/bootstrap.css">
     <script type="text/javascript" src="Resourses/boostrap/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
    <script src="Resourses/js/jquery-3.3.1.slim.min.js"></script>
    <script src="Resourses/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
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
  border-radius: 25px;
  background-color: gray;
   width: 67%;
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

 
    <body id="three">

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
     <?php    
      $dollar =  $_SESSION['amount']; ?>
    
    <div class="container">
    <div class="col-sm-6">
                        <div id="paypal-button-container">
                          <h3>Online Donation</h3>
                        <script>
                            paypal.Buttons({
                              createOrder: function(data, actions) {
                                return actions.order.create({
                                  purchase_units: [{
                                    amount: {
                            
                                      value: "<?php echo (round($dollar,2)); ?>"
                                
                                    }
                                  }]
                                });
                              },
                              onApprove: function(data, actions) {
                                return actions.order.capture().then(function(details) {
                                  alert('Transaction completed by ' + details.payer.name.given_name);
                                  // Call your server to save the transaction
                                  return fetch('/paypal-transaction-complete', {
                                    method: 'post',
                                    headers: {
                                      'content-type': 'application/json'
                                    },
                                    body: JSON.stringify({
                                      orderID: data.orderID
                                    })
                                  });
                                });
                              }
                            }).render('#paypal-button-container');
                          </script>
                           
                        </div> 


                    </div>
    </div>

       
    <script type="text/javascript" src="Resourses/js/jquery-3.3.1.min.js"></script>
    </body>

</html>

<script>


</script>