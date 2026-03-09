<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News - LP3I Official (Halaman 2)</title>
    <style>
        /* ================= CSS GLOBAL ================= */
        body { 
            font-family: 'Segoe UI', Tahoma, sans-serif; 
            margin: 0; 
            background-color: #f8f9fa; 
            color: #333; 
        }
        a { text-decoration: none; color: inherit; }

        /* ================= NAVBAR HOME (Pojok Kiri Atas) ================= */
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

        /* ================= HEADER & BANNER ================= */
        .news-banner {
            background: linear-gradient(rgba(15, 43, 107, 0.7), rgba(15, 43, 107, 0.7)), 
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
        .news-banner h1 { font-size: 40px; margin: 0; }
        .news-banner p { font-size: 18px; opacity: 0.9; margin-top: 10px; }

        /* ================= LAYOUT UTAMA ================= */
        .main-container { 
            display: flex; 
            max-width: 1200px; 
            margin: 50px auto; 
            gap: 30px; 
            padding: 0 20px; 
        }

        /* SIDEBAR KATEGORI */
        .sidebar { width: 250px; flex-shrink: 0; }
        .category-card { 
            background: white; 
            padding: 25px; 
            border-radius: 12px; 
            box-shadow: 0 4px 15px rgba(0,0,0,0.05); 
        }
        .category-card h3 { 
            font-size: 18px; 
            border-bottom: 2px solid #eee; 
            padding-bottom: 10px; 
            margin-top: 0; 
            color: #0f2b6b;
        }
        .category-card ul { list-style: none; padding: 0; margin: 0; }
        .category-card li { 
            padding: 12px 0; 
            border-bottom: 1px solid #f9f9f9; 
            color: #666; 
            font-size: 14px;
            cursor: pointer; 
            transition: 0.3s;
        }
        .category-card li:hover { color: #1e4db7; padding-left: 5px; }

        /* GRID BERITA */
        .news-section { flex-grow: 1; }
        .news-grid { 
            display: grid; 
            grid-template-columns: repeat(2, 1fr); 
            gap: 25px; 
        }
        .news-item { 
            background: white; 
            border-radius: 12px; 
            overflow: hidden; 
            box-shadow: 0 4px 12px rgba(0,0,0,0.08); 
            transition: 0.3s; 
        }
        .news-item:hover { transform: translateY(-5px); }
        .news-image { width: 100%; height: 200px; object-fit: cover; }
        .news-info { padding: 20px; }
        .news-meta { font-size: 12px; color: #999; margin-bottom: 10px; }
        .news-title { 
            font-size: 16px; 
            font-weight: bold; 
            color: #0f2b6b; 
            line-height: 1.5;
            margin: 0; 
        }

        /* PAGINATION (Aktif di Angka 2) */
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
            border-radius: 4px; 
            color: #333; 
            font-size: 14px;
            transition: 0.3s;
        }
        /* Biru pindah ke angka 2 */
        .page-btn.active { 
            background: #0f2b6b; 
            color: white; 
            border-color: #0f2b6b; 
            pointer-events: none; 
        }
        .page-btn:hover:not(.active) { background: #f0f0f0; }

        /* ================= FOOTER ================= */
        .footer-dark { 
            background: linear-gradient(90deg,blue,#1e4db7,#0f2b6b);; 
            color: white; 
            padding: 60px 0 30px; 
            margin-top: 50px;
        }
        .footer-container { 
            max-width: 1200px; 
            margin: 0 auto; 
            display: flex; 
            justify-content: space-between; 
            padding: 0 20px; 
            flex-wrap: wrap; 
        }
        .footer-col { width: 30%; margin-bottom: 30px; }
        
        /* Logo Footer Perbaikan */
        .footer-logo { 
            max-width: 300px; 
            height: auto; 
            margin-bottom: 20px;
            display: block;
        }
        .footer-col h4 { color: #f39c12; margin-bottom: 25px; font-size: 18px; }
        .footer-col ul { list-style: none; padding: 0; }
        .footer-col li { margin-bottom: 12px; font-size: 14px; opacity: 0.8; line-height: 1.6; }
        .footer-col a:hover { color: #f39c12; }

        .social-links { display: flex; gap: 12px; margin-top: 20px; }
        .social-icon { 
            width: 35px; 
            height: 35px; 
            background: rgba(255,255,255,0.1); 
            border-radius: 50%; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            font-size: 14px;
            transition: 0.3s;
        }
        .social-icon:hover { background: #f39c12; }

        @media (max-width: 768px) {
            .main-container { flex-direction: column; }
            .sidebar { width: 100%; }
            .news-grid { grid-template-columns: 1fr; }
            .footer-col { width: 100%; }
        }
    </style>
</head>
<body>

    <nav class="top-nav">
        <a href="index.php">🏠 Home</a>
        <span style="color: white; opacity: 0.3; margin: 0 15px;">|</span>
        <span style="color: white; opacity: 0.7; font-size: 14px;">News - Page 2</span>
    </nav>

    <header class="news-banner">
        <div>
            <h1>News</h1>
            <p>Menampilkan berita terbaru di halaman kedua</p>
        </div>
    </header>

    <div class="main-container">
        <aside class="sidebar">
            <div class="category-card">
                <h3>Kategori</h3>
                <ul>
                    <li>Info LP3I</li>
                    <li>Pendidikan Vokasi & Dunia Kerja</li>
                    <li>Pengembangan Diri & Skill</li>
                    <li>Live At LP3I</li>
                    <li>News</li>
                    <li>Trending</li>
                </ul>
            </div>
        </aside>

        <main class="news-section">
    <div class="news-grid">

        <article class="news-item">

            <a href="beasiswa.php">
                <img src="beasiswa.png" class="news-image" alt="Berita">
            </a>

            <div class="news-info">
                <div class="news-meta">📅April 09, 2025 | 👤admin_DLY</div>

                <h2 class="news-title">
                    <a href="beasiswa.php">
                        Beasiswa LP3I Untuk Milangkala Karawang Tahun Akademik 2023/2024
                    </a>
                </h2>
            </div>

        </article>


        <article class="news-item">

            <a href="korbangempa.php">
                <img src="gempa.jpg" class="news-image" alt="Berita">
            </a>

            <div class="news-info">
                <div class="news-meta">📅December 5, 2022May 19, 2025 | 👤admin_DLY</div>

                <h2 class="news-title">
                    <a href="korbangempa.php">
                        Bersatu dalam Empati, Keluarga Besar LP3I Turut Serta dalam Membantu Korban Gempa Cianjur
                    </a>
                </h2>
            </div>

        </article>

    </div>

    <div class="pagination">
        <a href="berita.php" class="page-btn">1</a>
        <a href="berita2.php" class="page-btn active">2</a> 
        <a href="#" class="page-btn">Older posts</a>
    </div>
</main>
</div>
    <footer class="footer-dark">
        <div class="footer-container">
            <div class="footer-col">
                 <img src="dl.png" alt="LP3I Logo" class="footer-logo" onerror="this.src='https://via.placeholder.com/150x50?text=Logo+LP3I'">
                <div class="social-links">
                    <div class="social-icon">f</div>
                    <div class="social-icon">ig</div>
                    <div class="social-icon">in</div>
                    <div class="social-icon">yt</div>
                </div>
            </div>

            <div class="footer-col">
                <h4>Telusuri</h4>
                <ul>
                    <li><a href="#">Pendaftaran Mahasiswa</a></li>
                    <li><a href="#">Program Studi</a></li>
                    <li><a href="#">Tentang LP3I</a></li>
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