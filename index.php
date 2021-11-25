<?php
$err=false;
$err1=false;
$err2=false;
if(isset($_POST['submit'])){
  include 'connection.php';
    
    $username1=$_POST["username1"];
    $password1=$_POST["password1"];
    $cpassword1=$_POST["cpassword1"];
    $mail=$_POST["mail"];
    $existSql="SELECT * FROM `user` WHERE username='$username1'";
    $result1=mysqli_query($conn,$existSql);
    $numexistRows=mysqli_num_rows($result1);
    if($numexistRows>0){
        $err2=true;
        
    }
    else{
        if($password1==$cpassword1){
            $sql="INSERT INTO `user` (`username`, `password`, `mail`) VALUES ( '$username1', '$password1', '$mail')";
            $result=mysqli_query($conn,$sql);
            
            if($result){
               $err=true;   
            }
    
        }
        else{
            $err1=true;
        }
    }
    

}
?>
<?php
$err4=false;

if(isset($_POST['submit1'])){
  include 'connection.php';
    
    $username=$_POST["username"];
    $password=$_POST["password"];
    
    $existSql1="SELECT * FROM `user` WHERE username='$username' AND password = '$password'";
    $result12=mysqli_query($conn,$existSql1);
    $num = mysqli_num_rows($result12);
    if($num == 1){
        $login=true;
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['username']=$username;
        header("location: hello.php");
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
    <title>Login and Signup Page</title>
    <link rel="stylesheet" href="newlogin.css">
</head>
<body>
    <body background="111.jpg">

    
    <div class="row">
        <div class="col-md-6 mx-auto p-0">
            <div class="card">
                <div class="login-box">
                
               
    
   
                    <div class="login-snip"> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                        <div class="login-space">
                        <form action="/library/index.php" method="post">
                            <div class="login">
                                <div class="group"> <label for="username" class="label">Username</label> <input id="username" name="username" type="text" class="input" placeholder="Enter your username"> </div>
                                <div class="group"> <label for="password" class="label">Password</label> <input id="password" name="password" type="password" class="input" data-type="password" placeholder="Enter your password"> </div>
                                <div class="group"> <input type="submit" name="submit1" class="button" value="Submit"> </div>
                        </form> 
                        <form action="/library/front.php" method="post">
                            <div class="group"> <input type="submit"  class="button" value="Home"> </div>
                        </form>
                                
                                <?php
                if($err){
                    echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> Your account created.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';                   
                        }
                        else if($err1){
                            echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Warning!</strong> Passwords Do Not Match.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>';                          
                                }
                                else if($err2){
                                    echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>Warning!</strong> Username already exist.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>';                          
                                        }              
                    ?>
                    <?php
                    if($err4){
                        echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Warning!</strong> Invalid Credentials.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';                   
                            }
                            ?>
                                <div class="hr"></div>
                                <div class="foot"> <a href="/library/forget.php">Forgot Password?</a> </div>
                            </div>
                                    </form>
                            <form action="/library/index.php" method="post">
                          
    
                            <div class="sign-up-form">
                            
                            
                                <div class="group"> <label for="username1" class="label">Username</label> <input id="username1" name="username1" type="text" class="input"  placeholder="Enter your username" > </div>
                                <div class="group"> <label for="password1" class="label">Password</label> <input id="password1" name="password1" type="password" class="input" data-type="password" placeholder="Enter your password" > </div>
                                <div class="group"> <label for="cpassword1" class="label">Repeat Password</label> <input id="cpassword1" name="cpassword1" type="password" class="input" data-type="password" placeholder="Confirm your password" > </div>
                                <div class="group"> <label for="mail" class="label">Email Address</label> <input id="email" name="mail" type="email" class="input" placeholder="Enter your email address"> </div>
                                <div class="group"> <input type="submit" name="submit" class="button" value="Submit"> </div>
                               
                                
                            </form>
                            <form action="/library/front.php" method="post">
                                <div class="group"> <input type="submit"  class="button" value="Home"> </div>
                        

                            </form>
                            <div class="hr"></div>
<div class="foot"> <label for="tab-1">Already Member?</label> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>