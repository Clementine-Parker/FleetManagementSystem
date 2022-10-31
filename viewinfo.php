<?php
session_start();
if (!isset($_SESSION['user'])) header ('location : index.php');
$_SESSION['table'] = 'vehicle_registration';
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Online Fleet Management System</title>
    <link rel="stylesheet" href="Style/dash.css">
    <link rel="stylesheet" href="Style/view.css">
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
                    <form action="database/vehicleadd.php" method="POST" class="appForm">
                    <div class="FormContainer">
                    <label for="reg_num">Registration Number</label>
                    <input type="text" class="formInput" id="reg_num" name="reg_num"/>
                    </div>
                    <div class="FormContainer">
                    <label for="make">Make/Manufacturer</label>
                    <input type="text" class="formInput" id="make" name="make"/>
                    </div>
                    <div class="FormContainer">
                    <label for="model">Model</label>
                    <input type="text" class="formInput" id="model" name="model"/>
                    </div>
                    <div class="FormContainer">
                    <label for="tank_cap">Tank Capacity</label>
                    <input type="text" class="formInput" id="tank_cap" name="tank_cap"/>
                    </div>
                    <div class="FormContainer">
                    <label for="prev_owner">Previous Owner</label>
                    <input type="text" class="formInput" id="prev_owner" name="prev_owner"/>
                    </div>
                    <div class="FormContainer">
                    <label for="branch">Designated Branch</label>
                    <input type="text" class="formInput" id="branch" name="branch"/>
                    </div>
                    <div class="FormContainer">
                    <label for="department">Department</label>
                    <input type="text" class="formInput" id="department" name="department"/>
                    </div>
                    <div class="FormContainer">
                    <label for="driver">Driver</label>
                    <input type="text" class="formInput" id="driver" name="driver"/>
                    </div>
                    <button type="submit" class="btnAdd"><i class="fa fa-plus" id="Send">Add Vehicle</i></button>
                    </form>
                    <?php
                    if (isset($_SESSION['response'])) { 
                        $response = $_SESSION['response']['message'];
                        $is_success = $_SESSION['response']['success'];
                        ?>
                    <div class="Response">
                        <p class="<?= $is_success ? 'responseMessage__success' : 'responseMessage__error' ?>">
                        <?= $response ?>
                    </p>
                    </div>
                    <?php unset($_SESSION['response']);} ?>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <script src="javascript/script.js">
    </script>
</body>
</html>