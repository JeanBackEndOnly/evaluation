<?php include_once '../../auth/control.php'; $info = getUsersInfo();
    $student_info = $info['student_info'];
    $professorInDept = $info['professorInDept'];
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

        /* Set global font color to black */
        .contents {
            color: black !important;
        }
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
        <div class="contents">
           <div class="card p-3 m-3 shadow" style="width: 97%; height: 95%;">
                <h4 class="mb-3">Professors in Your Department</h4>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle text-center">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Professor ID</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Position</th>
                                <th scope="col">Action</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($professorInDept)): ?>
                                <?php $count = 1; ?>
                                <?php foreach ($professorInDept as $prof): ?>
                                    <tr>
                                        <th scope="row"><?= $count++ ?></th>
                                        <td><?= htmlspecialchars($prof['teacherID']) ?></td>
                                        <td><?= htmlspecialchars($prof['fname'] . ' ' . $prof['lname']) ?></td>
                                        <td><?= htmlspecialchars($prof['email']) ?></td>
                                        <td><?= htmlspecialchars($prof['profession']) ?></td>
                                        <td>
                                            <a href="evaluateProfessor.php?id=<?= $prof['id'] ?>" class="btn btn-success btn-sm w-100">Evaluate</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="6" class="text-muted fst-italic">No assigned professors to evaluate.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <?php
        approvedSuccess();
    ?>
    <script src="../../assets/js/hr/hrLL.js"></script>
</body>
</html>