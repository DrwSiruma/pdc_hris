<?php
session_start();
include('../../includes/connection.php');

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../index.php");
    exit();
}

// Retrieve any error message from the session
$error = isset($_SESSION['error']) ? $_SESSION['error'] : '';
unset($_SESSION['error']);
// Retrieve any success message from the session
$success = isset($_SESSION['success']) ? $_SESSION['success'] : '';
unset($_SESSION['success']);
unset($_SESSION['success']);
// Get the current script name
$current_page = basename($_SERVER['PHP_SELF']);
$employee_pages = ['admin.add.employee.php'];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Panda Development Corp. - Admin</title>

        <!-- Favicons -->
        <link href="../../img/favicon.png" rel="icon">
        <link href="../../img/favicon.png" rel="apple-touch-icon">

        <!-- VENDOR CSS -->
        <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="../../assets/vendor/fontawesome/css/all.min.css" rel="stylesheet">
        <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link href="../../assets/vendor/datatables/jquery.dataTables.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- MAIN CSS -->
        <link href="../../assets/css/main.style.css" rel="stylesheet">
    </head>
    <body>
        <!-- Brand Name Section -->
        <div class="brand-name">
            <h3>Panda Development Corporation</h3>
            <span>Human Resources Management System</span>
        </div>
        <!-- Navbar Section -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($current_page == 'admin.dashboard.php') ? 'active' : ''; ?>" aria-current="page" href="admin.dashboard.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Admin
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#" id="submenuDropdown1">DTR Management</a>
                                    <ul class="dropdown-menu" aria-labelledby="submenuDropdown1">
                                        <li><a class="dropdown-item" href="#">Define Holiday</a></li>
                                        <li><a class="dropdown-item" href="#">Shift Timetable</a></li>
                                        <li><a class="dropdown-item" href="#">Shift Management</a></li>
                                        <li><a class="dropdown-item" href="#">Company Default Work Schedule</a></li>
                                        <li><a class="dropdown-item" href="#">Default Work Schedule By Department</a></li>
                                        <li><a class="dropdown-item" href="#">Default Work Schedule By Employee</a></li>
                                        <li><a class="dropdown-item" href="#">Cause of Tardiness</a></li>
                                        <li><a class="dropdown-item" href="#">Biometric Device List</a></li>
                                        <li><a class="dropdown-item" href="#">Period Cut-off</a></li>
                                        <li><a class="dropdown-item" href="#">Add/Update Work Areas</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#" id="submenuDropdown1">Audit Trail</a>
                                    <ul class="dropdown-menu" aria-labelledby="submenuDropdown1">
                                        <li><a class="dropdown-item" href="#">System Login</a></li>
                                        <li><a class="dropdown-item" href="#">Approval Trail</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item" href="#">Company Info</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php echo (in_array($current_page, $employee_pages)) ? 'active' : ''; ?>" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Employee
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                <li><a class="dropdown-item <?php echo ($current_page == 'admin.add.employee.php') ? 'active' : ''; ?>" href="admin.add.employee.php">Add Employee</a></li>
                                <li><a class="dropdown-item" href="#">Employees List</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Leave
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                <li><a class="dropdown-item" href="#">Assign Leave</a></li>
                                <li><a class="dropdown-item" href="#">Leave Approver Status</a></li>
                                <li><a class="dropdown-item" href="#">Leave History</a></li>
                                <li><a class="dropdown-item" href="#">Fixed Leave tag as Off or Holiday</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                OT
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                <li><a class="dropdown-item" href="#">Assign OT</a></li>
                                <li><a class="dropdown-item" href="#">OT History</a></li>
                                <li><a class="dropdown-item" href="#">OT Approver Status</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Reports
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                <li><a class="dropdown-item" href="#">Time and Attendance</a></li>
                                <li><a class="dropdown-item" href="#">Employee Work Schedule</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle account" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user-circle"></i>&nbsp;Admin
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown3">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-gear"></i>&nbsp;Settings</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="../../includes/logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>