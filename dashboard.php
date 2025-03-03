<?php
// Mulai sesi
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Jika belum login, arahkan pengguna ke halaman login
    header('Location: login.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Include CSS dari SB Admin 2 -->
    <link href="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.0.5/dist/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top">

<div id="wrapper">
    <!-- Sidebar -->
    <!-- (Anda bisa menyalin bagian Sidebar dari SB Admin 2 di sini) -->
    
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <!-- Topbar (Navbar) -->
            <!-- (Salin bagian Navbar dari SB Admin 2 di sini) -->
            
            <div class="container-fluid">
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Welcome, <?php echo $_SESSION['username']; ?>!</h1>
                <p class="mb-4">This is your dashboard.</p>
            </div>
        </div>
    </div>
</div>

<!-- Script JS dari SB Admin 2 -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-easing@3.0.1/jquery.easing.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.0.5/dist/js/sb-admin-2.min.js"></script>

</body>
</html>
