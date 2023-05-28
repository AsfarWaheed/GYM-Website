<?php
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Web Site</title>
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Source+Sans+Pro">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="header">
        <!-- Right box for buttons -->
        <div class="right">
            <button class="btn">Call Us</button>
            <button class="btn">Email Us</button>
        </div>
        <!-- Center box for navbas -->
        <div class="center">
            <ul class="navbar">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Equipment</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <!-- left box for logo -->
        <div class="left">
           <img src="img/gym-logo.jpg" alt="">
           <div>Asfar Fitness</div>
        </div>
        <div class="container">
            <h1>JOIN US</h1>
            <form action="noaction.php">
                <div class="form-group">
                    <input type="text" name="" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                    <input type="text" name="" placeholder="Age">
                </div>
                <div class="form-group">
                    <input type="text" name="" placeholder="Gender">
                </div>
                <div class="form-group">
                    <input type="text" name="" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" name="" placeholder="Cell No">
                </div>
                <button class="btn">Submit</button>
            </form>
        </div>
    </header>
</body>
</html>