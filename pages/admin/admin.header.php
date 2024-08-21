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
            Panda Development Corp. - HRIS
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
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                <li><a class="dropdown-item" href="#">Consulting</a></li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#">Development</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Web Development</a></li>
                                        <li><a class="dropdown-item" href="#">Mobile Development</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item" href="#">Support</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                About
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                <li><a class="dropdown-item" href="#">Company</a></li>
                                <li><a class="dropdown-item" href="#">Team</a></li>
                                <li><a class="dropdown-item" href="#">Careers</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle account" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Account
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown3">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>