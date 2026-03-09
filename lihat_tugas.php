<?php 
session_start(); 
include 'koneksi.php';  

/* HAPUS TERPILIH */
if(isset($_POST['hapus_terpilih'])){

    if(!empty($_POST['hapus'])){

        foreach($_POST['hapus'] as $id){

            $id = mysqli_real_escape_string($conn,$id);

            $get = mysqli_query($conn,"SELECT file FROM tugas WHERE id='$id'");
            $data = mysqli_fetch_assoc($get);

            if($data){
                $path = "upload/".$data['file'];
                if(file_exists($path)){
                    unlink($path);
                }
            }

            mysqli_query($conn,"DELETE FROM nilai WHERE tugas_id='$id'");
            mysqli_query($conn,"DELETE FROM tugas WHERE id='$id'");
        }
    }

    header("Location: lihat_tugas.php?kelas=".$_GET['kelas']);
    exit;
}

/* CEK LOGIN */
if(!isset($_SESSION['guru'])){
    header("Location: login_guru.php");
    exit;
}

if(!isset($_GET['kelas'])){
    header("Location: dashboard_guru.php");
    exit;
}

$kelas = mysqli_real_escape_string($conn, $_GET['kelas']);
$search = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';

/* QUERY */
$sql = "
SELECT tugas.*, nilai.komentar
FROM tugas
LEFT JOIN nilai ON tugas.id = nilai.tugas_id
WHERE tugas.kelas='$kelas'
";

if($search != ''){
    $sql .= " AND (
        tugas.nama LIKE '%$search%' OR
        tugas.nim LIKE '%$search%' OR
        tugas.topik LIKE '%$search%' OR
        tugas.masalah LIKE '%$search%' OR
        tugas.solusi LIKE '%$search%' OR
        DATE_FORMAT(tugas.tanggal,'%d-%m-%Y') LIKE '%$search%' OR
        DATE_FORMAT(tugas.tanggal,'%Y-%m-%d') LIKE '%$search%'
    )";
}

$sql .= " ORDER BY tugas.id DESC";
$query = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Data Konseling <?= $kelas ?></title>

<script src="https://cdn.jsdelivr.net/npm/xlsx/dist/xlsx.full.min.js"></script>

<style>

