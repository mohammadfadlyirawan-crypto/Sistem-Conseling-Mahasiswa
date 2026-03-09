<?php
session_start();
include "koneksi.php";

if(isset($_POST['simpan'])){

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $topik = $_POST['topik'];
    $masalah = $_POST['masalah'];
    $tanggal = $_POST['tanggal'];
    $solusi = $_POST['solusi'];

    // CEK FILE ADA ATAU TIDAK
    if(isset($_FILES['file']) && $_FILES['file']['error'] == 0){

        $fileName = time().'_'.$_FILES['file']['name'];
        $tmpName  = $_FILES['file']['tmp_name'];
        $folder   = "upload/".$fileName;

        if(move_uploaded_file($tmpName,$folder)){

            $query = mysqli_query($conn,"INSERT INTO tugas
            (nim,nama,kelas,topik,masalah,tanggal,solusi,file)
            VALUES
            ('$nim','$nama','$kelas','$topik','$masalah','$tanggal','$solusi','$fileName')");
            if($query){

    $_SESSION['success'] = "Tugas berhasil dikirim!";

    echo "<script>
            window.location='sukses.php';
          </script>";
    exit;
}
           else{
                echo "Error Database: " . mysqli_error($conn);
            }

        }else{
            echo "<script>alert('Upload file gagal! Pastikan folder upload ada.');</script>";
        }

    }else{
        echo "<script>alert('File belum dipilih atau error upload!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Form konseling</title>

<style>
body{
    margin:0;
    font-family:Segoe UI;
    background:#f4f6fb;
}

/* LOGO */
.logo{
    text-align:center;
    margin-top:20px;
    margin-bottom:0px;
}

.logo img{
    width:320px;
}

/* FORM */
.container{
    width:90%;
    max-width:480px;
    margin:5px auto 40px auto;
    background:white;
    padding:25px;
    border-radius:14px;
    box-shadow:0 15px 35px rgba(0,0,0,0.15);
}

h2{
    text-align:center;
    font-size:20px;
    margin-bottom:15px;
    color:#0f2b6b;
}

input,select,textarea{
    width:100%;
    padding:9px;
    margin-bottom:12px;
    border-radius:8px;
    border:1px solid #ddd;
    font-size:14px;
}

input:focus,select:focus,textarea:focus{
    border:1px solid #1e88e5;
    outline:none;
    box-shadow:0 0 5px rgba(30,136,229,0.3);
}

button{
    width:100%;
    padding:10px;
    border:none;
    border-radius:8px;
    background:#1e88e5;
    color:white;
    font-size:14px;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    background:#1565c0;
}

.back{
    display:block;
    text-align:center;
    margin-top:12px;
    text-decoration:none;
    color:#1e88e5;
    font-weight:bold;
}

footer{
    text-align:center;
    padding:15px;
    margin-top:30px;
    background:#0f2b6b;
    color:white;
    font-size:13px;
}

#jam{
    font-weight:bold;
}

.deadline-warning{
    border:2px solid red !important;
}
</style>
</head>

<body>

<div class="container">

<div class="logo">
    <img src="depoklp3i.png">
</div>

<h2>Form Konseling</h2>

<form method="POST" enctype="multipart/form-data">
    <input type="text" name="nim" placeholder="NIM" required>
    <input type="text" name="nama" placeholder="Nama Mahasiswa" required>

    <!-- UBAH JADI DROPDOWN -->
    <select name="kelas" required>
    <option value="">-- Pilih Prodi --</option>

    <optgroup label="Tingkat 1">
    <option value="1 Administrasi Bisnis">Tingkat 1 - AB</option>
    <option value="1 Komputerisasi Akutansi">Tingkat 1 - KA</option>
    <option value="1 Hubungan Masyarakat">Tingkat 1 - HM</option>
    <option value="1 Manajemen Informatika">Tingkat 1 - MI</option>
    <option value="1 Administrasi Bisnis Internasional">Tingkat 1 - ABI</option>
    <option value="1 Administrasi Bisnis Internasional Karyawan">Tingkat 1 - ABI Karyawan</option>
    <option value="1 Bisnis Digital">Tingkat 1 - BD</option>
</optgroup>

<optgroup label="Tingkat 2">
    <option value="2 Administrasi Bisnis">Tingkat 2 - AB</option>
    <option value="2 Komputerisasi Akutansi">Tingkat 2 - KA</option>
    <option value="2 Hubungan Masyarakat">Tingkat 2 - HM</option>
    <option value="2 Manajemen Informatika">Tingkat 2 - MI</option>
    <option value="2 Administrasi Bisnis Internasional">Tingkat 2 - ABI</option>
    <option value="2 Administrasi Bisnis Internasional Karyawan">Tingkat 2 - ABI karyawan</option>
    <option value="2 Bisnis Digital">Tingkat 2 - BD</option>
</optgroup>

<optgroup label="Tingkat 3">
    <option value="3 Administrasi Bisnis">Tingkat 3 - AB</option>
    <option value="3 Komputerisasi Akutansi">Tingkat 3 - KA</option>
    <option value="3 Hubungan Masyarakat">Tingkat 3 - HM</option>
    <option value="3 Manajemen Informatika">Tingkat 3 - MI</option>
    <option value="3 Administrasi Bisnis Internasional">Tingkat 3 - ABI</option>
    <option value="3 Administrasi Bisnis Internasional Karyawan">Tingkat 3 - ABI karyawan</option>
    <option value="3 Bisnis Digital">Tingkat 3 - BD</option>
</optgroup>

<optgroup label="Tingkat 4">
    <option value="4 Administrasi Bisnis Internasional">Tingkat 4 - ABI</option>
    <option value="4 Bisnis Digital">Tingkat 4 - BD</option>
</optgroup>
</select>

    <input type="date" name="tanggal" required>
    <input type="text" name="topik" placeholder="Topik konseling" required>
    <textarea name="masalah" placeholder="Deskripsi / Masalah" required></textarea>
    <textarea name="solusi" placeholder="Solusi "></textarea>

    <label>Upload File (PDF/DOC/JPG/PNG)</label>
    <input type="file" name="file" required>

    <button type="submit" name="simpan">Kirim Konseling</button>
</form>

<a href="home.php" class="back">⬅ Kembali ke Beranda</a>

</div>

<footer>
    Jam Sekarang: <span id="jam"></span><br>
    © 2026 Sistem LP3I
</footer>


<script>
function updateJam(){
    let now = new Date();
    document.getElementById("jam").innerHTML =
        now.getHours().toString().padStart(2,'0') + ":" +
        now.getMinutes().toString().padStart(2,'0') + ":" +
        now.getSeconds().toString().padStart(2,'0');
}
setInterval(updateJam,1000);
updateJam();
</script>


</body>
</html>