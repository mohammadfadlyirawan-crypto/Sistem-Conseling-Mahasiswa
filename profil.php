<?php
include "koneksi.php";

/* ===== AMBIL DATA STATISTIK ===== */
// Pastikan koneksi ke database berhasil
$totalTugas = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM tugas"))['total'] ?? 0;
$totalMahasiswa = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM mahasiswa"))['total'] ?? 0;
$totalGuru = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM guru"))['total'] ?? 0;
$totalKelas = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(DISTINCT kelas) as total FROM tugas"))['total'] ?? 0;
// Konten Profil
$sejarah = "LP3I adalah institusi pendidikan vokasi terkemuka di Indonesia yang didirikan pada 29 Maret 1989, berfokus pada mencetak lulusan siap kerja melalui pendidikan 2 tahun (College) dan D3/Sarjana Terapan (Politeknik).";
$visi = "Menjadi pusat pendidikan vokasi terdepan yang menghasilkan sumber daya manusia profesional, beriman, dan bertakwa.";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Resmi LP3I - Vokasi Terdepan</title>
    <style>
        /* ================== GLOBAL STYLE ================== */
        body {
            margin: 0;
            padding-top: 100px; /* Sesuai tinggi navbar */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f6fb;
            color: #333;
            scroll-behavior: smooth;
        }

        /* ================== NAVBAR ================== */
        .navbar {
    background: linear-gradient(90deg,white ,#1e4db7, #0f2b6b);
    padding: 0 50px;
    height: 100px;              /* Tinggi navbar dibuat tetap */
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: white;
    position: sticky;
    top: 0;
    z-index: 1000;

    position: fixed;   /* Supaya selalu ikut scroll */
    top: 0;
    left: 0;
    width: 95%;

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

        /* ================== HERO SLIDER ================== */
        .slider { position: relative; height: 480px; overflow: hidden; }
        .slide {
            position: absolute; width: 100%; height: 100%;
            display: flex; align-items: center; justify-content: center;
            text-align: center; color: white; opacity: 0; transition: opacity 1s;
        }
        .slide.active { opacity: 1; }
        .slide::before {
            content: ""; position: absolute; top: 0; left: 0; width: 100%; height: 100%;
            background-size: cover; background-position: center; z-index: -2;
        }
        .slide::after {
            content: ""; position: absolute; top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0, 26, 87, 0.6); z-index: -1;
        }
        .slide:nth-child(1)::before { background-image: url('lp3icibinong.jpg'); }
        .slide:nth-child(2)::before { background-image: url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4'); }

        .slide h1 { font-size: 48px; margin-bottom: 10px; }

        /* ================== STATISTIK ================== */
        .stats-container {
            display: flex; justify-content: center; gap: 20px;
            margin-top: -50px; position: relative; z-index: 10;
        }
        .stat-card {
            background: white; padding: 25px; width: 180px;
            text-align: center; border-radius: 12px; box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }
        .stat-card h3 { margin: 0; color: #1e4db7; font-size: 30px; }
        .stat-card p { margin: 5px 0 0; color: #777; font-weight: 600; font-size: 14px; }

        /* ================== CONTENT SECTIONS ================== */
        .section { padding: 80px 10%; }
        .flex-container { display: flex; gap: 50px; align-items: center; }
        .flex-item { flex: 1; }
        
        h2 { color: #0f2b6b; font-size: 32px; border-left: 5px solid #f39c12; padding-left: 15px; }

        /* ================== PRODI CARDS ================== */
        /* ================== PRODI SECTION ================== */

.prodi-section {
    background: #f8faff;
    padding: 80px 10%;
}

.section-title {
    text-align: center;
    font-size: 32px;
    color: #0f2b6b;
    margin-bottom: 40px;
}

.prodi-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
}

.prodi-card {
    background: white;
    padding: 30px 20px;
    text-align: center;
    border-radius: 15px;
    font-weight: 600;
    color: #0f2b6b;
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    cursor: pointer;
}

/* Hover effect */
.prodi-card:hover {
    transform: translateY(-8px);
    background: linear-gradient(135deg,#1e4db7,#0f2b6b);
    color: white;
}

/* Tablet */
@media (max-width: 992px) {
    .prodi-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

/* HP */
@media (max-width: 576px) {
    .prodi-grid {
        grid-template-columns: 1fr;
    }
}
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
            <li><a href="#profil">Profil</a></li>
        <li><a href="#prodi">Program Studi</a></li>
        <li><a href="#akademik">Akademik</a></li>
        </ul>

    </div>
</header>


<header class="slider" id="beranda">
    <div class="slide active">
        <div>
            <h1>Tepat & Cepat Kerja</h1>
            <p>Pioneer Pendidikan Vokasi di Indonesia Sejak 1989</p>
        </div>
    </div>
    <div class="slide">
        <div>
            <h1>Kuliah Sambil Kerja</h1>
            <p>Metode 70% Praktik & 30% Teori</p>
        </div>
    </div>
</header>
<div class="stats-container">
     <div class="stat-card">
        <h2 class="counter" data-target="<?= $totalTugas ?>">0</h2>
        <p>Tugas Dikirim</p>
    </div>
    <div class="stat-card">
        <h2 class="counter" data-target="<?= $totalKelas ?>">0</h2>
        <p>Kelas Aktif</p>
    </div>
    <div class="stat-card">
        <h2 class="counter" data-target="6"<?= $totalGuru ?>">0</h2>
        <p>Jumlah Pembimbing Akademik</p>
    </div>
    <div class="stat-card">
        <h2 class="counter" data-target="429"<?= $totalMahasiswa ?>">0</h2>
        <p>Mahasiswa Aktif</p>
    </div>
</div>
  
<section class="section" id="profil">
    <div class="flex-container">
        <div class="flex-item">
            <h2>Tentang LP3I</h2>
            <p><?= $sejarah ?></p>
            <p>LP3I berkomitmen mengurangi pengangguran terdidik dengan kurikulum yang adaptif terhadap kebutuhan dunia kerja.</p>
            <p> Dengan semboyan "Tepat & Cepat Kerja", LP3I menawarkan program D3, Sarjana Terapan (D4), dan pendidikan 2 tahun siap kerja (College) yang menekankan 70% praktik dan 30% teori</p>
        </div>
        <div class="flex-item" style="background: #0f2b6b; color: white; padding: 40px; border-radius: 20px;">
            <h3 style="color: #f39c12;">Visi Kami</h3>
            <p style="font-style: italic; font-size: 18px;">"<?= $visi ?>"</p>
            <hr>
            <p><strong>Keunggulan:</strong>
                <ul>
                    <li>Program Penempatan Kerja</li>
                    <li>Kurikulum Berbasis Industri</li>
                    <li>Sertifikasi Kompetensi</li>
                </ul>
            </p>
        </div>
    </div>
</section>

<section class="section prodi-section" id="prodi">
    <h1 class="section-title">Program Studi Unggulan</h1>

    <div class="prodi-grid">
       <div class="prodi-card">Administrasi Bisnis Internasional</div>
        <div class="prodi-card">Bisnis Digital</div>
        <div class="prodi-card">Logistik Niaga</div>
        <div class="prodi-card">Administrasi Bisnis</div>
        <div class="prodi-card">Komputerisasi Akuntansi</div>
        <div class="prodi-card">Hubungan Masyarakat</div>
        <div class="prodi-card">Manajemen Informatika</div>
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
            <h4>Bisnis Digital</h4>
            <p>Imelda Maulidina, S.Ak.</p>
        </div>

    </div>
</section>

<div class="sub-footer">
    <div class="footer-logo">
        <img src="dl.png" alt="LP3I Logo">
        <b style="color:#0f2b6b; font-size: 20px; margin-left:10px;">Politeknik LP3I Jakarta kampus Depok</b>
    </div>
    <div class="footer-links">
        <a href="#" style="margin-left: 20px; color: #555; text-decoration: none;">Kontak</a>
        <a href="#" style="margin-left: 20px; color: #555; text-decoration: none;">Panduan</a>
    </div>
</div>

<footer>
    <p>&copy; 2024 LP3I - Pendidikan Vokasi TOP 3 Indonesia</p>
</footer>

<script>
    // Slider Logic
    const slides = document.querySelectorAll(".slide");
    let current = 0;
    setInterval(() => {
        slides[current].classList.remove("active");
        current = (current + 1) % slides.length;
        slides[current].classList.add("active");
    }, 4000);
    //jam
    const counters = document.querySelectorAll('.counter');
    
    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target'); // Mengambil angka dari database
            const count = +counter.innerText;

            // Mengatur kecepatan jalan angka
            const speed = 200; 
            const inc = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + inc);
                setTimeout(updateCount, 15);
            } else {
                counter.innerText = target;
            }
        };

        updateCount();
    });
</script>

</body>
</html>