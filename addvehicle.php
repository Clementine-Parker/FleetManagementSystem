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
    <link rel="stylesheet" href="Style/add.css">
    <script src="https://kit.fontawesome.com/887823e70d.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="DashMainContainer"> <?php 
        include ('needed/sidebar.html')
        ?>
        <div class="Dash_ContContainer" id="ContContainer">
        <?php 
        include ('needed/navbar.html')
        ?>
            <div class="Dash_Content">
                <div class="Dash_View">
                    <div id="formContainer">
                    <form action="database/addvehicle.php" class="appForm">
                    <div class="FormContainer">
                    <label for="RegNum">Registration Number</label>
                    <input type="text" class="formInput" id="RegNum" name="RegNum"/>
                    </div>
                    <div class="FormContainer">
                    <label for="Make">Make/Manufacturer</label>
                    <input type="text" class="formInput" id="Make" name="Make"/>
                    </div>
                    <div class="FormContainer">
                    <label for="Model">Model</label>
                    <input type="text" class="formInput" id="Model" name="Model"/>
                    </div>
                    <div class="FormContainer">
                    <label for="TankCap">Tank Capacity</label>
                    <input type="text" class="formInput" id="TankCap" name="TankCap"/>
                    </div>
                    <div class="FormContainer">
                    <label for="PrevOwner">Previous Owner</label>
                    <input type="text" class="formInput" id="PrevOwner" name="PrevOwner"/>
                    </div>
                    <div class="FormContainer">
                    <label for="DesBranch">Designated Branch</label>
                    <input type="text" class="formInput" id="DesBranch" name="DesBranch"/>
                    </div>
                    <div class="FormContainer">
                    <label for="Depart">Department</label>
                    <input type="text" class="formInput" id="Depart" name="Depart"/>
                    </div>
                    <div class="FormContainer">
                    <label for="Driver">Driver</label>
                    <input type="text" class="formInput" id="Driver" name="Driver"/>
                    </div>
                    <button type="submit" class="btnAdd"><i class="fa fa-plus" id="Send">Add Vehicle</i></button>
                    </form>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <script src="script.js">
    </script>
</body>
</html>