<?php
session_start();
if (!isset($_SESSION['user'])) header ('location : index.php');

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Online Fleet Management System</title>
    <link rel="stylesheet" href="Style/dash.css">
    <link rel="stylesheet" href="Style/icons.css">
    <script src="https://kit.fontawesome.com/887823e70d.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="DashMainContainer"> <?php 
        include ('needed/sidebar.php')
        ?>
        <div class="Dash_ContContainer" id="ContContainer">
        <?php 
        include ('needed/navbar.php')
        ?>
            <div class="Dash_Content">
                <div class="Dash_View">

                </div>
            </div>  
        </div>
    </div>
    <script src="script.js">
    </script>
</body>
</html>