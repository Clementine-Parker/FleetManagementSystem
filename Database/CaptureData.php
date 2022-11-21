<?php
session_start();

$reg_num = $_POST['reg_num'];
$make = $_POST['make'];
$model = $_POST['model'];
$tank_cap = $_POST['tank_cap'];
$prev_owner = $_POST['prev_owner'];
$branch = $_POST['branch'];
$department = $_POST['department'];
$driver = $_POST['driver'];

try {
    $command = "INSERT INTO `management`.`vehicle_registration`
        (`reg_num`, `make`, `model`, `tank_cap`, `prev_owner`, `branch`, `department`, `driver`, `write_off`) 
        VALUES ('".$reg_num."', '".$make."', '".$model."', '".$tank_cap."', '".$prev_owner."', '".$branch."', '".$department."', '".$driver."', 'N/A')";

    include ('DatabaseConn.php');

    $response = [
        'success' => true,
        'message' => 'Vehicle Successfully Added Into The Database.'
    ];
    $conn->exec($command);  
}
catch (PDOException $e) {
    $response = [
        'success' => false,
        'message' => $e->getMessage()
    ];
}

$_SESSION['response'] = $response;
header ('location: ../CaptureData_Page.php');

?>