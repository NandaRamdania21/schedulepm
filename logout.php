<?php
session_start();
session_unset();  // Menghapus semua session
session_destroy();  // Menghancurkan session
header('Location: login.html');  // Redirect ke halaman login
exit();
?>
