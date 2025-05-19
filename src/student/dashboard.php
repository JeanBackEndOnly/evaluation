<?php include_once '../../auth/control.php'; $info = getUsersInfo();
    $student_info = $info['student_info'];
    $getSemester = $info['getSemester'];
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
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
                    <p><?php echo isset($student_info["lname"]) ? $student_info["lname"] : "nope" ." "; ?><i class="fa-solid fa-caret-down"></i></p>
                </button>
                
                <div class="profileMenu" id="profileMenu" style="display: none;">
                    <li id="borderBottom"><a href="settings.php"><p><i class="fa-solid fa-gear"></i>SETTINGS</p></a></li>
                    <li><a href="../logout.php" id="l"><p><i class="fa-solid fa-right-from-bracket"></i>LOGOUT</p></a></li>
                </div>
            </div>
        </div>
        <div class="contentssssss">
            <div class="containerDashboard">
                <h3 class="fw-semibold mb-4" style="color: #000">
                    Welcome <span class="text-uppercase"><?php echo htmlspecialchars($student_info["fname"] . " " . $student_info["lname"]); ?>!</span>
                </h3>

                <div class="card shadow-sm border-start border-2 border-info px-1 py-1" style="max-width: 500px; padding: 0;">
                    <div class="card-body text-start">
                        <h5 class="fw-bold mb-1">
                            Academic Year: <?php echo isset($getSemester["school_year"]) ? $getSemester["school_year"] . " " . $getSemester["semester"] . " Semester" : "No Available Semester" ?>
                        </h5>
                        <p class="mb-0">Evaluation Status: <span class="fw-semibold"><?php echo isset($getSemester["status"]) ? $getSemester["status"] : "Closed"; ?></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../assets/js/hr/hrLL.js"></script>
</body>
</html>