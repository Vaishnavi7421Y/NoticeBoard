<?php  
session_start();
include "db_conn.php";
if(isset($_POST['alemail']) && isset($_POST['alemail']))
    
{
    function validate($data)
    {
        $data = trim($data);
        $data=stripslashes($data);;
        $data = htmlspecialchars($data);
        return $data;
    }
 $uname = validate($_POST['alemail']);
 $password = validate($_POST['password']);
     
    $sql="SELECT * from admin where email ='$uname' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) ===1)
    {
        $row = mysqli_fetch_assoc($result);
            if($row['email'] === $uname && $row['password'] === $password)
            {
                $_SESSION['name']= $row['name'];
                $_SESSION['email']=$row['email'];
                $_SESSION['ES_id']=$row['ES_id'];
                $_SESSION['ID']=$row['ID'];
                header("Location:admindash.php");
                exit();
            }
    }
    else
    {
        header("Location:alogin.php?error=Incorrect Email Id or Password.");
        exit();
    }

}


else
{
    header("Location: alogin.php?error");
    exit();
}
?>