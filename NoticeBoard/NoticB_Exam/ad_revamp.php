<?php
    session_start();
    include "db_conn.php";
    if(isset($_SESSION['aemail'])){
        header('location:admindash.php');
    }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Revamp Account |Devise & Sight Notices </title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="bootstrap/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
       <link rel="stylesheet" href="style.css">
    <style>
                .btn{
  background-color:slategray; 
  border: none;
  color: black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  font-family: georgia;
  margin: 4px 2px;
  cursor: pointer;
  font-weight: bolder;
  -webkit-transition-duration: 0.4s;
  transition-duration: 0.4s;
  height: -30px;
  width: 160px;
        }
        .btn:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
  color: white;
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
h2
{
  font-family: galada;
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
                    <h2>Revamp Account</h2>
                    </div>
                          <div class="panel-body">                          
                  <form  action="ad_revamp_script.php" method="POST">
                                <input class="form-control" placeholder="Name" name="aname"   pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" value="<?php echo $_SESSION['name'];?>"required>
                            <br>
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="aemail" value="<?php echo $_SESSION['email'];?>" required>
                                <br>
                                 <input  type="text" class="form-control"  name="esid" value="<?php echo $_SESSION['ES_id'];?>"  required> 
                               
                          </div>
                      <div class="panel-footer">
                            <div class="btn-signup">
                             <center><button type="submit" name="submit" class="btn " data-toggle="tooltip"  title="Update your account details.">Revamp</button>
                              <button type="Reset" name="Reset" class="btn" data-toggle="tooltip"  title="Reset all fields.">Reset</button>
                               <a href="admindash.php"><button type="button" name="close" class="btn" data-toggle="tooltip"  title="Goto Dashboard.">Close</button></a></center>
                            </div>
                          </div>
                        </div>
                        </form>
              </div>
            </div>
            </div>
        </div>
    <!-- Main End -->
    <hr class="black">
    <!-- Footer -->
    <?php
        include 'footer.php';
    ?>
    <!-- Footer End -->
</body>
</html>