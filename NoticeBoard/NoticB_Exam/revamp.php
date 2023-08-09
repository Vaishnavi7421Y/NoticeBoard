<html>
<head>
	<title></title>
</head>
<body>
	
	<?php
    
    require './includes/common.php';
    if(isset($_SESSION['semail'])){
        header('location:studentdash.php');
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
  background-color:slategray; 
  border: none;
  color: black;
  padding: 10px 27px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  font-family: georgia;
  cursor: pointer;
  font-weight: bolder;
  -webkit-transition-duration: 0.4s;
  transition-duration: 0.4s;
  height: -10px;
  width: 180px;
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
  text-align: center;
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
                         <center><img src="./images/stud3.png"class="img-responsive signup-image" height="50px" width="60px" ></center>
                      <h2>Revamp Account.</h2>
                    </div>
                          <div class="panel-body">                          
                  <form  action="student_add.php" method="POST">
                                <input class="form-control" placeholder="Enter Name" name="sname"   pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" value="<?php echo $_SESSION['name'];?>" required>
                            <br>
                                <input type="email" class="form-control"  placeholder="Enter Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  name="semail" value="<?php echo $_SESSION['email'];?>" required>
                                <br>
                                <input  type="text" class="form-control"  placeholder="Enter Roll No." name="rno" value="<?php echo $_SESSION['Roll_No'];?>"  required> 
                                <br>
                                <input  type="text" class="form-control"  placeholder="Enter Standard in which your are" name="std" value="<?php echo $_SESSION['Standard'];?>" required>
                                
                          </div>
                      <div class="panel-footer">
                            <div class="btn-signup">
                             <center> <button type="submit" name="submit" class="btn btn-block">Update</button>
                               <button type="Reset" name="Reset" class="btn btn-block">Reset</button>
                               <a href="studentdash.php"><button type="button" name="close" class="btn btn-block">Close</button></a></center>
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