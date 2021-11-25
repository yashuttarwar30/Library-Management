<?php
$err=false;
$err1=false;
$err2=false;

if(isset($_POST['submit'])){
  include 'connection.php';
    
    $qname=$_POST["txtName"];
    
    $qmail=$_POST["txtEmail"];
    // $qnumber=$_POST["txtPhone"];
    $qquery=$_POST["txtMsg"];
    
    $sql1="INSERT INTO `problem` (`q_name`, `q_mail`, `q_query`) VALUES ('$qname','$qmail','$qquery')"; 
    // $sql="INSERT INTO `problem` (`q_name`, `q_email`, `q_query`) VALUES ('$qname','$qmail','$qquery')";
    $result=mysqli_query($conn,$sql1);
    if($result){
        $err1=true;

    }
            
        
    
    

}
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="contact.css">
    <title>Contact</title>
  </head>
  <body>
    <div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
                <?php
    if($err1){
                    echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> Your Response has been recorded.
                               
                            </div>';                   
                        }
                        else if($err2){
                            echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Warning!</strong> Book Name Already Exist.
                                        
                                    </div>';                          
                                }
                                ?>
            </div>
            <form action="/library/contact.php"  method="post">
                <h3>Drop Us a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" id="txtName" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" id="txtEmail" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <br>
                        <!-- <div class="form-group">
                            <input type="text" id="txtPhone" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div> -->
                        <div class="form-group">
                            <input type="submit" name="submit" class="btnContact" value="Send Message" />
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea  id="txtMsg" name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                </form>
                <form action="/library/front.php"  method="post">
                    <div class="form-group">
                            <input type="submit" name="submit1" class="btnContact" value="HOME" />
                        </div>
                </form>
                    </div>
                
                
                </div>
            
            
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>