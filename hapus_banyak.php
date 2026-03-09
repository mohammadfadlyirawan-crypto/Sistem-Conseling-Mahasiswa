<?php
session_start();
include "koneksi.php";

if(!isset($_SESSION['guru'])){
    header("Location: login_guru.php");
    exit;
}

if(isset($_POST['hapus'])){
    if(!empty($_POST['pilih'])){

        foreach($_POST['pilih'] as $id){
            $id = intval($id);

            $ambil = mysqli_query($conn,"SELECT file FROM tugas WHERE id='$id'");
            $data = mysqli_fetch_assoc($ambil);

            if($data){
                $file_path = "upload/" . $data['file'];

                if(file_exists($file_path)){
                    unlink($file_path);
                }

                mysqli_query($conn,"DELETE FROM tugas WHERE id='$id'");
            }
        }
    }
}

header("Location: ".$_SERVER['HTTP_REFERER']);
exit;
?>
