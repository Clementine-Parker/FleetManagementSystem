<?php
    include ('DatabaseConn.php');
     $stmt = $conn->prepare("SELECT * FROM `fms`.`vehicle_registration`");
     $stmt->execute();
     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

     return $stmt->fetchAll();