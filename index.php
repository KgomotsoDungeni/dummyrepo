<?php 
session_start();
require_once "./../env/dbconnection.php";
?>

<?php

$query = "SELECT COUNT(*) as count FROM student WHERE user_type = 'student'";
$result = $conn->query($query); // Use the $conn object for querying
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

$query = "SELECT COUNT(*) as count FROM 12a WHERE user_type = 'teacher'";
$result = $conn->query($query); // Use the $conn object for querying
$row = mysqli_fetch_assoc($result);
$counts = $row['count'];

$query = "SELECT COUNT(*) as count FROM parents WHERE user_type = 'parent'";
$result = $conn->query($query); // Use the $conn object for querying
$row = mysqli_fetch_assoc($result);
$countA = $row['count'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="styles.css">
    <title>Admin panel</title>
</head>

<body>
    <div class="container">
        <div class="topbar">
            <header>
                <a href="#" class="logo">Class<span>Mates.</span></a>
            </header>
            
            
            </div>
        </div>
        <div class="sidebar">
            <ul>
                <li>
                    <a href="Students/students.php">
                        <i class="fas fa-user-graduate"></i>
                        <div>Students</div>
                    </a>
                </li>
                <li>
                    <a href="Teachers/teachers.php">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <div>Teachers</div>
                    </a>
                </li>
                <li>
                    <a href="Parents/parents.php">
                        <i class="fas fa-users"></i>
                        <div>Parents</div>
                    </a>
                </li>
                <li>
                    <a href="Performance/performance.php">
                        <i class="fas fa-chart-bar"></i>
                        <div>Performance</div>
                    </a>
                </li>
                <li>
                    <a href="results.php">
                        <i class="fas fa-award"></i>
                        <div>Results</div>
                    </a>
                </li>
                <li>
                    <a href="Announcement/announcement.html">
                        <i class="fas fa-bell" aria-hidden="true"></i>
                        <div>Announcement</div>
                    </a>
                </li>
                <li>
                    <a href="Teachers/layout.php">
                        <i class="fas fa-th-large"></i>
                        <div>Library</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-cog" aria-hidden="true"></i>
                        <div>Settings</div>
                    </a>
                </li>
                <li>
                    <a href="Permissions/permission.html">
                        <i class="fas fa-question" aria-hidden="true"></i>
                        <div>Permissions</div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <div class="number"><?php echo $count; ?></div>
                        <div class="card-name">Students</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number"><?php echo $counts; ?></div>
                        <div class="card-name">Teachers</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                    <div class="number"><?php echo $countA; ?></div>
                        <div class="card-name">Parents</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">$4500</div>
                        <div class="card-name">Earnings</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>
            </div>
            <div class="charts">
                <div class="chart">
                    <h2>Earnings (past 12 months)</h2>
                    <div>
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>
                <div class="chart doughnut-chart">
                    <h2>Employees</h2>
                    <div>
                        <canvas id="doughnut"></canvas>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
   
</body>

</html>

