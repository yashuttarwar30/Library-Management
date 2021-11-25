<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location:index.php");
    exit;
    
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Section</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2&display=swap" rel="stylesheet">
    <style>
        h1 {
            /* width: 170px; */
            margin-top: 12px;
            margin-left: 450px;
            margin-right: 20px;
            /* height: 120px;  */
        }

        .Buttons {
            margin-top: -212px;
            margin-left: 207px;
            margin-right: 20px;
            padding: 242px;
            border-radius: 10px;
            
        }

        body::before {
            content: "";
            background: url('https://images.unsplash.com/photo-1507738978512-35798112892c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80') no-repeat center center/cover; 
            position: absolute;
            top: 0px;
            left: 0px;
            height: 130%;
            width: 100%;
            z-index: -1;
            opacity: 0.9;
           
        }
        .btn{
            cursor: pointer;
            border: 2px solid rgb(26, 5, 5);
            padding: 19px;
            margin: 12px;
            border-radius: 25px;
            background-color: rgb(245, 242, 238);
            text-decoration: none;
            width: 200px;
            font-size: 20px;
            font-family: 'Bree Serif', serif;
        }
    </style>
</head>

<body>
    <!-- <body background="112.jpg"> -->
    <p>
    <h1>Library Section</h1>
    </p>
    <div class="Buttons">
    <form  action="/library/books.php" method="post">
    <div class="form-group">
                                <button class="btn">View Books</button>
                            </div>
    </form>
        <br>
    <form  action="/library/issue.php" method="post">
    <div class="form-group">
                                <button class="btn signup">Issue Books</button>
                            </div>
        <br>
    </form>
    <form  action="/library/issuedbooks.php" method="post">
    <div class="form-group">
                                <button class="btn signup">View Issued Books</button>
                            </div>
        <br>
    </form>
    <form  action="/library/return.php" method="post">
    <div class="form-group">
                                <button class="btn signup">Return Book</button>
                            </div>
        <br>
    </form>
    <form  action="/library/logout.php" method="post">
    <div class="form-group">
                                <button class="btn signup">Logout</button>
                            </div>
    </form>    
    </div>

</body>


</html>