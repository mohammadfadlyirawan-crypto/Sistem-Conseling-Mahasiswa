<?php
session_start();
include "koneksi.php";
date_default_timezone_set("Asia/Jakarta");

if(!isset($_SESSION['guru'])){
    header("Location: login_guru.php");
    exit;
}

/* ========= SIMPAN DEADLINE ========= */
if(isset($_POST['set_deadline'])){
    $kelas = mysqli_real_escape_string($conn,$_POST['kelas']);
    $deadline = date("Y-m-d H:i:s",strtotime($_POST['deadline']));

    $cek = mysqli_query($conn,"SELECT * FROM deadline_kelas WHERE kelas='$kelas'");
    if(mysqli_num_rows($cek)>0){
        mysqli_query($conn,"UPDATE deadline_kelas SET deadline='$deadline' WHERE kelas='$kelas'");
    }else{
        mysqli_query($conn,"INSERT INTO deadline_kelas(kelas,deadline) VALUES('$kelas','$deadline')");
    }

    header("Location: ".$_SERVER['PHP_SELF']."?success=1");
    exit;
}

$tingkat1 = [
    '1 Administrasi Bisnis',
    '1 Komputerisasi Akutansi',
    '1 Hubungan Masyarakat',
    '1 Manajemen Informatika',
    '1 Administrasi Bisnis Internasional',
    '1 Administrasi Bisnis Internasional Karyawan',
    '1 Bisnis Digital'
];

$tingkat2 = [
    '2 Administrasi Bisnis',
    '2 Komputerisasi Akutansi',
    '2 Hubungan Masyarakat',
    '2 Manajemen Informatika',
    '2 Administrasi Bisnis Internasional',
    '2 Administrasi Bisnis Internasional Karyawan',
    '2 Bisnis Digital'
];

$tingkat3 = [
    '3 Administrasi Bisnis',
    '3 Komputerisasi Akutansi',
    '3 Hubungan Masyarakat',
    '3 Manajemen Informatika',
    '3 Administrasi Bisnis Internasional',
    '3 Administrasi Bisnis Internasional Karyawan',
    '3 Bisnis Digital'
];

$tingkat4 = [
    '4 Administrasi Bisnis Internasional',
    '4 Bisnis Digital'
];
?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard Guru</title>

