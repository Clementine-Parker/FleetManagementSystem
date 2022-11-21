<?php
    session_start();

    $data = $_POST;
    $vehicle_id = $data['vehicleId'];
    $reg_num = $data['regnum'];
    $make = $data['make'];
    $model = $data['model'];
    $tank = $data['tank'];
    $prev = $data['prev'];
    $branch = $data['branch'];
    $depart = $data['depart'];
    $driver = $data['driver'];
    $write = $data['write'];

    try {

        $sql = "UPDATE `management`.`vehicle_registration` SET `reg_num` = '".$reg_num."', `make` = '".$make."',
          `model` = '".$model."', `tank_cap` = '".$tank."', `prev_owner` = '".$prev."', `branch` = '".$branch."',
          `department` = '".$depart."', `driver` = '".$driver."', `write_off` = '".$write."' WHERE (`id` = '".$vehicle_id."')";
        include ('DatabaseConn.php');
        $conn->exec($sql);        
        echo json_encode([
            'success' => true,
            'message' => 'Action Completed Successfully'
        ]);
    } catch (PDOException $e) {
        echo json_encode([
            'success' => false,
            'message' => 'Error: Action Failed'
        ]);
    }

?>