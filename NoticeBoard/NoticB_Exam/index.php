<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
       <link rel="stylesheet" href="style.css">
    
       <style>
           img{
               width:4.5cm;
               height: 4cm;
           }
       </style>
    </head>
    
    <body>
        <?php
        include 'header.php';
        ?>
        
                <div class="content">
            <div class="container-fluid ">
               <div class="row ">
                   <div class="col-md-1 text-center" ></div>
                <div class="col-md-4 text-center">
                       <div class="panel panel-default panel-responsive">
                <div class="panel-heading">
                    <h2>Authority Section</h2>
                </div>
                <div class="panel-body">
                    <center><img src="./images/admin.png"></center>
                </div>
                           <div class="panel-footer">
                    <a href="asignup.php">
                        <button class="btn btn-primary btn-block">Sign-Up</button>
                    </a> <br>
                    
                        <a href="alogin.php">
                        <button class="btn btn-primary btn-block">Login</button>
                    </a> 
                </div>
                
            </div>
                     
                </div>
                   <div class="col-md-1 text-center "></div>
                   <!--login student-->
                   <div class="col-md-4 text-center">
                       <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Student Section</h2>
                </div>
                <div class="panel-body">
                    <img src="./images/stud3.png" style="align-content: center; height: 150px;"></div>
                    <div class="panel-footer">
                    <a href="ssignup.php" >
                        <button class="btn btn-primary btn-block">Sign-Up</button>
                    </a> <br>
                    <a href="slogin.php">
                        <button class="btn btn-primary btn-block">Login</button>
                    </a> 
                </div>
                
            </div></div>
                   <div class="col-md-1 text-center">
                
            </div>
          
        </div>
            </div>
                
        </div>
        <br>
        <br>
    <?php
    include 'footer.php';
    ?>
    </body>
    
</html>