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
    <link rel="stylesheet" href="Style/Update.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.4/css/bootstrap-dialog.min.css" integrity="sha512-PvZCtvQ6xGBLWHcXnyHD67NTP+a+bNrToMsIdX/NUqhw+npjLDhlMZ/PhSHZN4s9NdmuumcxKHQqbHlGVqc8ow==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


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
                        <h1 class="header"> <i class="fa fa-laptop"></i> Edit/Update Information</h1>
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
                                        <a href="" class="Edit" data-userid="<?= $user['id'] ?>"><i class="fa fa-pencil" ></i>Edit</a>
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
    <script src="Javascript/Navigation.js"></script>
    <script src="Javascript/jQuery.js"></script>

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
                    
                    ID = targetElement.dataset.userid;
                    RegNum = targetElement.closest('tr').querySelector('td.RegNum').innerHTML;
                    Make = targetElement.closest('tr').querySelector('td.Make').innerHTML;
                    Model = targetElement.closest('tr').querySelector('td.Model').innerHTML;
                    Tank = targetElement.closest('tr').querySelector('td.TankCap').innerHTML;
                    Prev = targetElement.closest('tr').querySelector('td.PrevOwner').innerHTML;
                    Branch = targetElement.closest('tr').querySelector('td.Branch').innerHTML;
                    Depart = targetElement.closest('tr').querySelector('td.Depart').innerHTML;
                    Driver = targetElement.closest('tr').querySelector('td.Driver').innerHTML;
                    Write = targetElement.closest('tr').querySelector('td.Write').innerHTML;

                    console.log(RegNum,Make,Model,Tank,Prev,Branch,Depart,Driver,Write);

                    BootstrapDialog.confirm({
                        title: 'Update Vehicle Info',
                        message: '<form>\
                        <div class="form-group">\
                          <label for="RegNum"> Registration Number </label>\
                          <input type="text" class="form-control" id="RegNum" value="' +RegNum+'">\
                          </div>\
                          <div class="form-group">\
                          <label for="RegNum"> Make/Manufacturer </label>\
                          <input type="text" class="form-control" id="Make" value="' +Make+'">\
                          </div>\
                          <div class="form-group">\
                          <label for="RegNum"> Model </label>\
                          <input type="text" class="form-control" id="Model" value="' +Model+'">\
                          </div>\
                          <div class="form-group">\
                          <label for="RegNum"> Tank Capacity </label>\
                          <input type="text" class="form-control" id="Tank" value="' +Tank+'">\
                          </div>\
                          <div class="form-group">\
                          <label for="RegNum"> Previous Owner </label>\
                          <input type="text" class="form-control" id="Prev" value="' +Prev+'">\
                          </div>\
                          <div class="form-group">\
                          <label for="RegNum"> Designated Branch </label>\
                          <input type="text" class="form-control" id="Branch" value="' +Branch+'">\
                          </div>\
                          <div class="form-group">\
                          <label for="RegNum"> Department </label>\
                          <input type="text" class="form-control" id="Depart" value="' +Depart+'">\
                          </div>\
                          <div class="form-group">\
                          <label for="RegNum"> Driver </label>\
                          <input type="text" class="form-control" id="Driver" value="' +Driver+'">\
                          </div>\
                          <div class="form-group">\
                          <label for="RegNum"> Write Off (Yes/No) </label>\
                          <input type="text" class="form-control" id="Write" value="' +Write+'">\
                          </div>\
                          </form>',
                          callback: function (isUpdate) {
                            if (isUpdate){
                                $.ajax({
                                    method: 'POST',
                                    data: {
                                        vehicleId: ID,
                                        regnum: document.getElementById('RegNum').value,
                                        make: document.getElementById('Make').value,
                                        model: document.getElementById('Model').value,
                                        tank: document.getElementById('Tank').value,
                                        prev: document.getElementById('Prev').value,
                                        branch: document.getElementById('Branch').value,
                                        depart: document.getElementById('Depart').value,
                                        driver: document.getElementById('Driver').value,
                                        write: document.getElementById('Write').value,
                                    },
                                    url: 'database/update.php',
                                    dataType: 'json',
                                    success: function (data) {
                                        if (data.success) {
                                            BootstrapDialog.alert({
                                                type: BootstrapDialog.TYPE_SUCCESS,
                                                message: data.message,
                                                callback: function () {
                                                    location.reload();
                                                }
                                            });
                                        } else 
                                        BootstrapDialog.alert({
                                                type: BootstrapDialog.TYPE_DANGER,
                                                message: data.message,
                                                callback: function () {
                                                location.reload();
                                                }
                                            });
                                    }
                                });
                            }
                          }
                    });
                }
            });
        }
    }
    var script = new script();
    script.initialize();
    </script>
</body>
</html>