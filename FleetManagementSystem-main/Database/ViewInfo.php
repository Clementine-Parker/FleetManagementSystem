<?php
    include ('DatabaseConn.php');
     $stmt = $conn->prepare("SELECT * FROM `management`.`vehicle_registration`");
     $stmt->execute();
     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

     return $stmt->fetchAll();