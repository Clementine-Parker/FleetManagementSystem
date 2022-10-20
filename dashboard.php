<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Online Fleet Management System</title>
    <link rel="stylesheet" href="Style/dash.css">
    <link rel="stylesheet" href="Style/icons.css">
    <script src="https://kit.fontawesome.com/887823e70d.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="DashMainContainer">
        <div class="Dash_Sidebar" id="Sidebar"> 
            <h3 class="Dash_Logo" id="Logo">Dashboard</h3>
            <div class="Dash_User">
                <img src="Assets/user.png" alt="User Image."/>
                <span>Administrator</span>
            </div>
            <div class="Dash_Sibebar_Menu">
                <ul class="Menu_List">
                    <li>
                        <a href=""><i class="fa fa-plus-square"></i>  Capture New Vehicle</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-edit"></i>  Edit/Update Vehicle</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-server"></i>  View/Query Details</a>
                    </li>
                </ul>
                </div>
        </div>
        <div class="Dash_ContContainer" id="ContContainer">
            <div class="Dash_TopNav">
                <a href="" id="toggle"><i class="fa fa-navicon"></i></a>
                <a href="" id="logout"><i class="fa fa-power-off"></i>Logout</a>
            </div>  
            <div class="Dash_Content">
                <div class="Dash_View">

                </div>
            </div>  
        </div>
    </div>
    <script src="script.js">
    </script>
</body>
</html>