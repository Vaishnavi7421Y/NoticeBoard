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
       <link rel="stylesheet" href="style.css">
    
    <style>
        
        form
        {
            margin-top: 2cm;
            
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
<body>
     <!-- Header -->
     <?php
            include 'header.php';
        ?>
    <!-- Header End -->
    <!-- Main -->
      <center>  <img src="./images/stud8.png" height="60px" width="230px">&nbsp;</center>
    <form class="form" action="slogin_script.php" method="POST" style="margin-top:0.5%">                
        <div class="content">
        <div class="container">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                  <center>
                      <div class="panel-heading" style="font-size:0.5cm;font-weight: bolder;"><div class="imgcenter"><img src="./images/login.png" height="55px" width="250px" >
                      </div>
                      <div class="centered">Student</div>
                      <hr>
                  </div>
              
                            <div class="panel-body ">
                <input type="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Enter Email" required><br>
                    <input type="password" name="password" class="form-control" pattern=".{6,}" placeholder="Enter Password" required>
                     <?php
                        if(isset($_GET['m1'])){
                            echo $_GET['m1'];
                        }
                    ?>
                      <?php
                              if(isset($_GET['error'])){?>
                                <p class="error" style="color: red;background: #F2DEDE;"> <?php echo $_GET['error'];?></p>
                                <?php 
                              } ?>
                            
                    <br>
                        <p>Don't have an Account? <a href="ssignup.php">Register</a></p>
                            </div>
           <div class="panel-footer">
            <button type="submit" class="btn btn-danger btn-block" data-dismiss="modal">Login</button>
                
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