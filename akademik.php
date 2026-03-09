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

$tingkat1 = ['1A','1B','1K','1H','1M','1I','1ABI','1BD'];
$tingkat2 = ['2AB','2KA','2HM','2MI','2ABI','2BD'];
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

.navbar{
    background:linear-gradient(90deg,#4e73df,#224abe);
    padding:15px 50px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    color:white;
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
}

.filter-box{
    margin:30px 50px;
    font-weight:600;
}
select{
    padding:6px 10px;
    border-radius:8px;
    border:1px solid #ddd;
}

.section-title{
    margin:30px 50px 10px;
    font-size:22px;
    font-weight:700;
}

.grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:25px;
    margin:20px 50px;
}

.card{
    padding:22px;
    border-radius:20px;
    color:white;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
    transition:.3s;
}
.card:hover{ transform:translateY(-6px); }

.tingkat1{ background:linear-gradient(135deg,#4e73df,#224abe); }
.tingkat2{ background:linear-gradient(135deg,#1cc88a,#13855c); }
.lewat-card{ background:linear-gradient(135deg,#e74a3b,#7b241c); }
.hampir-card{ background:linear-gradient(135deg,#f6c23e,#d68910); }

.progress-container{
    background:rgba(255,255,255,0.3);
    border-radius:20px;
    height:10px;
    margin-top:10px;
}
.progress-bar{
    height:10px;
    border-radius:20px;
}

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
}

footer{
    margin-top:60px;
    background:white;
    padding:25px;
    text-align:center;
}
.footer-copy{ font-size:13px;color:#999; }
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

function salamOtomatis(){
    const jam=new Date().getHours();
    let teks="Selamat Datang";
    if(jam>=5 && jam<12){ teks="Selamat Pagi ☀"; }
    else if(jam>=12 && jam<15){ teks="Selamat Siang 🌤"; }
    else if(jam>=15 && jam<18){ teks="Selamat Sore 🌇"; }
    else{ teks="Selamat Malam 🌙"; }
    document.getElementById("salam").innerHTML=teks;
}

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
                el.innerHTML="❌ Waktu Habis";
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

window.addEventListener("load",function(){
    document.body.classList.add("loaded");
    updateJam();
    salamOtomatis();
    startCountdown();
});
</script>
</head>
<body>

<?php if(isset($_GET['success'])): ?>
<script>alert("Deadline berhasil disimpan!");</script>
<?php endif; ?>

<div class="navbar">
    <div class="nav-left">
        <div>
            <h2 id="salam"></h2>
            <small>Dashboard Guru</small>
        </div>
        <div class="jam" id="jamRealtime"></div>
    </div>
    <a href="logout.php" class="btn-logout" onclick="return confirm('Yakin mau logout?')">Logout</a>
</div>

<div class="filter-box">
    Filter Tingkat :
    <select id="filter" onchange="filterTingkat()">
        <option value="all">Semua</option>
        <option value="tingkat1">Tingkat 1</option>
        <option value="tingkat2">Tingkat 2</option>
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

        $warna_progress="white";
        if($card_status=="lewat-card"){ $warna_progress="#ff6b6b"; }
        elseif($card_status=="hampir-card"){ $warna_progress="#ffe066"; }

        $disabled=($card_status=="lewat-card")?"disabled style='background:gray;cursor:not-allowed;'":"";

        echo "<div class='card $class $card_status'>
                <h3>Kelas $k</h3>
                <p>Total Tugas: <b>$total_tugas</b></p>
                <p class='deadline'>$deadline_text</p>";

        if($notif!=""){
            echo "<div class='notif-box'>$notif</div>";
        }

        echo "<div class='progress-container'>
                <div class='progress-bar' style='width:$progress%;background:$warna_progress'></div>
              </div>";

        if($deadline_attr!=""){
            echo "<div class='countdown' data-deadline='$deadline_attr'></div>";
        }

        echo "<form method='POST'>
                <input type='hidden' name='kelas' value='$k'>
                <input type='datetime-local' name='deadline' required>
                <button type='submit' name='set_deadline' $disabled>Set Deadline</button>
              </form>
              <a class='btn-lihat' href='lihat_tugas.php?kelas=$k'>Lihat Tugas</a>
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

<footer>
    <div>📚 Sistem Informasi Akademik</div>
    <div class="footer-copy">© <?= date("Y") ?> LP3I — All Rights Reserved</div>
</footer>

</body>
</html>