<?php 
    session_start();
    include "db_conn.php";
    if(isset($_SESSION['aemail'])){
        header('location:admindash.php');
    }?>
<html>
<head>
	</head>
	<body>
		<h2>Authority's Updated Records.</h2>
		<?php
		echo "Name :".$_SESSION['name']."<br>";
		echo "Email_ID :".$_SESSION['email']."<br>";
		echo "Employee/Staff_ID :".$_SESSION['ES_id']."<br>";
		?>
	</body>
</html>