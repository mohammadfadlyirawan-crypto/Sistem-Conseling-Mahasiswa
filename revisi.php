<?php
session_start();
include "koneksi.php";

$cek = mysqli_query($conn, "SELECT id FROM tugas_2");
echo "ID yang tersedia di database: ";
while($row = mysqli_fetch_assoc($cek)) {
    echo $row['id'] . ", ";
}
die();if(!isset($_SESSION['mahasiswa'])){
    header("Location: login_mahasiswa.php");
    exit;
}

/* ===========================
   CEK ID
=========================== */
// Gunakan empty() agar lebih aman mengecek apakah ID ada dan tidak kosong
if(!isset($_GET['id']) || empty($_GET['id'])){
    die("ID tugas tidak ditemukan! Pastikan Anda mengklik tombol revisi dari dashboard.");
}

$id = intval($_GET['id']);

/* ===========================
   AMBIL DATA TUGAS
=========================== */
// Menggunakan prepared statement (opsional tapi lebih aman) atau pastikan $id sudah di-intval
$result = mysqli_query($conn, "SELECT * FROM tugas WHERE id='$id'");

if(mysqli_num_rows($result) == 0){
    die("Data tugas tidak ditemukan di database!");
}

$data = mysqli_fetch_assoc($result);

/* ===========================
   PROSES UPLOAD REVISI
=========================== */
if(isset($_POST['upload'])){

    if(isset($_FILES['file']) && $_FILES['file']['error'] == 0){

        $file    = $_FILES['file']['name'];
        $tmp     = $_FILES['file']['tmp_name'];
        $folder  = "upload/";

        if(!is_dir($folder)){
            mkdir($folder, 0777, true);
        }

        // Ambil ekstensi file asli agar lebih rapi
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        $new_name = time() . "revisi" . $id . "." . $ext;

        if(move_uploaded_file($tmp, $folder . $new_name)){
            
            // Tambahkan versi secara otomatis
            $versi_baru = $data['versi'] + 1;

            $update = mysqli_query($conn, "UPDATE tugas SET 
                file='$new_name',
                status='Menunggu',
                versi='$versi_baru'
                WHERE id='$id'
            ");

            if($update){
                header("Location: dashboard_mahasiswa.php?status=sukses");
                exit;
            } else {
                $error = "Gagal memperbarui database!";
            }
        } else {
            $error = "Gagal memindahkan file ke folder upload!";
        }

    } else {
        $error = "Silahkan pilih file terlebih dahulu!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Upload Revisi - <?= $data['nama'] ?></title>
    <style>
        /* CSS Kamu sudah bagus, saya tambahkan sedikit transisi */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #2563eb, #06b6d4);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            background: white;
            padding: 40px;
            border-radius: 15px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            text-align: center;
        }
        h3 { margin-top: 0; color: #1e293b; }
        .info {
            background: #f1f5f9;
            padding: 15px;
            border-radius: 8px;
            font-size: 14px;
            color: #475569;
            margin-bottom: 25px;
            line-height: 1.6;
        }
        input[type="file"] {
            display: block;
            width: 100%;
            margin-bottom: 20px;
            border: 1px dashed #cbd5e1;
            padding: 10px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 12px;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: 0.3s;
        }
        button:hover { background: #1e4ed8; }
        .error {
            background: #fee2e2;
            color: #b91c1c;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 13px;
        }
        .back {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #64748b;
            font-size: 13px;
        }
        .back:hover { color: #2563eb; }
    </style>
</head>
<body>

<div class="card">
    <h3>Upload Revisi</h3>

    <div class="info">
        Nama Tugas:<br>
        <strong><?= htmlspecialchars($data['nama']) ?></strong><br>
        <small>Versi Saat Ini: <span style="color:#2563eb">v<?= $data['versi'] ?></span></small>
    </div>

    <?php if(isset($error)): ?>
        <div class="error"><?= $error ?></div>
    <?php endif; ?>

    <form action="revisi.php?id=<?= $id ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <button type="submit" name="upload">Kirim Revisi Terbaru</button>
    </form>

    <a class="back" href="dashboard_mahasiswa.php">← Kembali ke Dashboard</a>
</div>

</body>
</html>