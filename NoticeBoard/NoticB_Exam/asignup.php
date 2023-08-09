<?php
    
    require './includes/common.php';
    if(isset($_SESSION['aemail'])){
        header('location:admindash.php');
    }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Sign Up |Devise & Sight Notices </title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="bootstrap/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
       <link rel="stylesheet" href="style.css">
    <style>
                .btn{
  background-color:#396; 
  border: none;
  color: black;
  padding: 10px 27px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 22px;
  margin: 4px 2px;
  cursor: pointer;
  font-weight: bolder;
  -webkit-transition-duration: 0.4s;
  transition-duration: 0.4s;
        }
        .btn:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
  color: black;
  background-color: green;
}
.panel
{
      box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.fa{
    font-size: 20px;
    color: #7a797e;
    float: right;
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
        <div class="content">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                 
              </div>
              <div class="col-md-6">
                  <div class="panel panel-default"> 

                      <div class="panel-heading" style="font-family: Times New Roman;text-align: center;font-size:24px;font-weight: bolder;">
                         <center><img src="./images/admin1.png"class="img-responsive signup-image" height="50px" width="60px" ></center>
                      Authority Sign-Up
                    </div>
                          <div class="panel-body">                          
                  <form  action="asignup_script.php" method="POST">
                                <input class="form-control" placeholder="Name" name="aname"   pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" required>
                            <br>
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="aemail" required>
                                <br>
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" id="password" title=" Must contain atleast 6 or more characters" required><br>
            <input  type="text" class="form-control"  placeholder="Employee/ Staff ID" name="esid" required>              </div>
                      <div class="panel-footer">
                            <div class="btn-signup">
                              <button type="submit" name="submit" class="btn btn-block">Submit</button>
                            </div>
                          </div>
                        </div>
                        </form>
              </div>
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