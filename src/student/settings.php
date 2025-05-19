
<?php include_once '../../auth/control.php'; $info = getUsersInfo();
    $admin_info = $info['admin_info'];
    $resultCount = $info['resultCount'];
    $professortCount = $info['professortCount'];
    $usersAccountID = $info['usersAccountID'];        
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SETTINGS</title>
    <!-- <link rel="stylesheet" href="../../assets/css/main_frontend.css?v=<?php echo time(); ?>"> -->
    <link rel="stylesheet" href="../../assets/css/hr.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../assets/css/profile.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <style>
      @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css');
    </style>
    <script src="../../assets/js/main.js"></script>
</head>
<body>
<?php include_once '../../auth/control.php'; $info = getUsersInfo();
    $student_info = $info['student_info'];
    $resultCount = $info['resultCount'];
    $professortCount = $info['professortCount'];
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <!-- <link rel="stylesheet" href="../../assets/css/main_frontend.css?v=<?php echo time(); ?>"> -->
    <link rel="stylesheet" href="../../assets/css/hr.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <style>
      @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css');
    </style>
    <script src="../../assets/js/main.js"></script>
</head>
<body>
    <div class="sideNav">
            <div class="sideContents" id="sideContents">
                <div class="profileBox">
                <img src="../../assets/image/zppsu-logo.png" alt="pfp" id="pfpOnTop">
                    <h4>Since 1913</h4>
                    <p>Zamboanga Peninsula Region IX</p>
                </div>
                <div class="menuBox">
                    <ul>
                       <a href="dashboard.php" id="dashboard-a"><button id="buttonDashboard"><i class="fa-solid fa-house-user"></i>DASHBOARD</button></a>
                        <a href="evaluation.php"><button type="submit">Evaluate</button></a>
                    </ul>
                </div>
            </div>
        </div>
    
   <div class="columnFlex">
        <div class="header">
            <div class="logo" style="display: flex; height: 100%; align-items: center;">
                <!-- <img src="../../assets/image/zppsu-logo.png" alt="pfp" id="pfpOnTop" style="height: 50px; width: 50px; border-radius: 50%; margin-right: 10px;"> -->
                <h3 id="userTitle">ZPPSU EVALUATION SYSTEM</h3>
            </div>
            <div class="otherButtons">
                <button type="submit" onclick="profileMenu()" id="buttonpfpmenu">
                    <img src="../../assets/image/zppsu-logo.png" alt="pfp" id="pfpOnTop">
                    <p><?php echo $student_info["lname"] ." "; ?><i class="fa-solid fa-caret-down"></i></p>
                </button>
                
                <div class="profileMenu" id="profileMenu" style="display: none;">
                    <li id="borderBottom"><a href="settings.php"><p><i class="fa-solid fa-gear"></i>SETTINGS</p></a></li>
                    <li><a href="../logout.php" id="l"><p><i class="fa-solid fa-right-from-bracket"></i>LOGOUT</p></a></li>
                </div>
            </div>
        </div>
        <div class="contents">
            <div class="chnage-password">
                <?php
                echo '<div class="change">';
                    getErrors_signups();
                echo '</div>';
                
                ?>
            
                <h3>CHANGE PASSWORD HERE</h3>
                    <form action="../../auth/authentications.php?id=<?php echo $usersAccountID['id']; ?>" method="post">
                        <input type="hidden" name="passwordChange" value="users">
                        <input type="password" name="current_password" placeholder="Current Password:" required>
                        <input type="password" name="new_password" placeholder="New Password:" required>
                        <input type="password" name="confirm_password" placeholder="Confirm Password: " required>
                        <div class="buttonDiv">
                            <button>Change password</button>
                        </div>
                    </form>

            </div>
        </div>    
        <?php
            approvedSuccess();
        ?>
    </div>
    <script src="../../assets/js/hr/hrLL.js"></script>
</body>
</html>
