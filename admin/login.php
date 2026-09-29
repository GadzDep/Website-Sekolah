<?php
session_start();
require_once __DIR__ . '/../config/database.php';
if (!empty($_SESSION['admin_id'])) { header('Location: index.php'); exit; }
$error='';
if ($_SERVER['REQUEST_METHOD']==='POST') {
    $username=trim($_POST['username']??''); $password=$_POST['password']??'';
    $stmt=$conn->prepare('SELECT id,username,password,nama FROM admins WHERE username=? LIMIT 1');
    $stmt->bind_param('s',$username); $stmt->execute(); $admin=$stmt->get_result()->fetch_assoc();
    if ($admin && password_verify($password,$admin['password'])) {
        session_regenerate_id(true); $_SESSION['admin_id']=$admin['id']; $_SESSION['admin_nama']=$admin['nama']; $_SESSION['csrf']=bin2hex(random_bytes(32)); header('Location: index.php'); exit;
    }
    $error='Username atau password salah.';
}
?>
<!DOCTYPE html><html lang="id"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Login Admin</title><link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"><link rel="stylesheet" href="../css/admin.css?v=20260929"></head><body class="login-body"><div class="login-card"><img src="../assets/logo/logo.webp" alt="Logo"><span>ADMINISTRATOR</span><h1>Login Admin</h1><p>Kelola konten website sekolah dari satu panel.</p><?php if($error): ?><div class="alert error"><?= e($error) ?></div><?php endif; ?><form method="post"><label>Username<input name="username" autocomplete="username" required></label><label>Password<input type="password" name="password" autocomplete="current-password" required></label><button type="submit">Masuk ke Panel</button></form><a href="../index.php" class="back-site">← Kembali ke website</a><div class="login-note">Akun awal: <strong>admin</strong> / <strong>admin123</strong></div></div></body></html>
