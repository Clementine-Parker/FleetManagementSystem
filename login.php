<?php
$error_message = '';

if ($_POST){
    include ('database/database.php');

    $username = $_POST ['username'];
    $password = $_POST ['password'];
    $query = 'SELECT * FROM USERS WHERE USERS.username = "' . $username . '" AND USERS.password = "' . $password . '"';
    $stmt = $conn->prepare($query);
    $result = $stmt;
    var_dump($query);
    die;
    
}
?>
<!DOCTYPE html>
<html>
<head>
    
    <title> Login - Online Fleet Management System</title>
    <link rel="stylesheet" href="Style/login.css">
    
</head>
<body id="loginBody">
    <div id="Error">
        <p>Error : <?= $error_message?></p>
    </div>
    
    <div>
        <div class="loginHeader">
            <h1>Login Page</h1>
            <p>Online Fleet Management System</p>
        </div>

        <div class="loginBody">
            <form action="login.php" method="POST">

                <div class="LoginInput">
                    <label for="">Username</label>
                    <input name="username" type="text" name="" id="">
                </div>

                <div class="LoginInput">
                    <label for="">Password</label>
                    <input name="password" type="password" name="" id="">
                </div>
                
                <div class="LoginBtn">
                    <button>Login</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>