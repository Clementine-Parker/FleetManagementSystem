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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.4/css/bootstrap-dialog.min.css" integrity="sha512-PvZCtvQ6xGBLWHcXnyHD67NTP+a+bNrToMsIdX/NUqhw+npjLDhlMZ/PhSHZN4s9NdmuumcxKHQqbHlGVqc8ow==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


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
                                <th>Car Model</th>
                                <th>Tank Capacity</th>
                                <th>Prev Owner</th>
                                <th>Branch</th>
                                <th>Department</th>
                                <th>Driver</th>
                                <th>Write Off</th>
                                <th>Update</th>
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
                                    <td>
                                        <a href="" class="Edit" ><i class="fa fa-pencil"></i>Edit</a>
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
    <script src="javascript/script.js"></script>
    <script src="javascript/jQuery.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.4/js/bootstrap-dialog.js" integrity="sha512-AZ+KX5NScHcQKWBfRXlCtb+ckjKYLO1i10faHLPXtGacz34rhXU8KM4t77XXG/Oy9961AeLqB/5o0KTJfy2WiA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    <script>
        function script() {
            this.initialize = function(){
                this.registerEvents();
        },
        this.registerEvents =   function() {
            document.addEventListener('click',function(e){
                targetElement = e.target;
                classList = targetElement.classList;

                if (classList.contains('Edit')) {
                    e.preventDefault();
                    

                    RegNum = targetElement.closest('tr').querySelector('td.RegNum')
                    Make = targetElement.closest('tr').querySelector('td.Make')
                    Model = targetElement.closest('tr').querySelector('td.Model')
                    Tank = targetElement.closest('tr').querySelector('td.TankCap')
                    Prev = targetElement.closest('tr').querySelector('td.PrevOwner')
                    Branch = targetElement.closest('tr').querySelector('td.Branch')
                    Depart = targetElement.closest('tr').querySelector('td.Depart')
                    Driver = targetElement.closest('tr').querySelector('td.Driver')
                    Write = targetElement.closest('tr').querySelector('td.Writte')

                    console.log(RegNum,Make,Model,Tank,Prev,Branch,Depart,Driver,Write);

                    BootstrapDialog.confirm({
                        title: 'Update Vehicle Info',
                        message: Make + ' ' + Model + ' ' + RegNum,
                    })
                }
            });
        }
    }
    var script = new script();
    script.initialize();
    </script>
</body>
</html>