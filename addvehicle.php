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
                    <form action="">
                    <div>
                    <label for="RegNum">Registration Number</label>
                    <input type="text" id="RegNum" name="RegNum"/>
                    </div>
                    <div>
                    <label for="Make">Make/Manufacturer</label>
                    <input type="text" id="Make" name="Make"/>
                    </div>
                    <div>
                    <label for="Model">Model</label>
                    <input type="text" id="Model" name="Model"/>
                    </div>
                    <div>
                    <label for="TankCap">Tank Capacity</label>
                    <input type="text" id="TankCap" name="TankCap"/>
                    </div>
                    <div>
                    <label for="PrevOwner">Previous Owner</label>
                    <input type="text" id="PrevOwner" name="PrevOwner"/>
                    </div>
                    <div>
                    <label for="DesBranch">Designated Branch</label>
                    <input type="text" id="DesBranch" name="DesBranch"/>
                    </div>
                    <div>
                    <label for="Depart">Department</label>
                    <input type="text" id="Depart" name="Depart"/>
                    </div>
                    <div>
                    <label for="Driver">Driver</label>
                    <input type="text" id="Driver" name="Driver"/>
                    </div>
                    <button type="submit"><i class="fa fa-plus">Add Vehicle</i></button>
                    </form>
                </div>
            </div>  
        </div>
    </div>
    <script src="script.js">
    </script>
</body>
</html>