<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News - LP3I Official</title>
    <style>
        /* ================= CSS GLOBAL ================= */
        body { 
            font-family: 'Segoe UI', Tahoma, sans-serif; 
            margin: 0; 
            background-color: #f8f9fa; 
            color: #333; 
        }
        
        a { text-decoration: none; color: inherit; }

        /* ================= TOP NAVIGATION (HOME) ================= */
        .top-nav {
            background: #0f2b6b;
            padding: 12px 10%;
            display: flex;
            align-items: center;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .top-nav a {
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

        .news-header h1 { font-size: 42px; margin: 0; }
        .news-header p { font-size: 18px; opacity: 0.9; margin-top: 10px; }

        /* ================= MAIN CONTENT LAYOUT ================= */
        .container { 
            display: flex; 
            max-width: 1200px; 
            margin: 50px auto; 
            padding: 0 20px; 
            gap: 30px; 
        }

        /* SIDEBAR */
        .sidebar { width: 25%; }
        .category-box { 
            background: white; 
            padding: 25px; 
            border-radius: 12px; 
            box-shadow: 0 4px 20px rgba(0,0,0,0.05); 
        }
        .category-box h3 { margin-top: 0; font-size: 18px; border-bottom: 2px solid #eee; padding-bottom: 15px; color: #0f2b6b; }
        .category-box ul { list-style: none; padding: 0; margin: 0; }
        .category-box li { 
            padding: 12px 0; 
            border-bottom: 1px solid #f5f5f5; 
            font-size: 14px; 
            color: #666; 
            cursor: pointer; 
            transition: 0.3s;
        }
        .category-box li:hover { color: #1e4db7; padding-left: 5px; }

        /* NEWS GRID */
        .news-grid-container { width: 75%; }
        .news-grid { 
            display: grid; 
            grid-template-columns: repeat(2, 1fr); 
            gap: 25px; 
        }
        .news-card { 
            background: white; 
            border-radius: 12px; 
            overflow: hidden; 
            box-shadow: 0 4px 15px rgba(0,0,0,0.05); 
            transition: 0.3s;
        }
        .news-card:hover { transform: translateY(-5px); }
        .news-card img { width: 100%; height: 200px; object-fit: cover; }
        .news-content { padding: 20px; }
        .news-date { font-size: 11px; color: #999; margin-bottom: 8px; }
        .news-title { 
            font-size: 17px; 
            font-weight: bold; 
            color: #0f2b6b; 
            line-height: 1.5; 
            margin: 0; 
        }

        /* PAGINATION */
        .pagination { 
            display: flex; 
            justify-content: center; 
            gap: 10px; 
            margin-top: 40px; 
        }
        .page-btn { 
            padding: 10px 18px; 
            border: 1px solid #ddd; 
            background: white; 
            cursor: pointer; 
            border-radius: 6px; 
            font-size: 14px;
            transition: 0.3s;
        }
        /* Biru aktif di halaman 1 */
        .page-btn.active { 
            background: #0f2b6b; 
            color: white; 
            border-color: #0f2b6b; 
            font-weight: bold;
        }
        .page-btn:hover:not(.active) { background: #f0f0f0; }

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

        @media (max-width: 768px) {
            .container { flex-direction: column; }
            .sidebar, .news-grid-container { width: 100%; }
            .news-grid { grid-template-columns: 1fr; }
            .footer-col { width: 100%; }
        }
    </style>
</head>
<body>

    <nav class="top-nav">
        <a href="index.php">
            <span>🏠</span> Home
        </a>
        <span style="color: rgba(255,255,255,0.3); margin: 0 15px;">|</span>
        <span style="color: white; font-size: 14px; opacity: 0.7;">News</span>
    </nav>

    <header class="news-header">
        <div>
            <h1>News</h1>
            <p>Yuk cek apa saja berita up to date yang ada di LP3I saat ini!</p>
        </div>
    </header>

    <div class="container">
        <aside class="sidebar">
            <div class="category-box">
                <h3>Kategori</h3>
                <ul>
                    <li>Info LP3I</li>
                    <li>Pendidikan Vokasi & Dunia Kerja</li>
                    <li>Pengembangan Diri & Skill</li>
                    <li>Live At LP3I</li>
                    <li>News</li>
                </ul>
            </div>
        </aside>

        <main class="news-grid-container">
            <div class="news-grid">
                <div class="news-card">
                    <a href="peran_penting.php"> <img src="peran penting.png" alt="Berita"></a>
                   
                    <div class="news-content">
                        <div class="news-date">📅September 24, 2021 | 👤admin_DLY</div>
                        <a href="peran_penting.php"><h2 class="news-title">Peran Penting Pendidikan Vokasi di Dunia Industri</h2></a>
                    </div>
                </div>

                <div class="news-card">
                    <a href="vaksin_covid19.php"><img src="covid-19.jpeg" alt="Berita"></a>

                    <div class="news-content">
                        <div class="news-date">📅September 14, 2021 | 👤admin_DLY</div>
                        <a href="vaksin_covid19.php"><h2 class="news-title">Politeknik LP3I Jakarta Kampus Depok Turut Mengadakan Vaksinasi</h2></a>
                    </div>
                </div>

                <div class="news-card">
                    <a href="umkm.php"><img src="UMKM.jpg" alt="Berita"></a>
                    <div class="news-content">
                        <div class="news-date">📅September 24, 2021 | 👤admin_DLY</div>
                        <a href="umkm.php"><h2 class="news-title">LP3I Gelar Pelatihan UMKM Binaan Rumah Entrepreneur</h2></a>
                    </div>
                </div>

                <div class="news-card">
                    <a href="snmptn.php"> <img src="snmptn.jpg" alt="Berita"></a>
                    <div class="news-content">
                        <div class="news-date">📅April 12, 2021 | 👤admin_DLY</div>
                        <a href="snmptn.php"><h2 class="news-title">LP3I Berbagi Paket Prokes untuk Pejuang SBMPTN, SNMPTN dan UMP – Mandiri tahun 2021</h2></a>
                    </div>
                </div>
            </div>

            <div class="pagination">
                <a href="berita.php" class="page-btn active">1</a>
                <a href="berita2.php" class="page-btn">2</a>
                <a href="#" class="page-btn">Older posts</a>
            </div>
        </main>
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
            <h4>Telusuri</h4>
            <ul>
                <li><a href="#">Pendaftaran Mahasiswa Baru</a></li>
                <li><a href="#">Program Studi LP3I</a></li>
                <li><a href="#">Tentang LP3I College</a></li>
                <li><a href="#">Tentang Politeknik LP3I</a></li>
            </ul>
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