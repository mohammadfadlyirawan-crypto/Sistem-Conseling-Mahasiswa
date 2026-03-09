<?php
include 'koneksi.php';

date_default_timezone_set("Asia/Jakarta"); // penting!

if(isset($_POST['simpan'])){

    $kelas = mysqli_real_escape_string($conn, $_POST['kelas']);
    $deadline_input = $_POST['deadline'];

    // ubah format datetime-local ke format MySQL
    $deadline = date("Y-m-d H:i:s", strtotime($deadline_input));

    // cek apakah kelas sudah ada
    $cek = mysqli_query($conn, "SELECT * FROM deadline_kelas WHERE kelas='$kelas'");
    
    if(mysqli_num_rows($cek) > 0){
        mysqli_query($conn, "UPDATE deadline_kelas SET deadline='$deadline' WHERE kelas='$kelas'");
    } else {
        mysqli_query($conn, "INSERT INTO deadline_kelas (kelas, deadline) VALUES ('$kelas','$deadline')");
    }

    echo "<script>alert('Deadline berhasil disimpan'); window.location.href='';</script>";
}
?>


<h2>Set Deadline Tugas</h2>

<form method="POST">
    <select name="kelas" required>
        <option value="">-- Pilih Kelas --</option>
        <option value="TI-1A">TI-1A</option>
        <option value="TI-1B">TI-1B</option>
        <option value="TI-2A">TI-2A</option>
        <option value="TI-2B">TI-2B</option>
        <option value="AK-1A">AK-1A</option>
        <option value="ADM-1B">ADM-1B</option>
    </select><br><br>

    <input type="datetime-local" name="deadline" required><br><br>

    <button type="submit" name="simpan">Simpan Deadline</button>
</form>
