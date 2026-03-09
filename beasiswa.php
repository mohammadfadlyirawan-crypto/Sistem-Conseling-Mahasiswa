<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Beasiswa LP3I Untuk Milangkala</title>

<style>
body{
    margin:0;
    font-family: 'Segoe UI', sans-serif;
    background:#f4f6fb;
}

.top-nav {
            background: #0f2b6b;
            padding: 12px 10%;
            display: flex;
            align-items: center;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .top-nav a {
            text-decoration: none;
            color: white;
            font-size: 14px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: 0.3s;
        }

        .top-nav a:hover { color: #f39c12; }

        /* ================= HEADER NEWS BANNER ================= */
        .news-header {
            background: linear-gradient(rgba(15, 43, 107, 0.8), rgba(15, 43, 107, 0.8)), 
                        url('https://images.unsplash.com/photo-1504711434969-e33886168f5c');
            background-size: cover; 
            background-position: center;
            height: 250px; 
            display: flex; 
            align-items: center; 
            justify-content: center;
            color: white; 
            text-align: center;
        }
/* CONTAINER */
.container{
    width:1200px;
    margin:40px auto;
    display:flex;
    gap:30px;
}

/* CONTENT */
.content{
    width:70%;
    background:white;
    padding:25px;
    border-radius:10px;
    box-shadow:0 5px 15px rgba(0,0,0,0.05);
}

.content img{
    width:100%;
    border-radius:10px;
    margin-bottom:20px;
}

.meta{
    font-size:14px;
    color:gray;
    margin-bottom:10px;
}

.content h1{
    margin:10px 0 20px;
    font-size:28px;
}

.content p{
    line-height:1.7;
    color:#444;
}

/* SIDEBAR */
.sidebar{
    width:30%;
}

.card{
    background:white;
    padding:20px;
    border-radius:10px;
    box-shadow:0 5px 15px rgba(0,0,0,0.05);
}

.card h3{
    margin-bottom:15px;
}

.latest-item{
    display:flex;
    gap:10px;
    margin-bottom:15px;
    cursor:pointer;
    transition:0.3s;
}

.latest-item:hover{
    transform:translateX(5px);
}

.latest-item img{
    width:70px;
    height:60px;
    object-fit:cover;
    border-radius:6px;
}

.latest-item .info{
    font-size:14px;
}

.latest-item .info small{
    color:gray;
    display:block;
    margin-bottom:5px;
}
/*=====sidebar=====*/
.latest-item{
    display:flex;
    gap:10px;
    margin-bottom:15px;
    cursor:pointer;
    transition:0.3s;
    text-decoration:none;
    color:black;
}

.latest-item:hover{
    transform:translateX(5px);
}
/* ================= FOOTER ================= */
 .main-footer { 
            background: linear-gradient(90deg,blue,#1e4db7,#0f2b6b);
            color: white; 
            padding: 60px 10% 30px; 
            display: flex; 
            justify-content: space-between; 
            flex-wrap: wrap; 
        }
        .footer-col { width: 30%; margin-bottom: 30px; }
        
        /* Styling Logo Footer agar muncul */
        .footer-logo img { 
            max-width: 300px; 
            height: auto; 
            margin-bottom: 20px;
            display: block;
        }

        .footer-col h4 { margin-bottom: 25px; color: #f39c12; font-size: 18px; }
        .footer-col ul { list-style: none; padding: 0; }
        .footer-col li { margin-bottom: 12px; font-size: 14px; opacity: 0.8; line-height: 1.6; }
        .footer-col a:hover { color: #f39c12; }

        .social-icons { display: flex; gap: 15px; margin-top: 20px; }
        .social-icons span { 
            background: rgba(255,255,255,0.1); 
            padding: 8px 12px; 
            border-radius: 5px; 
            font-size: 12px; 
            cursor: pointer; 
        }
        /*tombol daftar*/
        .btn-daftar{
    display:inline-block;
    background:#f39c12;
    color:white;
    padding:12px 25px;
    font-size:16px;
    font-weight:bold;
    border-radius:6px;
    text-decoration:none;
    transition:0.3s;
}

.btn-daftar:hover{
    background:#d68910;
    transform:scale(1.05);
}

/* RESPONSIVE */
@media(max-width:1000px){
    .container{
        width:90%;
        flex-direction:column;
    }
    .content, .sidebar{
        width:100%;
    }
}
</style>
</head>

<body>

 <nav class="top-nav">
        <a href="home.php">
            <span>🏠</span> Home
        </a>
        
       
        <span style="color: rgba(255,255,255,0.3); margin: 0 15px;">|</span>
        <span style="color: white; font-size: 14px; opacity: 0.7;"><a href="berita.php">News </a></span>
    </nav>

    <header class="news-header">
        <div>
            <h1>News</h1>
            <p>Yuk cek apa saja berita up to date yang ada di LP3I saat ini!</p>
        </div>
    </header>


<!-- MAIN -->
<div class="container">

    <!-- CONTENT -->
    <div class="content">
        <img src="karawang.png" class="logo-berita" alt="beasiswa">

        <div class="meta">
            📅 April 9, 2025April 9, 2025| 👤 admin_DLY
        </div>

        <h1>Beasiswa LP3I Untuk Milangkala Karawang Tahun Akademik 2023/2024</h1>
         <img src="beasiswa.png" alt="beasiswa">
        <h3>Tujuan: </h3>
        <p>Dari program beasiswa 100% ini adalah untuk membantu anak yatim piatu dan keluarga tidak mampu untuk melanjutkan pendidikan di LP3I.</p>
        
        <h3>Ketentuan :</h3>
        <ul>
        <li>Berstatus sosial fakir, miskin dan anak yatim piatu yang tidak mampu.</li>
        <li>Diutamakan dari keluarga (bukan anak) atau saudara karyawan LP3I Group yang telah bekerja minimal 3 tahun lamanya.</li>
        <li>Lulus dalam seleksi dan wawancara yang diadakan oleh LP3I Karawang.</li>
        </ul>
        <h3>Persyaratan  : </h3>
        <ul>
            <li>Memiliki keinginan kuat untuk belajar namun terkendala dari sisi pembiayaan.</li>
            <li>Usia maksimal yang mendaftar adalah 19 tahun sebelum tanggal 31 Agustus 2023</li>
            <li>Warga Karawang asli (KTP Karawang) </li>
            <li>Bersedia menjadi tenaga freelance di lingkungan LP3I.</li>
            <li>Mengikuti proses seleksi PMB</li>
            <li>Menyerahkan Copy Identitas (KTP/SIM/Identitas lainnya)</li>
            <li>Menyerahkan Copy Rapor dari kelas X s/d XII</li>
            <li>Menyerahkan Pas Photo 3×4 berwarna sebanyak 1 lembar  </li>
            <li>Menyerahkan Copy Ijazah SLTA Legalisir Asli sebanyak 1 Lembar</li>
            <li>Menyerahkan Copy Surat Keterangan Kematian sebanyak 1 lembar</li>
            <li>Menyerahkan Surat Keterangan Tidak Mampu</li>
        </ul>
        <h3>Benefit :</h3>
        <ul>
            <li>Bebas Biaya Sumbangan</li>
            <li>Bebas Biaya untuk semester 1, 2, 3 dan 4</li>
            <li>Bebas Biaya SKS semester  1, 2, 3 dan 4</li>
            <li>Bebas biaya Daftar ulang</li>
            <li>Bebas Biaya Seragam</li>
        </ul>
        <h2>Program Dharma Bakti :</h2>
        <p>Boleh diperbantukan sebagai tenaga kerja, apabila dibutuhkan oleh LP3I Karawang dengan ketentuan sebagai berikut: </p>
        <ul>
            <li>Tidak boleh mengganggu proses belajar.</li>
            <li>Bukan karyawan full-timer (hanya sekedar membantu)</li>
            <li>Diberikan kompensasi/honor yang pantas, sesuai kebijakan lembaga</li>
            <li>Wajib mengikuti program dharma bakti di lp3i karawang minimal selama 2 tahun, terhitung sejak dinyatakan lulus pendidikan di LP3I</li>
        </ul>
        <h3>Pelaksanaan :</h3>
        <ul>
            <li>Tes Tertulis 25 September 2023</li>
            <li>Wawancara tanggal 26 – 28 September 2023</li>
        </ul>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSe2LkEyK8YB2fnJuiJoSBbvWw9ZmIPPMALfYpGCSwWhQd6bxA/viewform" target="_blank" class="btn-daftar">
    Daftar Sekarang
</a>
    </div>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="card">
            <h3>Terkini</h3>

            <a href="vaksin_covid19.php" class="latest-item">
    <img src="covid-19.jpeg">
    <div class="info">
        <small>📅September 14, 2021 </small>
        Politeknik LP3I Jakarta Kampus Depok Turut Mengadakan Vaksinasi
    </div>
</a>


      
              <a href="peran_penting.php" class="latest-item">
    <img src="peran penting.png">
    <div class="info">
        <small>📅September 24, 2021 </small>
      Peran Penting Pendidikan Vokasi di Dunia Industri
    </div>
</a>
            
           

        </div>
    </div>

</div>

    <footer class="main-footer">
        <div class="footer-col">
            <div class="footer-logo">
                <img src="dl.png" alt="LP3I Logo" onerror="this.src='https://via.placeholder.com/150x50?text=Logo+LP3I'">
            </div>
            <div class="social-icons">
                <span>fb</span> <span>ig</span> <span>in</span> <span>yt</span>
            </div>
        </div>
    
        <div class="footer-col">
            <h4>Alamat     Politeknik LP3I Jakarta Kampus Depok </h4>
            <ul>
                <li>Depok City, West Java</li>
                <li style="margin-top:15px; font-weight:bold; opacity: 1; color: #f39c12;">📞 +62895-0313-7656</li>
            </ul>
        </div>
    </footer>
</body>
</html>