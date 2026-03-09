<?php
session_start();
include 'koneksi.php';

$error = "";

if(isset($_POST['login'])){

    $user = htmlspecialchars($_POST['username']);
    $pass = md5($_POST['password']);

    $stmt = $conn->prepare("SELECT * FROM guru WHERE username=? AND password=?");
    $stmt->bind_param("ss",$user,$pass);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        $_SESSION['guru'] = $user;
        header("Location: dashboard_guru.php");
        exit;
    }else{
        $error = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login Guru - LP3I</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:#f1f3f6;
}

.card{
    width:370px;
    background:#fff;
    padding:35px;
    border-radius:10px;
    box-shadow:0 10px 30px rgba(0,0,0,0.1);
    text-align:center;
}

/* HEADER LOGO + TEXT */
.header{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:10px;
    margin-bottom:10px;
}

.header img{
    width:2700px;
    height:100px;
}

.header h1{
    font-size:24px;
    color:#3498db;
}

.subtitle{
    font-size:13px;
    color:#777;
    margin-bottom:25px;
}

h2{
    margin-bottom:20px;
    color:#333;
}

input{
    width:100%;
    padding:12px;
    margin-bottom:15px;
    border-radius:5px;
    border:1px solid #ccc;
    font-size:14px;
}

input:focus{
    border-color:#3498db;
    outline:none;
    box-shadow:0 0 5px rgba(52,152,219,0.4);
}

button{
    width:100%;
    padding:12px;
    background:#3b7bbf;
    border:none;
    color:white;
    font-weight:bold;
    border-radius:5px;
    cursor:pointer;
}

button:hover{
    background:#2d5f94;
}

.error{
    background:#f8d7da;
    color:#721c24;
    padding:10px;
    margin-bottom:15px;
    border-radius:5px;
    font-size:14px;
}

</style>
</head>

<body>

<div class="card">

    <!-- LOGO + TEXT -->
    <div class="header">
        <img src="dl.png" alt="Logo LP3I">
        
    </div>

    <div class="subtitle">Counseling Tracking System (CTS)</div>

    <h2>Sistem Conseling Mahasiswa</h2>

    <?php if($error != ""): ?>
        <div class="error"><?= $error; ?></div>
    <?php endif; ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">LOGIN</button>
    </form>

</div>

</body>
</html>

