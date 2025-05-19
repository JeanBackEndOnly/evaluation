<?php include_once '../../auth/control.php'; $info = getUsersInfo();
    $admin_info = $info['admin_info'];
    $resultCount = $info['resultCount'];
    $student_info = $info['student_info'];
    $professortCount = $info['professortCount'];
    $getSemester = $info['getSemester'];
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
                        <button type="submit" onclick="getHrNavs()">Faculty & Curriculum<i class="fa-solid fa-caret-down" id="iLeft"></i></button>
                        <ul style="display: none;" id="hrNavs" class="hrNavs">
                            <a href="teachers.php"><p><i class="fa-solid fa-users"></i>Faculty</p></a>
                            <a href="subjects.php"><p><i class="fa-solid fa-briefcase"></i>Subjects</p></a>
                            <a href="departments.php"><p><i class="fa-solid fa-building"></i>Departments</p></a>
                            <a href="semester.php"><p><i class="fa-solid fa-calendar"></i>Academic Year</p></a>
                            <a href="yearSection.php"><p><i class="fa-solid fa-building-flag"></i>Year and Section</p></a>
                            <a href="assignedProf.php"><p><i class="fa-solid fa-building-flag"></i>Faculty Evaluation</p></a>
                        </ul>
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
                    <p><?php echo $admin_info["firstname"] ." "; ?><i class="fa-solid fa-caret-down"></i></p>
                </button>
                
                <div class="profileMenu" id="profileMenu" style="display: none;">
                    <li id="borderBottom"><a href="settings.php"><p><i class="fa-solid fa-gear"></i>SETTINGS</p></a></li>
                    <li><a href="../logout.php" id="l"><p><i class="fa-solid fa-right-from-bracket"></i>LOGOUT</p></a></li>
                </div>
            </div>
        </div>
        <div class="contents">
            <div class="rowCount">
                <div class="evaluatorsCount">
                    <h2>TOTAL STUDENTS</h2>
                    <h1><?php echo $resultCount;?></h1>
                    <p>Users</p>
                </div>
                <div class="evaluatorsCounts">
                    <h2>TOTAL EVALUATEE</h2>
                    <h1><?php echo $professortCount;?></h1>
                    <p>Teachers</p>
                </div>
            </div>
            <div class="containerDashboard" style="margin-top: -5rem; margin-left: 1.2rem; height: 20vh; width: 60%;">

                <div class="card shadow-sm border-start border-2 border-info px-1 py-1" style="max-width: 500px; padding: 0;">
                    <div class="card-body text-start">
                        <h5 class="fw-bold mb-1" style="color: #000; font-size: 23px; margin: 15px 0;">
                            Academic Year: <?php echo isset($getSemester["school_year"]) ? $getSemester["school_year"] . " " . $getSemester["semester"] . " Semester" : "No Available Semester" ?>
                        </h5>
                        <p class="mb-0" style="color: #000; font-size: 20px;">Evaluation Status: <span class="fw-semibold"><?php echo isset($getSemester["status"]) ? $getSemester["status"] : "Closed"; ?></span></p>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <script src="../../assets/js/hr/hrLL.js"></script>
</body>
</html>