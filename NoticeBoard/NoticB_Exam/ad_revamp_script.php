<html>
<head>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        
</head>
<body>

    <?php
    session_start();
    include "db_conn.php";
    if(isset($_SESSION['aemail'])){
        header('location:admindash.php');
    }?>

<?php
$status = "";
if(isset($_POST['submit']))
{

$update="UPDATE admin set name='$_POST[aname]',email='$_POST[aemail]',ES_id='$_POST[esid]' where ID='$_SESSION[ID]'";
$qryrun=mysqli_query($conn, $update) or die(mysqli_error());
?>
<div class="container" style="font-size: 26px;font-weight: bolder; font-family: galada;color: green;">
<div class="jumbotron" style="margin-top: 50px;">
<?php
$status = "Record Updated Successfully. </br></br>";
echo $status; ?>
<a class="btn btn-primary btn-lg" href="admindash.php" role="button"> Okay</a>
<?php 
}
else
{
	echo "unable to update data";
}
?>
</div>
</div>
</body>
</html>