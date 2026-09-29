<?php
require_once __DIR__ . '/../config/auth.php';
admin_login_required();
$current_admin = $_SESSION['admin_nama'] ?? 'Administrator';
$module = $_GET['modul'] ?? '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Sekolah</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/admin.css?v=20260929">
</head>
<body class="admin-body">
<div class="admin-shell">
<aside class="admin-sidebar">
    <a class="admin-brand" href="index.php"><img src="../assets/logo/logo.webp" alt="Logo"><span>Admin Sekolah<small>SMKN 1 Bandung</small></span></a>
    <nav class="admin-nav">
        <a class="<?= $module === '' ? 'active' : '' ?>" href="index.php">Dashboard</a>
        <div class="nav-label">PROFIL</div>
        <a class="<?= $module === 'profil' ? 'active' : '' ?>" href="kelola.php?modul=profil">Profil Sekolah</a>
        <a class="<?= $module === 'statistik' ? 'active' : '' ?>" href="kelola.php?modul=statistik">Statistik Sekolah</a>
        <a class="<?= $module === 'guru' ? 'active' : '' ?>" href="kelola.php?modul=guru">Data Guru & Tendik</a>
        <a class="<?= $module === 'program' ? 'active' : '' ?>" href="kelola.php?modul=program">Program Keahlian</a>
        <a class="<?= $module === 'fasilitas' ? 'active' : '' ?>" href="kelola.php?modul=fasilitas">Fasilitas</a>
        <div class="nav-label">KONTEN</div>
        <a class="<?= $module === 'pengumuman' ? 'active' : '' ?>" href="kelola.php?modul=pengumuman">Pengumuman</a>
        <a class="<?= $module === 'berita' ? 'active' : '' ?>" href="kelola.php?modul=berita">Berita</a>
        <a class="<?= $module === 'agenda' ? 'active' : '' ?>" href="kelola.php?modul=agenda">Agenda</a>
        <a class="<?= $module === 'galeri' ? 'active' : '' ?>" href="kelola.php?modul=galeri">Galeri Kegiatan</a>
        <a class="<?= $module === 'prestasi' ? 'active' : '' ?>" href="kelola.php?modul=prestasi">Prestasi Siswa</a>
    </nav>
    <div class="admin-sidebar-bottom"><a href="../index.php" target="_blank" rel="noopener">Lihat Website ↗</a><a href="./logout.php">Logout</a></div>
</aside>
<main class="admin-main">
<header class="admin-topbar"><div><span>Panel Admin</span><h1><?= e($page_title ?? 'Dashboard') ?></h1></div><div class="admin-user"><?= e($current_admin) ?></div></header>
<div class="admin-content">
