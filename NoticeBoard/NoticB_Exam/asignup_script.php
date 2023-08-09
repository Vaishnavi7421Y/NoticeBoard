<?php 
$con = mysqli_connect("localhost","root","","noticeb") or die(mysqli_error($con));
    if(!isset($_SESSION['aemail'])){
        session_start();
    }

   $aname = $_POST['aname'];
    $aname = mysqli_real_escape_string($con , $aname);

    $aemail = $_POST['aemail'];
    $aemail = mysqli_real_escape_string($con , $aemail);

    $password = $_POST['password'];
    $password = mysqli_real_escape_string($con , $password);
    

    $esid = $_POST['esid'];
    $esid = mysqli_real_escape_string($con , $esid);


    //check whether email already exists
    $select_query = "SELECT * FROM admin WHERE email = '$aemail'";
    $select_query_result = mysqli_query($con , $select_query) or die(mysqli_error($con));
    $select_rows = mysqli_num_rows($select_query_result);
    if($select_rows!=0){
        $error = "<span class='red'>Email Already Exists</span>";  
    }
    //if not then add to DB
    else{
        $insert_query = "INSERT INTO admin (name , email , password , ES_id)VALUES('$aname','$aemail','$password','$esid')";
        $inser_query_result = mysqli_query($con , $insert_query) or die(mysqli_error($con));
        $name	 = mysqli_insert_id($con);      
        $_SESSION['aemail'] = $aemail;
        $_SESSION['password']= $password;
        header('location:admindash.php');
        exit();
    }
?>