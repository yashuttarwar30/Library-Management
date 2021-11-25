

<?php
$err4=false;

if(isset($_POST['submit'])){
  include 'connection.php';
    
    $username=$_POST["username"];
    $password=$_POST["password"];
    
    $existSql1="SELECT * FROM `librarian` WHERE lib_username='$username' AND lib_password = '$password'";
    $result12=mysqli_query($conn,$existSql1);
    $num = mysqli_num_rows($result12);
    if($num == 1){
        $login=true;
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['username']=$username;
        header("location: adminsection.php");
    }
    else{
        $err4=true;
    }

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="Admin_login.css">
</head>
<body>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="https://d3n8a8pro7vhmx.cloudfront.net/themes/5f3bc4644764e86d9ee8849f/attachments/original/1589382138/login.png?1589382138" id="icon" alt="User Icon" />
    </div>
    <?php
                    if($err4){
                        echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Warning!</strong> Invalid Credentials.
                                    
                                </div>';                   
                            }
                            ?>

    <!-- Login Form -->
    <form action="/library/adminlogin.php" method="post">
      <input type="text" id="username" name="username" class="fadeIn second" name="login" placeholder="Username">
      <input type="text" id="password" name="password" data-type="password" class="fadeIn third" name="login" placeholder="Password">
      <input name="submit" type="submit" class="fadeIn fourth" value="Log In">
      
    </form>
    <form action="/library/front.php" method="post">
        <input name="submit" type="submit" class="fadeIn fourth" value="Home">
    </form>

    <!-- Remind Passowrd -->
    

  </div>
</div>
</body>
</html>