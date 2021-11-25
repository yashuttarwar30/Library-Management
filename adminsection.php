<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location:adminlogin.php");
    exit;
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Section</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2&display=swap" rel="stylesheet">
    <style>
        h1 {
            /* width: 170px; */
            margin-top: 12px;
            margin-left: 661px;
            margin-right: 20px;
            /* height: 120px;  */
        }

        .Buttons {
            margin-top: -212px;
            margin-left: 415px;
            margin-right: 20px;
            padding: 242px;
            border-radius: 10px;
        }

        body::before {
            content: "";
            /* background: url('https://beyondthebyte.com/wp-content/uploads/2019/01/section-background.jpg') no-repeat center center/cover; */
            position: absolute;
            top: 0px;
            left: 0px;
            height: 100%;
            width: 100%;
            z-index: -1;
            opacity: 0.9;
        }
        .btn{
            border: 2px solid rgb(26, 5, 5);
            padding: 19px;
            margin: 12px;
            border-radius: 25px;
            background-color: rgb(245, 242, 238);
            text-decoration: none;
            width: 200px;
            font-size: 20px;
            font-family: 'Bree Serif', serif;
            cursor: pointer;
        }
        
    </style>
</head>

<body>
    <body background="adminsection.jpg">
    <p>
    <h1>Admin Section</h1>
    </p>
    <div class="Buttons text-center" >
    <form  action="/library/addbook.php" method="post">
                            <div class="form-group">
                                <button class="btn signup"> Add Books</button>
                            </div>
    </form>
        <br>
        <form  action="/library/librarians.php" method="post">
                            <div class="form-group">
                                <button class="btn signup">View Librarians</button>
                            </div>
        </form>
        <br>
        <form  action="/library/delete.php" method="post">
                            <div class="form-group">
                                <button class="btn signup">Delete Book</button>
                            </div>
        </form>
        <br>
        <form  action="/library/problem.php" method="post">
                            <div class="form-group">
                                <button class="btn signup">Problems</button>
                            </div>
        </form>
        <br>
        <form  action="/library/adminlogout.php" method="post">
                            <div class="form-group">
                                <button class="btn signup">Logout</button>
                            </div>
        </form>
    </div>

</body>

</html>