body{
font-family:'Segoe UI',sans-serif;
margin:0;
background: linear-gradient(135deg,#667eea,#764ba2);
}

.container{
width:95%;
margin:40px auto;
background:white;
padding:30px;
border-radius:20px;
box-shadow:0 20px 50px rgba(0,0,0,0.2);
}

h2{margin-top:0;color:#333}

.top-bar{
display:flex;
justify-content:space-between;
align-items:center;
flex-wrap:wrap;
gap:10px;
}

.search-box{
display:flex;
gap:10px;
}

.search-box input{
padding:10px 15px;
border-radius:30px;
border:1px solid #ccc;
outline:none;
width:250px;
}

.search-box button{
padding:10px 18px;
border:none;
border-radius:30px;
background:#4e73df;
color:white;
cursor:pointer;
}

.back{
padding:10px 20px;
background:#4e73df;
color:white;
text-decoration:none;
border-radius:30px;
}

table{
width:100%;
border-collapse:collapse;
margin-top:20px;
}

th{
background:#4e73df;
color:white;
padding:12px;
}

td{
padding:12px;
border-bottom:1px solid #eee;
font-size:14px;
}

tr:hover{background:#f8f9fc}

.btn{
padding:6px 12px;
color:white;
text-decoration:none;
border-radius:20px;
font-size:12px;
}

.download{background:#1cc88a}
.delete{background:#e74a3b}
.nilai-btn{background:#36b9cc}

.preview-link{
color:#4e73df;
font-weight:bold;
}

.modal{
display:none;
position:fixed;
z-index:9999;
left:0;
top:0;
width:100%;
height:100%;
background:rgba(0,0,0,0.7);
}

.modal-content{
background:#fff;
margin:5% auto;
padding:20px;
width:90%;
max-height:85%;
overflow:auto;
border-radius:15px;
}

.close{
float:right;
font-size:28px;
cursor:pointer;
}

.hapus-terpilih{
background:#e74a3b;
color:white;
border:none;
padding:10px 20px;
border-radius:30px;
cursor:pointer;
}

.hapus-terpilih:hover{
background:#c0392b;
}

td:last-child {
white-space: nowrap;
}

td:last-child .btn {
display: inline-block;
margin: 3px 2px;
}

.table-wrapper{
overflow-x:auto;
}

</style>
</head>

<body>

<div class="container">

<div class="top-bar">

<a class="back" href="dashboard_guru.php">← Kembali</a>

<form method="GET" class="search-box">
<input type="hidden" name="kelas" value="<?= $kelas ?>">
<input type="text" name="search" placeholder="Cari nama, NIM, topik..." value="<?= $search ?>">
<button type="submit">Search</button>
</form>

</div>

<h2>📚 Data Konseling Kelas <?= $kelas ?></h2>

<div class="table-wrapper">

<form method="POST" onsubmit="return confirm('Hapus data yang dipilih?')">

<table>

<tr>
<th><input type="checkbox" id="checkAll"></th>
<th>Nama</th>
<th>NIM</th>
<th>Topik Konseling</th>
<th>Masalah</th>
<th>Tanggal Konseling</th>
<th>Solusi</th>
<th>File</th>
<th>Komentar</th>
<th>Aksi</th>
</tr>

<?php while($row = mysqli_fetch_assoc($query)): ?>

<tr>

<td>
<input type="checkbox" name="hapus[]" value="<?= $row['id'] ?>" class="checkItem">
</td>

<td><?= $row['nama'] ?></td>
<td><?= $row['nim'] ?></td>
<td><?= $row['topik'] ?></td>
<td><?= $row['masalah'] ?></td>
<td><?= date('d-m-Y', strtotime($row['tanggal'])) ?></td>
<td><?= $row['solusi'] ?></td>

<td>

<?php $ext = strtolower(pathinfo($row['file'], PATHINFO_EXTENSION)); ?>

<a href="javascript:void(0)" 
class="preview-link"
onclick="previewFile('<?= $row['file'] ?>','<?= $ext ?>')">
<?= $row['file'] ?>
</a>

<br><br>

<a class="btn download" href="upload/<?= $row['file'] ?>" download>
Download
</a>

</td>

<td>
<?= $row['komentar'] ? $row['komentar'] : '-' ?>
</td>

<td>
<a class="btn nilai-btn" href="nilai.php?id=<?= $row['id'] ?>">Komentar</a>
<a class="btn delete" href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
</td>

</tr>

<?php endwhile; ?>

</table>

<br>

<button type="submit" name="hapus_terpilih" class="hapus-terpilih">
🗑 Hapus Terpilih
</button>

</form>

</div>

<div id="previewModal" class="modal">
<div class="modal-content">
<span class="close" onclick="closeModal()">&times;</span>
<div id="previewArea"></div>
</div>
</div>

</div>

<script>

const checkAll = document.getElementById("checkAll");

if(checkAll){
checkAll.addEventListener("click",function(){

let items = document.querySelectorAll(".checkItem");

items.forEach(i=>{
i.checked = checkAll.checked;
});

});
}

const searchInput = document.querySelector("input[name='search']");

if(searchInput){
searchInput.addEventListener("input",function(){
if(this.value.trim() === ""){
window.location.href = "lihat_tugas.php?kelas=<?= $kelas ?>";
}
});
}

function previewFile(file,ext){

let modal = document.getElementById("previewModal");
let area = document.getElementById("previewArea");

area.innerHTML="";
modal.style.display="block";

if(["jpg","jpeg","png","gif","webp"].includes(ext)){
area.innerHTML=`<img src="upload/${file}" style="max-width:100%">`;
}

else if(ext==="pdf"){
area.innerHTML=`<iframe src="upload/${file}" width="100%" height="600px"></iframe>`;
}

else if(["xls","xlsx","csv"].includes(ext)){

fetch("upload/"+file)
.then(res=>res.arrayBuffer())
.then(data=>{

let workbook=XLSX.read(data,{type:"array"});
let sheet=workbook.Sheets[workbook.SheetNames[0]];
let html=XLSX.utils.sheet_to_html(sheet);

area.innerHTML=html;

})
.catch(()=>{
area.innerHTML="Gagal membuka file.";
});

}

else{
area.innerHTML="Format tidak didukung.";
}

}

function closeModal(){
document.getElementById("previewModal").style.display="none";
}

window.onclick=function(e){
let modal=document.getElementById("previewModal");
if(e.target==modal){
modal.style.display="none";
}
}

</script>

</body>
</html>