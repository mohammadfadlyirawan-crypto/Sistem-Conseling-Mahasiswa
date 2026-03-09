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
        <img src="peran penting.png" alt="Ngopi Bengkulu">

        <div class="meta">
            📅 September 24, 2021 | 👤 admin_DLY
        </div>

        <h1>Peran Penting Pendidikan Vokasi di Dunia Industri</h1>

        <p>
        Pada program siaran Ngobrol (Ngobrol Pagi) Khas Bengkulu yang secara langsung disiarkan di stasiun BETV Bengkulu, membahas mengenai pentingnya pendidikan vokasi di dunia industri.
        </p>
        <img src="ngobrol.png" alt="">
        <p>
       Menghadirkan Drs. Jaenudin Ahmad, S.E,M.M.,M.Pd. selaku ketua yayasan AAMP (Akademi Akuntansi Manajemen Pembangunan) Jakarta dan Lufti Aziz, S.E., Ak. selaku Direktur AAMP Bengkulu dan Branch Manager LP3I Bengkulu.
        </p>

        <p>
       Di siaran ini, Ketua Yayasan AAMP Jakarta Drs. Jaenudin Ahmad, S.E,M.M.,M.Pd. mengatakan:
        </p>
        <p>
            “Saya sangat berharap pendidikan vokasi akan terus diasah untuk meningkatkan keterampilan setiap individu generasi muda. Karena pendidikannya berorientasi kepada skill dan kreativitas, maka yang benar-benar di asah adalah dari aspek skill attitude dan dari karakter knowledgenya. Jadi mudah-mudahan ini adalah solusi pasti untuk negeri kita”, ujar Jaenudin Ahmad.
        </p>
        <img src="ngobrol2.png" alt="">
        <p>
            Hal ini diperkuat bahwa pada era sekarang, pendidikan yang berorientasi skill dan kreativitas diperlukan serta dibutuhkan oleh bangsa ini untuk dapat bersaing di dunia industri.
        </p>
        <p>
            Sebagai informasi, pendidikan berbasis vokasi memiliki perbedaan dengan pendidikan berbasis akademik. Ini juga disampaikan langsung oleh Direktur AAMP Bengkulu Lufti Aziz, S.E., Ak yang menjelaskan bahwa tujuan dari pendidikan akademik mencetak orang-orang yang menguasai atau mengembangkan ilmu pengetahuan dan teknologi sedangkan pendidikan vokasi adalah mencetak orang yang terampil dan orang yang punya keahlian yang relevan dengan dunia kerja.
        </p>
        <p>
            “Pendidikan vokasi dijadikan solusi karena Indonesia ini butuh sekali tenaga kerja yang terampil dan praktis yang punya kreativitas dan inovasi. Pendidikan vokasi lebih banyak praktiknya daripada teorinya. Mudah-mudahan menjadikan kebijakan seterusnya, sehingga pemerintah konsisten dan berkomitmen untuk mengembangkannya”, ujar Lufti Aziz.
        </p>
        <p>
            Sehingga perbedaan yang terasa jelas bahwa proses dari pendidikan akademik berfokus ke teori sedangkan pendidikan vokasi ke praktiknya.
        </p>
        <p>
            Akademi Akuntansi Manajemen Pembangunan (AAMP) berawal dari LP3I Bengkulu. LP3i Bengkulu didirikan pada tahun 2006 dan sudah banyak meluluskan tenaga-tenaga terampil yang terserap di dunia kerja di Bengkulu. Banyaknya kebutuhan mahasiswa yang ingin melanjutkan ke jenjang yang lebih tinggi, LP3I Bengkulu memberi akomodasi dengan mendirikan Akademi Akuntansi Manajemen Pembangunan.
        </p>
        <p>
            Mengadopsi sistem pendidikan vokasi, AAMP gencar mempersiapkan mahasiswanya untuk bekerja sesuai dengan kebutuhan dunia kerja dan apa yang mahasiswa butuhkan. Namun sebelumnya mahasiswa perlu memiliki kompetensi atas bidangnya, oleh karena itu AAMP mengharuskan mereka untuk mengikuti tes sertifikasi yang menunjukkan bahwa mereka kompeten.
        </p>
        <p>
            Guna mempersiapkan mahasiswa agar kompeten, AAMP memberikan serangkaian solusi cerdas, seperti yang dikatakan Jaenudin Ahmad, “Dosen atau instrukturnya perlu minimal 50%  berasal dari pengajar praktisi yang tersertifikasi kompetensi teknis, memberikan infrastruktur yang mendukung pengembangan mahasiswa, dan menjalin kerja sama dengan pihak-pihak supportif di dunia industri”.
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