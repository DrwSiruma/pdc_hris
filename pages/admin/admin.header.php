<?php
session_start();
include('../../includes/connection.php');

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
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
$accounts_page = ['admin.add.user.php', 'admin.accounts.php'];
$outlet_page = ['admin.outlet.php', 'admin.add.outlet.php', 'admin.edit.outlet.php'];
$product_page = ['admin.products.php', 'admin.add.product.php', 'admin.edit.product.php'];
$pcategory_page = ['admin.product.category.php', 'admin.add.pcategory.php', 'admin.edit.pcategory.php']

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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container container-fluid">
                <!-- Logo -->
                <a class="navbar-brand d-flex align-items-center" href="admin.dashboard.php">
                    <img src="../../img/PDC-logo-transparent.png" alt="PDC logo" height="40">
                </a>
                <!-- Navbar toggler for mobile view -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($current_page == 'admin.dashboard.php') ? 'active' : ''; ?>" href="admin.dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php echo (in_array($current_page, $accounts_page)) ? 'active' : ''; ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Users
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item <?php echo ($current_page == 'admin.add.user.php') ? 'active' : ''; ?>" href="admin.add.user.php">Add New User</a></li>
                                <li><a class="dropdown-item <?php echo ($current_page == 'admin.accounts.php') ? 'active' : ''; ?>" href="admin.accounts.php">User Management</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Inventory
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Add New Item</a></li>
                                <li><a class="dropdown-item" href="#">Item List</a></li>
                                <li><a class="dropdown-item" href="#">Item Management</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Manpower
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                <li><a class="dropdown-item" href="#">IT List</a></li>
                                <li><a class="dropdown-item" href="#">Maintenance List</a></li>
                                <li><a class="dropdown-item" href="#">Add New Manpower</a></li>
                                <li><a class="dropdown-item" href="#">Manpower Management</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Reports
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                <li><a class="dropdown-item" href="#">IT Reports</a></li>
                                <li><a class="dropdown-item" href="#">Maintenance Reports</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" style="color: #FFD700;" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user-circle"></i>&nbsp;Admin</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-gear"></i>&nbsp;Settings</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="../../includes/logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>