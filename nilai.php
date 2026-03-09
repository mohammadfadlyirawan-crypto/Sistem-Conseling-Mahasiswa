<?php
session_start();
include "koneksi.php";

if(!isset($_SESSION['guru'])){
    header("Location: login_guru.php");
    exit;
}

if(!isset($_GET['id'])){
    header("Location: dashboard_guru.php");
    exit;
}

$id = $_GET['id'];

// Ambil data tugas
$data = mysqli_query($conn,"SELECT * FROM tugas WHERE id='$id'");
$t = mysqli_fetch_assoc($data);

// Ambil data nilai jika sudah ada
$nilaiQuery = mysqli_query($conn,"SELECT * FROM nilai WHERE tugas_id='$id'");
$nilaiData = mysqli_fetch_assoc($nilaiQuery);

if(isset($_POST['simpan'])){
    $nilai = $_POST['nilai'];
    $komentar = $_POST['komentar'];

    // Cek apakah sudah ada nilai
    if($nilaiData){
        // UPDATE jika sudah ada
        mysqli_query($conn,"UPDATE nilai 
                            SET nilai='$nilai', komentar='$komentar' 
                            WHERE tugas_id='$id'");
    } else {
        // INSERT jika belum ada
        mysqli_query($conn,"INSERT INTO nilai (tugas_id, nilai, komentar) 
                            VALUES ('$id','$nilai','$komentar')");
    }

    header("Location: lihat_tugas.php?kelas=".$t['kelas']);
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Beri Nilai</title>
<style>
body{
    font-family:Segoe UI;
    background:#f5f7fa;
}

.container{
    width:500px;
    margin:80px auto;
    background:white;
    padding:30px;
    border-radius:15px;
    box-shadow:0 5px 20px rgba(0,0,0,0.1);
}

h2{
    margin-top:0;
}

input, textarea{
    width:100%;
    padding:10px;
    margin-top:10px;
    border-radius:8px;
    border:1px solid #ccc;
}

button{
    margin-top:15px;
    padding:10px;
    width:100%;
    background:#4e73df;
    color:white;
    border:none;
    border-radius:8px;
    cursor:pointer;
}

button:hover{
    background:#2e59d9;
}
</style>
</head>
<body>

<div class="container">
    <h2>Beri Nilai Tugas</h2>

    <p><b>Nama:</b> <?= $t['nama'] ?></p>
    <p><b>NIM:</b> <?= $t['nim'] ?></p>
    <p><b>Kelas:</b> <?= $t['kelas'] ?></p>

    <form method="POST">
        <label>Nilai (0-100)</label>
        <input type="number" 
               name="nilai" 
               min="0" 
               max="100" 
               required
               value="<?= $nilaiData['nilai'] ?? '' ?>">

        <label>Komentar</label>
        <textarea name="komentar" rows="4"><?= $nilaiData['komentar'] ?? '' ?></textarea>

        <button type="submit" name="simpan">Simpan Nilai</button>
    </form>
</div>

</body>
</html>
