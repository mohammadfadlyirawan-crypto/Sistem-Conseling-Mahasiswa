<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>LP3I Gelar Pelatihan UMKM Binaan Rumah Entrepreneur</title>

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
        <img src="umkm.jpg" alt="Ngopi Bengkulu">

        <div class="meta">
            📅 September 24, 2021March 16, 2025| 👤 admin_DLY
        </div>

        <h1>LP3I Gelar Pelatihan UMKM Binaan Rumah Entrepreneur</h1>

        <p>
      <b>Inkubator Bisnis Rumah Entrepreneur</b> Politeknik LP3I mendapat bantuan pendanaan dari Kementerian Koperasi dan Usaha Kecil dan Menengah Republik Indonesia melalui Program Fasilitasi Pengembangan Lembaga Inkubator Tahun 2021.
        <img src="UMKM-Bandung-Blog-2.jpg" alt="UMKM-Bandung-Blog-2">
       <p>Setelah melalui proses seleksi, terpilihlah 35 UMKM dari lingkungan Kota Bandung. Adapun kriteria UMKM yang terpilih untuk dapat mengikuti program ini adalah sebagai berikut:</p>
            <b>
                <ul>
                    <li>Usaha telah berjalan minimal 6 bulan dan maksimal 3 tahun.</li>
                    <li>Bidang usaha pada makanan/minuman dan konveksi.</li>
                    <li>Lokasi usaha di Bandung Raya (Kota Bandung, Kabupaten Bandung, Kabupaten Bandung Barat dan Kota Cimahi).</li>
                </ul>
            </b>
      <p>
        Pada program ini, berbagai jenis pelatihan yang diadakan dan disampaikan oleh berbagai narasumber Ahli di pengembangan UMKM telah dilakukan sejak bulan Agustus 2021. Diantaranya:
      </p>
        <ul>
            <li>Pelatihan untuk mendapatkan sertifikat halal</li>
            <li>Pelatihan mengenai cara memproses sertifikat BPOM</li>
            <li>Pelatihan cara mendapatkan sertifikat SNI</li>
            <li>Berbagai pelatihan lainnya.</li>
        </ul>
        <img src="UMKM-Bandung-Blog-3.jpg" alt="UMKM-Bandung-Blog-3">
        <p>
            Pada 18 September 2021, pelatihan bagi UMKM binaan yang dilaksanakan di kampus Politeknik LP3I menghadirkan Siti Nur Maftuhah, S.T.P., M.T. (Fasilitator Daerah BPOM BIG Indonesia) dengan materi “Pelatihan Praktik Pengajuan BPOM”. Selain dari itu, Billy Soesviantoro (Junior Associate Business Development SME) menyampaikan materi “Pemasaran Go Digital Bersama Shopee”
        </p>
        <img src="UMKM-Bandung-Blog-4.jpg" alt="UMKM-Bandung-Blog-4">
        <p>
            Siti berpendapat bahwa program ini sangat bagus karena dapat menambah pengetahuan dan kapasitas skill pelaku UMKM. Salah satu pelaku UMKM yang termasuk sebagai peserta, Iis Widaningsih menyatakan, kegiatan ini sangat bagus. “Selama ini, baru kali ini saya mendapat pelatihan seperti ini. Materi yang bermanfaat serta fasilitas pelatihan yang baik sekali,” katanya dalam siaran pers, Ahad (19/9).
        </p>
        <p>
            Siti berpendapat bahwa program ini sangat bagus karena dapat menambah pengetahuan dan kapasitas skill pelaku UMKM. Salah satu pelaku UMKM yang termasuk sebagai peserta, Iis Widaningsih menyatakan, kegiatan ini sangat bagus. “Selama ini, baru kali ini saya mendapat pelatihan seperti ini. Materi yang bermanfaat serta fasilitas pelatihan yang baik sekali,” katanya dalam siaran pers, Ahad (19/9).
        </p>
        <img src="UMKM-Bandung-Blog-5.jpg" alt="UMKM-Bandung-Blog-5">
        <p>Penanggung jawab program, Dr. Prima Vandayani, S.T, M.M selaku Ketua Inkubator Bisnis Politeknik LP3I menjelaskan bahwa Politeknik LP3I berusaha untuk membantu masyarakat melalui program ini agar UMKM dapat meningkatkan daya saing produk juga akan meningkatkan efisiensi proses produksi dan menciptakan kepercayaan masyarakat luas sebagai konsumen.</p>
    <p>
        “Diketahui bahwa UMKM telah menjadi penyumbang Produk Domestik Bruto (PDB) terbesar dengan jumlahnya yang banyak daripada usaha skala besar. Namun berdasarkan indeks daya saing, UMKM belum setara dengan usaha yang lebih besar.
    </p>
    <p>
        Masih banyak UMKM yang belum memahami SNI. Mereka pada umumnya belum menyadari bagaimana standardisasi produk menjadi penting untuk dapat memiliki daya saing dan bagaimana dampaknya bagi pertumbuhan usaha mereka,” ujar Prima Vandayani.
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


      
             <a href="korbangempa.php" class="latest-item">
    <img src="gempa.jpg">
    <div class="info">
        <small>📅December 5, 2022May </small>
      Keluarga Besar LP3I Turut Serta dalam Membantu Korban Gempa Cianjur
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