<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location:index.php");
    exit;
    
}
?>
<?php
$err5=false;
include 'connection.php';
$id=$_GET['issueid'];
$showquery=" SELECT * FROM `issue` WHERE `issue_id` = ($id) ";
$showdata=mysqli_query($conn,$showquery);
$arrdata=mysqli_fetch_array($showdata);
$bname=$arrdata['book_id'];
$showquery2="UPDATE `books` SET `book_quantity`=(`book_quantity` + 1)  WHERE  `book_id`=$bname ";
    $showdata2=mysqli_query($conn,$showquery2);

if($showdata2){
    $query="DELETE FROM `issue` WHERE `issue`.`issue_id` = ($id)";
    $exe=mysqli_query($conn,$query);    
    
    if($exe){
        $err5=true;
    }
}
else{
    
        printf("Error: %s\n", mysqli_error($conn));
        exit();
      
}
?>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/userstyle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

.navbar
{
    width:100%;
    white-space:nowrap;
    background-color: #5E11A3;
}
.main_div
{
    width:100%;
    height:100vh;
 
}
   input
  {
      margin-top:10px;
      width:230px;
      height:40px;
      border-radius:5px;
      outline:none;
  }
 ::placeholder
 {
     padding:10px;
     color:orange;
 }
button
{
    color:#7A3DAF;
    background:white;
    border-color:#7A3DAF;
   padding: 14px 20px;
  cursor: pointer;
  width: 100%;
    
}
button:hover
 {
     color:white;
     background:#4CAF50;
     border:none;
     opacity:0.8;
 }


 </style>
</head>
<body>
<div class="main_div">
 
     <div class="navbar navbar-expand-md">
   
      <a href="#" class="navbar-brand font-weight-bold text-white text-center">LIBRARY MANAGEMENT</a>
      <button class="navbar-toggler text-white " type="button" data-toggle="collapse" data-target="#collapsenavbar">
      <span class="navbar-toggler-icon" style="background:white;"></span>
      </button>
     
       <div class="collapse navbar-collapse text-center" id="collapsenavbar">
          <ul class="navbar-nav ml-auto">
              
                  </li>
              <li class="nav-item">
              
                  <a href="hello.php" class="nav-link text-white">HOME</a></li>
                  
                      
               </ul>
        </div>
     </div>


     <div>
     <img src="11.jpg" alt="Library" height="400" width="1000">
         <?php
         
        if($err5){
            echo '<script>
            swal("Book Returned Successfully", "Thank You");
             </script> ';
        }
        ?>
     
</div>

