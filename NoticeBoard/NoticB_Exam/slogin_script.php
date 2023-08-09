<?php  
session_start();
include "db_conn.php";
if(isset($_POST['email']) && isset($_POST['email']))
    
{
    function validate($data)
    {
        $data = trim($data);
        $data=stripslashes($data);;
        $data = htmlspecialchars($data);
        return $data;
    }
 $uname = validate($_POST['email']);
 $password = validate($_POST['password']);
     
    $sql="SELECT * from student where email ='$uname' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) ===1)
    {
        $row = mysqli_fetch_assoc($result);
            if($row['email'] === $uname && $row['password'] === $password)
            {
                $_SESSION['name']= $row['name'];
                $_SESSION['email']=$row['email'];
                $_SESSION['ID']=$row['ID'];
                $_SESSION['Standard']=$row['Standard'];
                $_SESSION['Roll_No']=$row['Roll_No'];
                
                header("Location:studentdash.php");
                exit();
            }
    }
    else
    {
        header("Location:slogin.php?error=Incorrect Email Id or Password.");
        exit();
    }

}


else
{
    header("Location: slogin.php?error");
    exit();
}
?>