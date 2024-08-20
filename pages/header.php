<?php
session_start();

if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 'admin') {
        header("Location: admin/admin.dashboard.php");
        exit();
    } elseif ($_SESSION['role'] == 'marketing') {
        header("Location: ../marketing/marketing.promo.php");
        exit();
    } elseif ($_SESSION['role'] == 'hr') {
        header("Location: ../hr/hr.dashboard.php");
        exit();
    } elseif ($_SESSION['role'] == 'dev') {
        header("Location: ../dev/dev.dashboard.php");
        exit();
    }
}

// Retrieve any error message from the session
$error = isset($_SESSION['error']) ? $_SESSION['error'] : '';
unset($_SESSION['error']);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Panda Development Corp. Support</title>

        <!-- Favicons -->
        <link href="../img/favicon.png" rel="icon">
        <link href="../img/favicon.png" rel="apple-touch-icon">

        <!-- VENDOR CSS -->
        <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="../assets/vendor/fontawesome/css/all.min.css" rel="stylesheet">
        <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <!-- MAIN CSS -->
        <link href="../assets/css/login.style.css" rel="stylesheet">
    </head>
    <body>