<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Peran Penting Pendidikan Vokasi</title>

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
        <img src="gempa.jpg" alt="gempa">

        <div class="meta">
            📅 December 5, 2022May 19, 2025| 👤 admin_DLY
        </div>

        <h1>Bersatu dalam Empati, Keluarga Besar LP3I Turut Serta dalam Membantu Korban Gempa Cianjur</h1>

        <p>
      <b> Cianjur, 1 Desember 2022 – </b>Bersatu dalam Empati Indonesia kembali berduka akibat bencana alam. Lebih dari sepekan yang lalu, tepatnya pada tanggal 21 November 2022, gempa berkekuatan 5,6 SR telah mengguncang Cianjur dan sekitarnya. Gempa tersebut menimbulkan ratusan korban jiwa dan meruntuhkan ribuan bangunan, termasuk rumah warga. Adapun korban selamat hingga saat ini masih bermukim di tempat-tempat pengungsian dan membutuhkan uluran tangan dari berbagai pihak. 
        </p>
       
        <p>
       Sebagai wujud bakti kepada masyarakat terdampak, keluarga besar LP3I (Lembaga Pendidikan dan Pengembangan Profesi Indonesia) menggalang donasi yang dilakukan oleh seluruh kampus unit di Indonesia. Di samping itu, Badan Eksekutif Mahasiswa (BEM) Politeknik LP3I Jakarta juga melakukan penggalangan dana di sekitar kampus untuk korban Cianjur. Adapun penggalangan dana tersebut berlangsung pada tanggal 23 – 27 November 2022 dan berhasil menghimpun dana sebesar Rp 30.788.500,-.
        </p>

        <p>
       Selain dana, Politeknik LP3I Jakarta juga menerima bantuan dalam bentuk lainnya dari para donatur seperti pakaian layak pakai, selimut, dan sembako. Seluruh bantuan yang terkumpul kemudian disalurkan ke Cianjur pada hari Kamis, 1 Desember 2022 dan difokuskan pada 150 kepala keluarga di wilayah RW 02 Desa Galudra, Kec. Cugenang. Secara simbolis, bantuan diserahkan oleh perwakilan Yayasan LP3I, BEM, dan manajemen Politeknik LP3I Jakarta kepada Pak Wowo. selaku perwakilan warga. 
        </p>
        <p>
          Verus Hardian selaku Wakil Direktur Bidang III Politeknik LP3I Jakarta menyampaikan ucapan terima kasih kepada seluruh donatur dan BEM LP3I Jakarta yang telah ikut serta dalam membantu korban gempa Cianjur. <b> “Alhamdulillah, saya ucapkan terima kasih kepada keluarga besar LP3I dan para donatur yang telah tergerak untuk membantu para saudara kita yang terkena musibah di Cianjur. Tak lupa saya juga mengapresiasi kerja keras mahasiswa BEM LP3I Jakarta yang cepat tanggap dalam menggalang dana dan mengumpulkan bantuan untuk diberikan kepada para korban. Semoga bantuan ini dapat meringankan beban yang dihadapi masyarakat yang terdampak.”,</b> ujar Verus.
        </p>
        
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