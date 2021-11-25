<?php
$err=false;
$err1=false;
$err2=false;

if(isset($_POST['submit'])){
  include 'connection.php';
    
    $bname=$_POST["book_name"];
    
    $bauthor=$_POST["book_author"];
    $bpub=$_POST["book_pub"];
    $bquan=$_POST["book_quan"];
    $existSql="SELECT * FROM `books` WHERE book_name='$bname'";
    $result1=mysqli_query($conn,$existSql);
    $numexistRows=mysqli_num_rows($result1);
    if($numexistRows>0){
        $err2=true;
        
    }
    else{
      
            $sql="INSERT INTO `books` ( `book_name`, `book_author`, `book_publisher`, `book_quantity`) VALUES ('$bname','$bauthor','$bpub','$bquan')";
            $result=mysqli_query($conn,$sql);
            $err1=true;
        }
    
    

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    if($err1){
                    echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> Book Added Successfully.
                               
                            </div>';                   
                        }
                        else if($err2){
                            echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Warning!</strong> Book Name Already Exist.
                                        
                                    </div>';                          
                                }
                                ?>
    <title>Add Book</title>
    <link rel="stylesheet" href="IssueBook.css">
</head>
<body>

    <div class="form-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                    <div class="form-container">
                        <div class="form-icon">
                            <span><i class="fa fa-file-alt"></i></span>
                        </div>
                    
                        <form class="form-horizontal" action="/library/addbook.php" method="post">
                            <h3 class="title">Add BOOK</h3>
                       
                        <div class="sign-up-form">
                            
                            <div class="form-group">
                                <input type="text"  id="book_name" name="book_name" class="form-control" placeholder="Book Name">
                            </div>
                            <div class="form-group">
                                <input type="text" id="book_author" name="book_author" class="form-control" placeholder="Author">
                            </div>
                            <div class="form-group">
                                <input type="text"  id="book_pub" name="book_pub" class="form-control" placeholder="Publisher">
                            </div>
                            <div class="form-group">
                                <input type="text" id="book_quan" name="book_quan" class="form-control" placeholder="Quantity">
                            </div>
                            <div class="form-group">
                                <button name="submit" type="submit" class="btn signup">Add Book</button>
                            </div>
                            </form>
                            <form  action="/library/adminsection.php" method="post">
                            <div class="form-group">
                                <button class="btn signup"> HOME</button>
                            </div>
               
                        </div>
                   
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
         
</body>
</html>