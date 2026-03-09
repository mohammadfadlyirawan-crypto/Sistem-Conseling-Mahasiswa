<?php
include "koneksi.php";

/* STATISTIK */
$totalTugas = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM tugas"))['total'] ?? 0;
$totalMahasiswa = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM mahasiswa"))['total'] ?? 0;
$totalGuru = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM guru"))['total'] ?? 0;
$totalKelas = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(DISTINCT kelas) as total FROM tugas"))['total'] ?? 0;
?>

<!DOCTYPE html>
<html>
<head>
<title>Sistem Konseling Mahasiswa</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Segoe UI;
}

body{
background:linear-gradient(135deg,#0f2a70,#1c73ff,#2dd4bf);
min-height:100vh;
color:white;
}

/* NAVBAR */

.navbar{
display:flex;
justify-content:space-between;
align-items:center;
padding:20px 50px;
background:rgba(255,255,255,0.1);
backdrop-filter:blur(10px);
border-radius:15px;
margin:20px;
box-shadow:0 10px 30px rgba(0,0,0,0.2);
}

.logo{
font-size:20px;
font-weight:bold;
}

.menu a{
text-decoration:none;
color:white;
margin-left:20px;
padding:10px 16px;
border-radius:10px;
transition:0.3s;
}

.menu a:hover{
background:rgba(255,255,255,0.2);
}

/* HERO */

.hero{
display:flex;
align-items:center;
justify-content:space-between;
padding:60px;
}

.hero-text{
max-width:550px;
}

.hero-text h1{
font-size:48px;
margin-bottom:15px;
}

.hero-text p{
opacity:0.9;
margin-bottom:30px;
line-height:1.6;
}

.btn{
padding:12px 22px;
border:none;
border-radius:10px;
font-size:15px;
cursor:pointer;
margin-right:10px;
}

.btn-primary{
background:white;
color:#333;
}

.btn-secondary{
background:rgba(255,255,255,0.2);
color:white;
}

/* HERO IMAGE */

.hero img{
width:420px;
animation:float 4s infinite ease-in-out;
}

@keyframes float{
0%{transform:translateY(0)}
50%{transform:translateY(-15px)}
100%{transform:translateY(0)}
}

/* STATISTIK */

.statistik{
display:flex;
justify-content:center;
gap:30px;
margin-top:40px;
flex-wrap:wrap;
}

.card{
background:rgba(255,255,255,0.15);
padding:25px 40px;
border-radius:15px;
text-align:center;
backdrop-filter:blur(5px);
}

.card h2{
font-size:32px;
}

.card p{
opacity:0.9;
}

/* ================= ALUR BARU ================= */

.alur{
margin-top:90px;
text-align:center;
}

.alur h2{
font-size:34px;
margin-bottom:60px;
}

.alur-grid{
display:flex;
justify-content:center;
align-items:center;
gap:40px;
flex-wrap:wrap;
}

.step{
background:white;
color:#333;
padding:30px 20px;
border-radius:18px;
width:220px;
box-shadow:0 15px 30px rgba(0,0,0,0.2);
transition:0.4s;
position:relative;
}

.step:hover{
transform:translateY(-10px) scale(1.05);
}

.icon-step{
width:60px;
height:60px;
border-radius:50%;
background:linear-gradient(135deg,#1c73ff,#2dd4bf);
display:flex;
align-items:center;
justify-content:center;
font-size:24px;
color:white;
margin:auto;
margin-bottom:15px;
}

.step h3{
margin-bottom:10px;
font-size:18px;
}

/* ABOUT */

.about{
display:flex;
justify-content:center;
gap:50px;
margin-top:80px;
padding:40px;
flex-wrap:wrap;
}

.box{
background:rgba(255,255,255,0.15);
padding:30px;
border-radius:15px;
width:400px;
}

.box h3{
margin-bottom:15px;
}

/* FOOTER */

.footer{
text-align:center;
margin-top:60px;
padding:30px;
background:rgba(0,0,0,0.2);
}

</style>
</head>

<body>

<!-- NAVBAR -->

<div class="navbar">

<div class="logo">💬 Sistem Konseling</div>

<div class="menu">
<a href="index.php">Home</a>
<a href="kirim.php">Kirim Konseling</a>
<a href="login_guru.php">Sistem Konseling Mahasiswa</a>
</div>

</div>


<!-- HERO -->

<div class="hero">

<div class="hero-text">

<h1>Sistem Pengumpulan<br>Konseling Mahasiswa</h1>

<p>
Platform digital untuk mengirim laporan kegiatan konseling mahasiswa 
kepada dosen pembimbing secara online. Cepat, mudah, dan terdokumentasi dengan baik.
</p>

<button class="btn btn-primary" onclick="location.href='kirim.php'">
Kirim Konseling
</button>

<button class="btn btn-secondary" onclick="location.href='login_guru.php'">
Sistem Konseling Mahasiswa
</button>

</div>

<img src="kerjain.jfif">

</div>


<!-- STATISTIK -->

<div class="statistik">

<div class="card">
<h2 class="counter" data-target="<?= $totalTugas ?>">0</h2>
<p>Konseling Dikirim</p>
</div>

<div class="card">
<h2 class="counter" data-target="<?= $totalKelas ?>">0</h2>
<p>Prodi Aktif</p>
</div>

<div class="card">
<h2 class="counter" data-target="6">0</h2>
<p>Jumlah Pembimbing Akademik</p>
</div>

<div class="card">
<h2 class="counter" data-target="429">0</h2>
<p>Mahasiswa Aktif</p>
</div>

<div class="card">
<h2>95%</h2>
<p>Laporan Valid</p>
</div>

</div>


<!-- ALUR BARU -->

<div class="alur">

<h2>Alur Pengumpulan Konseling</h2>

<div class="alur-grid">

<div class="step">
<div class="icon-step">📝</div>
<h3>1. Isi Form</h3>
<p>Mahasiswa mengisi data konseling pada sistem.</p>
</div>

<div class="step">
<div class="icon-step">📤</div>
<h3>2. Kirim Laporan</h3>
<p>Upload file dan kirim laporan konseling.</p>
</div>

<div class="step">
<div class="icon-step">👨‍🏫</div>
<h3>3. Dosen Cek</h3>
<p>Dosen pembimbing memverifikasi laporan.</p>
</div>

<div class="step">
<div class="icon-step">💾</div>
<h3>4. Tersimpan</h3>
<p>Laporan tersimpan aman di sistem.</p>
</div>

</div>

</div>


<!-- ABOUT -->

<div class="about">

<div class="box">
<h3>Tentang Konseling</h3>
<p>
Konseling membantu mahasiswa dalam menyelesaikan masalah akademik,
pribadi, dan karir melalui bimbingan dosen pembimbing.
</p>
</div>

<div class="box">
<h3>Fitur Unggulan</h3>

<p>✔ Upload File</p>
<p>✔ Tracking Status</p>
<p>✔ Aman & Rahasia</p>

</div>

</div>


<!-- FOOTER -->

<div class="footer">
© 2026 Sistem Konseling Mahasiswa
</div>


<script>

/* COUNTER ANIMATION */

const counters = document.querySelectorAll('.counter');

counters.forEach(counter => {

let target = +counter.getAttribute("data-target");
let count = 0;

let speed = target / 100;

function update(){

count += speed;

if(count < target){
counter.innerText = Math.floor(count);
requestAnimationFrame(update);
}
else{
counter.innerText = target;
}

}

update();

});

</script>

</body>
</html>