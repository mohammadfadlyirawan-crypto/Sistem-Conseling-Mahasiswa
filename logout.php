<?php
session_start();

// Hapus semua session
session_unset();
session_destroy();

// Arahkan ke index.php
header("Location: index.php");
exit;
?>
