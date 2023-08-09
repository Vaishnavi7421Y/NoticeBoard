<?php
    $con = mysqli_connect("localhost","root","","noticeb") or die(mysqli_error($con));
    if(!isset($_SESSION['alemail'])){
        session_start();
    }
?>