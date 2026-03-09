<?php
include 'koneksi.php';

date_default_timezone_set("Asia/Jakarta"); // penting supaya jam sesuai

if(isset($_POST['kirim'])){

    $nama   = mysqli_real_escape_string($conn, $_POST['nama']);
    $nim    = mysqli_real_escape_string($conn, $_POST['nim']);
    $kelas  = mysqli_real_escape_string($conn, $_POST['kelas']);
    $matkul = mysqli_real_escape_string($conn, $_POST['matkul']);

    /* =========================
       CEK DEADLINE DULU
    ========================== */

    $cek_deadline = mysqli_query($conn,"SELECT deadline FROM deadline_kelas WHERE kelas='$kelas'");
    $data_deadline = mysqli_fetch_assoc($cek_deadline);

    if($data_deadline && $data_deadline['deadline'] != null){

        $deadline = strtotime($data_deadline['deadline']);
        $sekarang = time();

        if($sekarang > $deadline){
            echo "<script>
                    alert('Maaf, deadline untuk kelas ini sudah lewat!');
                    window.history.back();
                  </script>";
            exit;
        }
    }

    /* =========================
       PROSES UPLOAD FILE
    ========================== */

    $file_name = $_FILES['file']['name'];
    $tmp_name  = $_FILES['file']['tmp_name'];

    $folder = "file_tugas/";

    // Biar nama file tidak sama
    $new_name = time() . "_" . $file_name;

    if(move_uploaded_file($tmp_name, $folder . $new_name)){

        mysqli_query($conn, "INSERT INTO tugas 
        (nama, nim, kelas, matkul, file) 
        VALUES 
        ('$nama','$nim','$kelas','$matkul','$new_name')");

        header("Location: kirim.php?status=sukses");
        exit;

    } else {

        echo "<script>
                alert('Upload gagal!');
                window.history.back();
              </script>";
    }
}
?>
