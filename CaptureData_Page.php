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
    <link rel="stylesheet" href="Style/Main.css">
    <link rel="stylesheet" href="Style/Capture.css">
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
                    <div class="viewstuff">
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
    </div>
    <script src="Javascript/Navigation.js"></script>
    <script src="Javascript/jQuery.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.4/css/bootstrap-dialog.js"></script>
    <script>
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