<?php
session_start();
if (!isset($_SESSION['user'])) header ('location : index.php');

$user = $_SESSION['user'];
$show = include ('Database/ViewInfo.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Online Fleet Management System</title>
    <link rel="stylesheet" href="Style/Main.css">
    <link rel="stylesheet" href="Style/View.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.4/css/bootstrap-dialog.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <script src="https://kit.fontawesome.com/887823e70d.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="DashMainContainer"> <?php 
        include ('UI/Sidebar.html')
        ?>
        <div class="Dash_ContContainer" id="ContContainer">
        <?php 
        include ('UI/NavigationBar.html')
        ?>
            <div class="Dash_Content">
                <div class="Dash_View">
                    <div>
                        <h1 class="header"> <i class="fa fa-laptop"></i> View/Query Information</h1>
                    </div>
                    <div class="viewstuff">
                        <table>
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Reg Number</th>
                                <th>Manufacturer</th>
                                <th>Car Model</th>
                                <th>Tank Capacity</th>
                                <th>Prev Owner</th>
                                <th>Branch</th>
                                <th>Department</th>
                                <th>Driver</th>
                                <th>Write Off</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($show as $index => $user){ ?>
                                
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td class="RegNum"><?= $user ['reg_num'] ?></td>
                                    <td class="Make"><?= $user ['make'] ?></td>
                                    <td class="Model"><?= $user ['model'] ?></td>
                                    <td class="TankCap"><?= $user ['tank_cap'] ?></td>
                                    <td class="PrevOwner"><?= $user ['prev_owner'] ?></td>
                                    <td class="Branch"><?= $user ['branch'] ?></td>
                                    <td class="Depart"><?= $user ['department'] ?></td>
                                    <td class="Driver"><?= $user ['driver'] ?></td>
                                    <td class="Write"><?= $user ['write_off'] ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>  
                </div>
            </div>  
        </div>
    </div>
    <script src="Javascript/Navigation.js"></script>
    <script src="Javascript/jQuery.js"></script>
    
</body>
</html>