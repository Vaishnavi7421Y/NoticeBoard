<nav class="navbar navbar-inverse navbar-fixed top">
<div class="container">
    <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#myNav">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="index.php" class="navbar-brand"> Devise & Sight Notices</a>
    </div>
    <div class="collapse navbar-collapse" id="myNav">
        <ul class="nav navbar-nav navbar-right">
            <?php if(isset($_SESSION['email'])) { ?>                
                
                <li><a href="logout.php" class="text-center"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>                
            <?php } else { ?>
                <li><a href="about.php" class="text-center"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                <li><a href="contact.php" class="text-center"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
                   <li class="dropdown ">
                  <a class="dropdown-toggle text-center" data-toggle="dropdown" href="#" style="font-weight: bolder;"> 
                    <span class="glyphicon glyphicon-user"> <b>Sign-Up</b></span>
        <span class="caret "></span></a>
        <ul class="dropdown-menu">
            <li><a href="asignup.php" class="text-center">Authority </a></li>
          <li><a href="ssignup.php" class="text-center">Student</a></li>
          
        </ul>
                <!-- <li><a href="" class="text-center" type="button" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
                <li class="dropdown ">
                  <a class="dropdown-toggle text-center" data-toggle="dropdown" href="#" style="font-weight: bolder;"> <span class="glyphicon glyphicon-log-in"> <b>Login</b></span>
        <span class="caret "></span></a>
        <ul class="dropdown-menu">
          <li><a href="alogin.php" class="text-center">Authority </a></li>
          <li><a href="slogin.php" class="text-center">Student</a></li>
          
        </ul>
            <?php } ?>
        </ul>
    </div>
</div>
</nav>

