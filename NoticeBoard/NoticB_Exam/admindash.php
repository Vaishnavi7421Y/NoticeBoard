<?php 
session_start();
include "db_conn.php";
if (isset($_SESSION['ID']) && isset($_SESSION['email'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard |Devise & Sight Notice Board</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="style.css">
	<style type="text/css">
		
		a.log
		{
			background-color: #330066;
			padding: 7px 40px;
			color: #fff;
			font-size: 20px;
       font-family: Galada;
			margin: 29px;
			border: none;
			text-decoration: none;
			}

			a.log:hover
		{
			opacity: 0.8;
      padding: 9px 45px;
transition: 0.7s ease-out;
background-color: black;
      box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
		}
		body
		{
			align-content: center;
		}
		a.btna
		{

			background-color:whitesmoke;
			padding: 8px 8px;
			color: black;
			font-size:16px;
			font-weight: bold;
			font-style:Times New Roman", Times, serif;
			border: none;
			width:150px;
			height: 70px;
			margin-left: 50px;
			text-align: center;
			text-decoration: none;

		}
			a.btna:hover
		{
			opacity: 0.9;
			color: #330066;
      transition: 0.7s ease-out;
      font-size: 20px;
			
		}
		img
		{
			height: 30px;
			width: 100px;
		}
    img.dashbtn
    {
      height: 200px;
      width: 200px;
      
    }
img.dashbtn:hover
{
      height: 250px;
      width: 260px;
      transition: 0.7s ease-out;
}

    
		h3,h1
		{
font-family: Galada;
			margin-left: 20px;
		}
				@media only screen and (max-width: 600px) {
  p {
    margin-right: -34px;
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
    <form class="form" action="alogin_script.php" method="POST" style="margin-top:0.5%">
    	<h1> Admin Dashboard</h1>
      
		<p><img src="./images/admin.png" style="float: right;margin-top: -30px;margin-right: 50px; height: 50px;width: 55px;"></p>
		<h3> Welcome :<?php echo $_SESSION['name']."<br> Staff Id-".$_SESSION['ES_id'];?></h3>
		<hr class="black"><br>
		
      <div class="content" style="margin-left:50px;margin-right: -50px;>
      	<div class="container-fluid">
      		<div class="row">
      			<div class="col-md-1"></div>
      			<div class="col-md-3">
      				<div class="panel panel-default">
      					<div class="panel-heading"><a href="ad_revamp.php" class="btna">Revamp Account</a></div>
                  <a href="ad_revamp.php"> <div class="panel-body">
                    <center><img src="./images/updateprof.jpg" class="dashbtn"></a><hr>Edit or Update Admin account.</center></div>

                </div>
            </div>
            
      			<div class="col-md-3">
      				<div class="panel panel-default">
      					<div class="panel-heading"><a href="manipulate_notices.php" class="btna">Modify Notices</a></div>
                   <a href="manipulate_notices.php"><div class="panel-body">
                    <center><img src="./images/mn1.jpg" class="dashbtn"></a><hr>Add, Delete, Update Notices.</center></div>

                </div>
            </div>

            <div class="col-md-3">
      				<div class="panel panel-default">
      					<div class="panel-heading"><a href="viewall_notices.php" class="btna">View Notices</a></div>
                 <div class="panel-body">
                    <center><a href="viewall_notices.php">  <img src="./images/vn.png" class="dashbtn "></a>
                <hr>Displays notices posted.</center></div>
                </div>
            </div>
            <div class="col-md-1"></div>
      		</div>
<!-----row2--->
<div class="row">
      			<div class="col-md-1"></div>
      			<div class="col-md-3">
      				<div class="panel panel-default">
      					<div class=" panel-heading"><a href="manipulate_student.php" class="btna">Modify Student</a></div>
                 <a href="manipulate_student.php">  <div class="panel-body">
                   <center><img src="./images/manage.jpg" class="dashbtn"></a><hr>Edit student records.</center>
                 </div>
                </div>
            </div>

            
            
      			<div class="col-md-3">
      				<div class="panel panel-default">
      					<div class=" panel-heading"><a href="Organize_artvilla.php" class="btna"> Organize Art-Villa</a></div>
                  <a href="Organize_artvilla.php"> <div class=" panel-body">
                    
                    <center><img src="./images/sc.jpg" class="dashbtn"></a><hr>Maintain Art-Villa or Student Corner.</center></div>

                </div>
            </div>

            <div class="col-md-3">
      				<div class="panel panel-default">
      					<div class="panel-heading"><a href="View_artvilla.php" class="btna">View Art-Villa</a></div>
                 <a href="View_artvilla.php">   <div class="panel-body">
                    
                    <center><img src="./images/circle-cropped.png" class="dashbtn"></a><hr>Displays all posts by students.</center></div>

                </div>
            </div>
            <div class="col-md-1"></div>
      		</div>
      	</div>
        
        <hr class="black">
        <center><a href="logout.php" class="log" >Logout</a></center>
        <br>
      </div>

            </form>
	</body>
</html>
<?php
}else
	{
		header("Location:alogin.php");
		exit();
	}
	include 'footer.php';
?>