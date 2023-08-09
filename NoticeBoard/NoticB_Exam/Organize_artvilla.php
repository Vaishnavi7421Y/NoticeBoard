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
                    <h2>Organize Art Villa</h2>
                    </div>
                          <div class="panel-body">                          
                  <form  action="#" method="POST">
                                <input class="form-control" placeholder="Name" name="sname" required>
                            <br>
                                <input type="text" class="form-control"  placeholder="Add Title"  name="ptitle" required>
                                <br>
                                <input type="file" class="form-control"  placeholder="Upload file"  name="pfile" required>
                                <br>              </div>
                      <div class="panel-footer">
                            <div class="btn-signup">
                             <center> <button type="submit" name="submit" class="btn " data-toggle="tooltip"  title="View the Art-Villa .">View</button>
                             	<button type="submit" name="submit" class="btn " data-toggle="tooltip"  title="Delete the Posts .">Delete</button>
                             	<button type="submit" name="submit" class="btn " data-toggle="tooltip"  title="Update the Art-Villa and related records .">Update</button>
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