<?php
session_start();
include 'koneksi.php';

if(!isset($_SESSION['guru'])){
    header("Location: login_guru.php");
    exit;
}

if(isset($_GET['id'])){

    $id = intval($_GET['id']); // biar aman

    // Ambil nama file dulu
    $ambil = mysqli_query($conn,"SELECT file FROM tugas WHERE id='$id'");
    $data  = mysqli_fetch_assoc($ambil);

    if($data){

        $file_path = "upload/" . $data['file'];

        // Hapus file dari folder
        if(file_exists($file_path)){
            unlink($file_path);
        }

        // Hapus dari database (TABELNYA = tugas, BUKAN tugas_v2)
        mysqli_query($conn,"DELETE FROM tugas WHERE id='$id'");
    }
}

header("Location: lihat_tugas.php");
exit;
?>
