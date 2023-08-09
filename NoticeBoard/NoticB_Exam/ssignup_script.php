<?php 
$con = mysqli_connect("localhost","root","","noticeb") or die(mysqli_error($con));
    if(!isset($_SESSION['semail'])){
        session_start();
    }

   $sname = $_POST['sname'];
    $sname = mysqli_real_escape_string($con , $sname);

    $semail = $_POST['semail'];
    $semail = mysqli_real_escape_string($con , $semail);

    $password = $_POST['password'];
    $password = mysqli_real_escape_string($con , $password);


    $rno = $_POST['rno'];
    $rno = mysqli_real_escape_string($con , $rno);

    $std = $_POST['std'];
    $std = mysqli_real_escape_string($con , $std);



    //check whether email already exists
    $select_query = "SELECT * FROM student WHERE email = '$semail'";
    $select_query_result = mysqli_query($con , $select_query) or die(mysqli_error($con));
    $select_rows = mysqli_num_rows($select_query_result);
    if($select_rows!=0){
        $error = "<span class='red'>Email Already Exists</span>";  
    }
    //if not then add to DB
    else{
        $insert_query = "INSERT INTO student (name , email , password , Roll_No , Standard)VALUES('$sname','$semail','$password','$rno','$std')";
        $inser_query_result = mysqli_query($con , $insert_query) or die(mysqli_error($con));
        $name	 = mysqli_insert_id($con);
        $_SESSION['sname'] = $sname;
        $_SESSION['semail'] = $semail;
        
        


        header('location:admindash.php');
        exit();
    }
?>