<style>
body{
    margin:0;
    font-family:'Segoe UI',sans-serif;
    background:linear-gradient(135deg,#eef2ff,#f8fbff);
    opacity:0;
    transform:translateY(15px);
    transition:.5s;
}
body.loaded{ opacity:1; transform:translateY(0); }

/* ===== NAVBAR ===== */
.navbar{
    background:linear-gradient(90deg,#4e73df,#224abe);
    padding:15px 50px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    color:white;
    box-shadow:0 4px 15px rgba(0,0,0,.1);
}
.nav-left{
    display:flex;
    align-items:center;
    gap:20px;
}
.jam{
    background:rgba(255,255,255,0.2);
    padding:6px 14px;
    border-radius:20px;
    font-size:13px;
}
.btn-logout{
    background:white;
    color:#224abe;
    padding:7px 15px;
    border-radius:20px;
    text-decoration:none;
    font-weight:600;
    transition:.3s;
}
.btn-logout:hover{
    transform:scale(1.05);
}

/* ===== FILTER ===== */
.filter-box{
    margin:30px 50px;
    font-weight:600;
}
select{
    padding:6px 10px;
    border-radius:8px;
    border:1px solid #ddd;
}

/* ===== SECTION TITLE ===== */
.section-title{
    margin:30px 50px 10px;
    font-size:22px;
    font-weight:700;
    color:#333;
}

/* ===== GRID ===== */
.grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:25px;
    margin:20px 50px;
}

/* ===== CARD ===== */
.card{
    padding:22px;
    border-radius:20px;
    color:white;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
    transition:.3s;
}
.card:hover{
    transform:translateY(-6px);
}

.tingkat1{ 
    background:linear-gradient(135deg,#4e73df,#224abe); 
}

.tingkat2{ 
    background:linear-gradient(135deg,#1cc88a,#13855c); 
}

.tingkat3{ 
    background:linear-gradient(135deg,#a855f7,#7e22ce); 
}

.tingkat4{ 
    background:linear-gradient(135deg,#858796,#5a5c69); 
}
.lewat-card{ background:linear-gradient(135deg,#e74a3b,#7b241c); }
.hampir-card{ background:linear-gradient(135deg,#f6c23e,#d68910); }

.card h3{
    margin-top:0;
    font-size:18px;
}

/* ===== PROGRESS ===== */
.progress-container{
    background:rgba(255,255,255,0.3);
    border-radius:20px;
    height:10px;
    margin-top:10px;
}
.progress-bar{
    height:10px;
    border-radius:20px;
    background:white;
}

/* ===== TEXT ===== */
.deadline{ font-size:13px; margin-top:8px; }
.notif-box{
    margin-top:8px;
    padding:6px;
    border-radius:8px;
    font-size:13px;
    font-weight:bold;
    background:rgba(0,0,0,0.2);
}
.countdown{ margin-top:6px; font-size:13px; }

/* ===== FORM ===== */
input[type="datetime-local"]{
    width:100%;
    padding:6px;
    border:none;
    border-radius:8px;
    margin-top:8px;
}
button{
    margin-top:8px;
    padding:7px;
    border:none;
    border-radius:8px;
    cursor:pointer;
    font-weight:600;
}
.btn-lihat{
    display:inline-block;
    margin-top:10px;
    padding:6px 12px;
    background:white;
    color:#333;
    border-radius:20px;
    text-decoration:none;
    font-weight:600;
    transition:.3s;
}
.btn-lihat:hover{
    transform:scale(1.05);
}

/* ===== FOOTER ===== */
footer{
    margin-top:60px;
    background:white;
    padding:25px;
    text-align:center;
    box-shadow:0 -2px 15px rgba(0,0,0,.05);
}
.footer-copy{ font-size:13px;color:#999; }

@media(max-width:768px){
    .navbar{ padding:15px 20px; }
    .grid{ margin:20px; }
    .section-title{ margin:30px 20px 10px; }
}
</style>

<script>
function updateJam(){
    const now=new Date();
    const hari=now.toLocaleDateString('id-ID',{weekday:'long'});
    const tanggal=now.toLocaleDateString('id-ID');
    const waktu=now.toLocaleTimeString('id-ID');
    document.getElementById("jamRealtime").innerHTML=
        hari+", "+tanggal+" | "+waktu;
}
setInterval(updateJam,1000);

window.addEventListener("load",function(){
    document.body.classList.add("loaded");
    updateJam();
    startCountdown();
});

function filterTingkat(){
    let value=document.getElementById("filter").value;
    let cards=document.querySelectorAll(".card");
    cards.forEach(card=>{
        card.style.display=(value==="all"||card.classList.contains(value))?"block":"none";
    });
}

function startCountdown(){
    setInterval(()=>{
        document.querySelectorAll(".countdown").forEach(el=>{
            let deadline=el.getAttribute("data-deadline");
            if(!deadline) return;
            let diff=new Date(deadline.replace(" ","T"))-new Date();
            if(diff<=0){
                el.innerHTML="⛔ Waktu Habis";
                return;
            }
            let d=Math.floor(diff/(1000*60*60*24));
            let h=Math.floor((diff%(1000*60*60*24))/(1000*60*60));
            let m=Math.floor((diff%(1000*60*60))/(1000*60));
            let s=Math.floor((diff%(1000*60))/1000);
            el.innerHTML="⏳ "+d+"h "+h+"j "+m+"m "+s+"d";
        });
    },1000);
}
</script>
</head>
<body>

<?php if(isset($_GET['success'])): ?>
<script>alert("Deadline berhasil disimpan!");</script>
<?php endif; ?>

<div class="navbar">
    <div class="nav-left">
        <h2>Dashboard Guru</h2>
        <div class="jam" id="jamRealtime"></div>
    </div>
    <a href="logout.php" class="btn-logout">Logout</a>
</div>

<div class="filter-box">
    Filter Tingkat :
    <select id="filter" onchange="filterTingkat()">
        <option value="all">Semua</option>
        <option value="tingkat1">Tingkat 1</option>
        <option value="tingkat2">Tingkat 2</option>
        <option value="tingkat3">Tingkat 3</option>
        <option value="tingkat4">Tingkat 4</option>
    </select>
</div>

<?php
function tampilKelas($conn,$array,$class){
    foreach($array as $k){

        $total_tugas=mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM tugas WHERE kelas='$k'"))['total'];

        $deadline_text="Belum diset";
        $notif="";
        $card_status="";
        $deadline_attr="";
        $progress=0;

        $d=mysqli_query($conn,"SELECT deadline FROM deadline_kelas WHERE kelas='$k'");
        if(mysqli_num_rows($d)>0){
            $deadline_db=mysqli_fetch_assoc($d)['deadline'];
            $deadline_attr=$deadline_db;
            $deadline_time=strtotime($deadline_db);
            $now=time();
            $selisih=$deadline_time-$now;

            if($deadline_time<$now){
                $deadline_text="Sudah lewat";
                $notif="❌ Deadline Terlewat!";
                $card_status="lewat-card";
            }elseif($selisih<=86400){
                $deadline_text="Hampir habis";
                $notif="⚠ Deadline Hampir Habis!";
                $card_status="hampir-card";
            }else{
                $deadline_text=date("d M Y - H:i",$deadline_time);
            }
        }

        if($total_tugas>0){
            $progress=min(100,$total_tugas*10);
        }

        echo "<div class='card $class $card_status'>
        <h3>Prodi $k</h3>
        <p>Conseling Komputerisasi Bisnis: <b>$total_tugas</b></p>
        <p class='deadline'>$deadline_text</p>";

        if($notif!=""){
            echo "<div class='notif-box'>$notif</div>";
        }

        echo "<div class='progress-container'>
                <div class='progress-bar' style='width:$progress%'></div>
              </div>";

        if($deadline_attr!=""){
            echo "<div class='countdown' data-deadline='$deadline_attr'></div>";
        }

        echo "<form method='POST'>
                <input type='hidden' name='kelas' value='$k'>
                <input type='datetime-local' name='deadline' required>
                <button type='submit' name='set_deadline'>Set Deadline</button>
              </form>
            <a class='btn-lihat' href='lihat_tugas.php?kelas=$k'>Lihat Laporan</a>
              </div>";
    }
}
?>

<div class="section-title">TINGKAT 1</div>
<div class="grid">
<?php tampilKelas($conn,$tingkat1,"tingkat1"); ?>
</div>

<div class="section-title">TINGKAT 2</div>
<div class="grid">
<?php tampilKelas($conn,$tingkat2,"tingkat2"); ?>
</div>
<div class="section-title">TINGKAT 3</div>
<div class="grid">
<?php tampilKelas($conn,$tingkat3,"tingkat3"); ?>
</div>
<div class="section-title">TINGKAT 4</div>
<div class="grid">
<?php tampilKelas($conn,$tingkat4,"tingkat4"); ?>
</div>
<footer>
    <div>📚 Sistem Informasi Akademik</div>
    <div class="footer-copy">© <?= date("Y") ?> LP3I — All Rights Reserved</div>
</footer>

</body>
</html>