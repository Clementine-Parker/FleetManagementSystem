<?php
if ($_POST){
    $username = $_POST ['username'];
    $password = $_POST ['password'];

    include ('database/database.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    
    <title> Login - Online Fleet Management System</title>
    <link rel="stylesheet" href="Style/login.css">
    
</head>
<body>
    
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