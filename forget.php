<?php
$err=false;
$err1=false;
$err2=false;
$err3=false;
$err4=true;
if(isset($_POST['submit1'])){
  include 'connection.php';
    
    $username1=$_POST["username"];
    $password1=$_POST["password1"];
 
    $mail=$_POST["mail"];
    $existSql="SELECT * FROM `user` WHERE username='$username1' ";
    $result1=mysqli_query($conn,$existSql);
    if($result1){
        $err3=true;
        $err4=false;
    }
    if($err3){
        $arrdata=mysqli_fetch_array($result1);
        
   
        if($username1==$arrdata['username'] && $mail== $arrdata['mail']){
            $existSql1="UPDATE `user` SET `password` = '$password1' WHERE (`mail` = '$mail' AND `username` = '$username1' )";
            $result2=mysqli_query($conn,$existSql1);
            if($result2){
                $err=true;
            }
        }
        else{
            $err1=true;

        }
    
    }
    if($err4){
        $err2=true;
    }

    
    
    

}
?>


<body>
    <?php
    if($err){
        echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success</strong>Password Updated Successfully.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';                   
            }
            if($err1){
                echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Warning!</strong> Invalid Credentials
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';                   
                    }
                    if($err2){
                        echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Warning!</strong> Invalid Username
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';                   
                            }






?>
<link rel="stylesheet" href="login.css">
<div class="login-snip"> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Change Your Password</label>
<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label> 
                        <div class="login-space">
                        <form action="/library/forget.php" method="post">
                            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
                            <div class="login">
                                <div class="group"> <label for="username" class="label">Username</label> <input id="username" name="username" type="text" class="input" placeholder="Enter your username"> </div>
                                <div class="group"> <label for="mail" class="label">Email Address</label> <input id="mail" name="mail" type="text" class="input" placeholder="Enter your email address"> </div>
                                <div class="group"> <label for="password1" class="label">Password</label> <input id="password1" name="password1" type="password" class="input" data-type="password" placeholder="Enter new password" > </div>
                                
                                <div class="group"> <input type="submit" name="submit1" class="button" value="Submit"> </div>
                                <div class="hr"></div>
                                <div class="foot"> <a href="/library/index.php">Home</a> </div>
                                
                            </div>
                            
                        </form>
                      
                        
</body>
