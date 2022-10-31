<?php
session_start();
if (!isset($_SESSION['user'])) header ('location : index.php');

$user = $_SESSION['user'];
$show = include ('database/info.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Online Fleet Management System</title>
    <link rel="stylesheet" href="Style/dash.css">
    <link rel="stylesheet" href="Style/edit.css">
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
                                <th>Vehicle Model</th>
                                <th>Tank Capacity</th>
                                <th>Previous Owner</th>
                                <th>Designated Branch</th>
                                <th>Department</th>
                                <th>Driver</th>
                                <th>Update</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($show as $index => $user){ ?>
                                
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td><?= $user ['reg_num'] ?></td>
                                    <td><?= $user ['make'] ?></td>
                                    <td><?= $user ['model'] ?></td>
                                    <td><?= $user ['tank_cap'] ?></td>
                                    <td><?= $user ['prev_owner'] ?></td>
                                    <td><?= $user ['branch'] ?></td>
                                    <td><?= $user ['department'] ?></td>
                                    <td><?= $user ['driver'] ?></td>
                                    <td>
                                        <a href="" class="Edit" dta><i class="fa fa-pencil"></i>Edit</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>  
                </div>
            </div>  
        </div>
    </div>
    <script src="script.js">
    </script>
    <script>
        function script() {
            this.initialize = function(){
                this.registerEvents();
        },
        this.registerEvents =   function() {
            document.addEventListener('click',function(e){
                classList = e.target.classList;

                if (classList.contains('Edit')) {
                    e.preventDefault();
                    console.log('found');
                }
            });
        }
    }
    var script = new script();
    script.initialize();
    </script>
</body>
</html>