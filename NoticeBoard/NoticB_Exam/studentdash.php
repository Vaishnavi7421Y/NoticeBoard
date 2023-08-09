<?php 
session_start();

if (isset($_SESSION['ID']) && isset($_SESSION['email'])) {

 ?>
<html>
	<head>
	<title>Student Dashboard |Devise & Sight Notice Board</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        
		<link rel="stylesheet" href="style.css">
	<style type="text/css">
	a.log
		{
			background-color: #555;
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
transition: 0.7s ease-out;
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
}


	</style>
	</head>
	<body>
		 <?php
            include 'header.php';
        ?>
		<h1>Student Dashboard</h1>
		
		<h3>Welcome <?php echo $_SESSION['name'];
		?> </h3>
		<h3 style="float: right; margin-top: -80px;margin-right: 150px;">  <?php echo "Roll No : ". $_SESSION['Roll_No'];
		echo "<br>";
		echo "Standard : ". $_SESSION['Standard'];
		?>    </h3>
          
<hr class="black"><br>
           <div class="content" style="margin-left:50px;margin-right: -50px; ">
      	<div class="container-fluid">
      		<div class="row">
      			<div class="col-md-1"></div>
      			<div class="col-md-3">
      				<div class="panel panel-default">
      					<div class="panel-heading"><a href="revamp.php" class="btna">Revamp Account</a></div>
                   <div class="panel-body">
                    <center><a href="revamp.php"><img src="./images/updateprof.jpg" class="dashbtn"></a><hr>Modernize or Update the student account.</center></div>

                </div>
            </div>
            
      			<div class="col-md-3">
      				<div class="panel panel-default">
      					<div class="panel-heading"><a href="Postin_AV.php" class="btna">Post in Art-Villa</a></div>
                   <div class="panel-body">
                    <center><a href="Postin_AV.php"><img src="./images/mn1.jpg" class="dashbtn"></a><hr>Publish your artistic creativity Art-Villa.</center></div>

                </div>
            </div>

            <div class="col-md-3">
      				<div class="panel panel-default">
      					<div class="panel-heading"><a href="#" class="btna">View Notices</a></div>
                   <div class="panel-body">
                    <center><a href="#"><img src="./images/vn.png" class="dashbtn "></a>
                <hr>Displays all the notices posted by Admin for student.</center></div>
                </div>
            </div>
            <div class="col-md-1"></div>
      		</div>
      	</div>
      </div>
            </form>
          <hr class="black"><br>
	<center><a href="logout.php" class="log">Logout</a></center>
	<br>
	</body>
</html>
<?php
}else
	{
		header("slogin.php");
		exit();
	}
include 'footer.php';
?>      
