<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eternity Weddings | Premium Wedding Organizer</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="layout-wrapper">
        <?php include 'includes/sidebar.php'; ?>
        
        <div class="main-content">
            <header>
                <div class="mobile-toggle">
                    <i class="fas fa-bars"></i>
                </div>
                
                <div class="logo">
                    ETERNITY <span style="font-weight: 300; color: var(--text-primary);">WEDDINGS</span>
                </div>

                <nav class="desktop-nav">
                    <ul class="nav-links-horizontal">
                        <li><a href="index.php"><i class="fas fa-home" style="margin-right: 0.5rem;"></i> Beranda</a></li>
                        <li><a href="services.php"><i class="fas fa-gem" style="margin-right: 0.5rem;"></i> Paket Layanan</a></li>
                        <li><a href="tracking.php"><i class="fas fa-calendar-check" style="margin-right: 0.5rem;"></i> Tracking</a></li>
                        <li><a href="booking.php"><i class="fas fa-file-signature" style="margin-right: 0.5rem;"></i> Booking</a></li>
                    </ul>
                </nav>

                <div class="user-actions">
                    <a href="login.php" class="btn btn-outline" style="padding: 0.5rem 1.2rem;">Login</a>
                    <a href="register.php" class="btn" style="padding: 0.5rem 1.2rem; margin-left: 0.5rem;">Register</a>
                </div>
            </header>
            
            <div class="content-body">
