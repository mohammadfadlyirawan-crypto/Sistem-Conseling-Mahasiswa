<?php
include "koneksi.php";

/* ===== AMBIL DATA STATISTIK ===== */
// Pastikan koneksi ke database berhasil
$totalTugas = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM tugas"))['total'] ?? 0;
$totalMahasiswa = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM mahasiswa"))['total'] ?? 0;
$totalGuru = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM guru"))['total'] ?? 0;
$totalKelas = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(DISTINCT kelas) as total FROM tugas"))['total'] ?? 0;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Resmi LP3I</title>

    <style>
        /* ================== GLOBAL ================== */
        body {
            margin: 0;
            padding-top: 100px; /* Sesuai tinggi navbar */
            font-family: 'Segoe UI', sans-serif;
            background: #f4f6fb;
            overflow-x: hidden;
        }

       /* ================== NAVBAR ================== */
.navbar {
    background: linear-gradient(90deg,white ,#1e4db7, #0f2b6b);
    padding: 0 50px;
    height: 100px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: white;

    position: fixed;   /* Supaya selalu ikut scroll */
    top: 0;
    left: 0;
    width: 95%;

    z-index: 1000;
}


/* Area logo */
/* Area logo */
.logo-area { 
    display: flex; 
    align-items: center; 
    gap: 15px; 
}



/* Logo diperbesar tapi tidak merusak navbar */
.logo-area img { 
    height: 100px;              /* Besar logo */
    width: auto;
    object-fit: contain;
}

/* Menu */
.menu { 
    list-style: none; 
    display: flex; 
    gap: 25px; 
    margin: 0; 
}

.menu a { 
    text-decoration: none; 
    color: white; 
    font-weight: 500; 
    transition: 0.3s; 
}

.menu a:hover { 
    color: #f39c12; 
}

        /* ================== SLIDER ================== */
        .slider {
            position: relative;
            height: 450px;
            overflow: hidden;
        }

        .slide {
            position: absolute;
            width: 100%; height: 100%;
            display: flex; align-items: center; justify-content: center;
            text-align: center; color: white;
            opacity: 0; transition: opacity 1s ease-in-out;
        }

        .slide.active { opacity: 1; }
        .slide::before {
            content: ""; position: absolute; width: 100%; height: 100%;
            background-size: cover; background-position: center; z-index: -2;
        }
        .slide::after {
            content: ""; position: absolute; width: 100%; height: 100%;
            background: rgba(0,0,0,0.45); z-index: -1;
        }

        /* Background Gambar Slide */
        .slide:nth-child(1)::before { background-image: url('lp3i.1.jpg'); }
        
        

        .slide h1 { font-size: 45px; margin: 0; }
        .slide p { font-size: 20px; }

        /* ================== STATISTIK (FIXED) ================== */
        .statistik {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin: -60px auto 60px;
            padding: 0 20px;
            position: relative;
            z-index: 10;
        }

        .card {
            background: white;
            padding: 30px;
            width: 220px;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
            transition: 0.4s;
        }

        .card:hover { transform: translateY(-10px); }
        .card h2 { color: #1e4db7; margin: 0; font-size: 35px; }
        .card p { color: #666; font-weight: 500; margin-top: 5px; }

        /* ================== INFO ACADEMIC (GAMBAR) ================== */
        .info-academic { background: #eef2f7; text-align: center; padding: 60px 10%; }
        .info-flex { display: flex; justify-content: center; gap: 20px; flex-wrap: wrap; margin-top: 30px; }
        .info-box {
            background: white; padding: 25px; width: 300px;
            border-radius: 10px; text-align: left; box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        .info-box h4 { margin: 0 0 10px 0; color: #333; display: flex; align-items: center; gap: 10px; }



        /* ================== FOOTER ================== */
        .sub-footer {
            background: white; padding: 40px 50px;
            display: flex; justify-content: space-between; align-items: center;
            border-top: 1px solid #eee;
        }
        .footer-logo img { height: 80px; }
        footer { text-align: center; padding: 20px; background: #0f2b6b; color: white; }
    </style>
</head>

<body>

<header>
    <div class="navbar">

        <div class="logo-area">
            <div class="logo-box">
                <img src="depoklp3i.png" alt="Logo">
            </div>
            <span style="font-weight: bold; font-size: 20px;">
                Politeknik LP3I Jakarta Kampus Depok
            </span>
        </div>

        <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="profil.php">Profil Kampus</a></li>
            <li><a href="berita.php">Berita</a></li>
            <li><a href="home.php">Form Konseling</a></li>
        </ul>

    </div>
</header>

<section class="slider">
    <div class="slide active">
        <div>
            <h1>Selamat Datang di </h1>
            <h2>Politeknik LP3I Jakarta kampus Depok</h2>
            <p>Membangun Generasi Profesional dan Siap Kerja</p>
        </div>
    </div>
</section>

<section class="statistik">
    <div class="card">
        <h2 class="counter" data-target="<?= $totalTugas ?>">0</h2>
        <p>Konseling Dikirim</p>
    </div>
    <div class="card">
        <h2 class="counter" data-target="<?= $totalKelas ?>">0</h2>
        <p>prodi Aktif</p>
    </div>
    <div class="card">
    <h2 class="counter" data-target="6">0</h2>
    <p>Jumlah Pembimbing Akademik</p>
</div>
    <div class="card">
    <h2 class="counter" data-target="429">0</h2>
    <p>Mahasiswa Aktif</p>
</div>
    </div>
</section>

<section class="info-academic" id="akademik">
    <h2 style="text-align: center; border: none;">Pembimbing Akademik</h2>
    <div class="info-flex">

        <div class="info-box">
            <h4>Administrasi Bisnis</h4>
            <p>Nova Nilakrisna Nasution, S.E., M.M.</p>
        </div>

        <div class="info-box">
            <h4>Komputerisasi Akuntansi</h4>
            <p>Agnesia Rachma Yulia, S.E.</p>
        </div>

        <div class="info-box">
            <h4>Hubungan Masyarakat</h4>
            <p>R. Windu Laksono, S.E.</p>
        </div>

        <div class="info-box">
            <h4>Manajemen Informatika</h4>
            <p>Anggara Setiawan, S.M.</p>
        </div>

        <div class="info-box">
            <h4>Administrasi Bisnis Internasional</h4>
            <p>Dwi Handayani, S.Pd.</p>
        </div>
        <div class="info-box">
    <h4>Digital</h4>
    <p>elda Maulidina, S.Ak.</p>
    </div>
</section>

<div class="sub-footer">     
    <img src="dl.png" alt="LP3I Logo" width=450px>
       
    </div>
    <div class="footer-links">
        <a href="#" style="margin-left: 20px; color: #555; text-decoration: none;">Kontak</a>
        <a href="#" style="margin-left: 20px; color: #555; text-decoration: none;">Panduan</a>
    </div>
</div>

<footer>
    © <?= date("Y") ?> LP3I - Website Resmi
</footer>

<script>
document.addEventListener("DOMContentLoaded", function () {
    
    // 1. LOGIKA SLIDER
    const slides = document.querySelectorAll(".slide");
    let index = 0;

    if(slides.length > 0) {val(() => {       slides[ove("active");
            index = (index + 1) % slides.length;
            slides[index].classList.add("active");
        }, 4000);
    }  // Mengatur kecepatan jalan angka
            const speed = 200;        const inc = target / speed;nt + inc);
                setTimeout(updateCount, 15);
            } else {
                counter.innerText = target;
            }
        };

        updateCount();
    });
});
</script>

</body>
</html>
