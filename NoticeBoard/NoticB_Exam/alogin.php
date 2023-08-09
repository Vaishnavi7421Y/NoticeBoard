<?php
    $con = mysqli_connect("localhost","root","","noticeb") or die(mysqli_error($con));
    if(!isset($_SESSION['email'])){
        session_start();
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login | Devise & Sight Notices</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="style.css">
    
    <style>
        
        form
        {
            margin-top: 2cm;
            
        }
        .fa
        {
          float: right;
        }
.panel
{
      box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.centered {
  position: absolute;
  top: 18%;
  left: 50%;
  transform: translate(-50%, -50%);
}
    </style>
</head>


<!-------------------------------------------->
<body>
     <!-- Header -->
     <?php
            include 'header.php';
        ?>
    <!-- Header End -->
    <!-- Main -->
    <center>
<img src="./images/admin2.png" height="65px" width="250px">&nbsp;
                </center>
    <form class="form" action="alogin_script.php" method="POST" style="margin-top:0.5%">
        <div class="content">
        <div class="container">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                  <center>
                      <div class="panel-heading" style="font-size:0.5cm;font-weight: bolder;">
                        <div class="imgcenter"><img src="./images/login.png" height="55px" width="250px" >
                          <div class="centered">Authority</div>
                      </div>
                      
                      <hr>
                  </div>
                            <div class="panel-body ">
                <input type="email" name="alemail" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Enter Email" required>
                <br>

                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" id="password" title=" Must contain atleast 6 or more characters" required>
                           
   <div class="form-group">
                    <?php
                        if(isset($_GET['m1'])){
                            echo $_GET['m1'];
                        }
                    ?>
                </div>

                              <?php
                              if(isset($_GET['error'])){?>
                                <p class="error" style="color: red;background: #F2DEDE;"> <?php echo $_GET['error'];?></p>
                                <?php 
                              } ?>
                              
                     <p>Don't have an Account? <a href="asignup.php">Register</a></p>
                            </div>
           <div class="panel-footer">
            <button type="submit" class="btn btn-danger btn-block" name="submit">Login</button>
                
                <br>
                    <p><a href="#">Forgot Password?</a></p>
                
            </div>
            </div>
            </form>
            </div>
            </div>
            </div>
    <!-- Main End -->

    <!-- Footer -->
    <?php
        include 'footer.php';
    ?>
    <!-- Footer End -->
</body>
</html>