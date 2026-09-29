<?php
// Tentukan path dinamis berdasarkan lokasi file yang memanggil
$base_url = (basename($_SERVER['PHP_SELF']) === 'index.php') ? '' : '../';

// Deteksi nama file halaman yang sedang diakses saat ini
$current_page = basename($_SERVER['PHP_SELF']);

// Kumpulan daftar halaman untuk masing-masing dropdown menu
$pages_profil   = ['profil-sekolah.php', 'sejarah.php', 'visi-misi.php', 'guru.php', 'fasilitas.php', 'program-keahlian.php'];
$pages_akademik = ['kurikulum.php', 'kalender.php', 'ekstrakurikuler.php', 'kegiatan-belajar.php'];
$pages_kesiswaan = ['osis.php', 'galeri.php', 'prestasi.php'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Resmi Sekolah</title>
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/common.css?v=20260923">
    <?php
    $page_css = [
        'index.php' => ['home.css'],
        'sejarah.php' => ['sejarah.css'],
        'visi-misi.php' => ['visi-misi.css'],
        'guru.php' => ['guru.css'],
        'fasilitas.php' => ['fasilitas.css'],
        'program-keahlian.php' => ['program-keahlian.css'],
        'kurikulum.php' => ['kurikulum.css'],
        'kalender.php' => ['kalender.css'],
        'ekstrakurikuler.php' => ['ekstrakurikuler.css'],
        'kegiatan-belajar.php' => ['kegiatan-belajar.css'],
        'osis.php' => ['osis.css'],
        'galeri.php' => ['galeri.css'],
        'prestasi.php' => ['prestasi.css'],
        'informasi.php' => ['informasi.css'],
        'kontak.php' => ['kontak.css'],
        'profil-sekolah.php' => [],
    ];
    foreach (($page_css[$current_page] ?? []) as $stylesheet) {
        echo '<link rel="stylesheet" href="' . $base_url . 'css/' . htmlspecialchars($stylesheet, ENT_QUOTES, 'UTF-8') . '?v=20260923">';
    }
    ?>
</head>
<body>

<header>
    <div class="nav-container">
        <!-- Logo & Nama Sekolah -->
        <a href="<?php echo $base_url; ?>index.php" class="logo-area">
            <img src="<?php echo $base_url; ?>assets/logo/logo.webp" alt="Logo Sekolah" class="logo-img">
            <div class="logo-text">
                <h2>SMK Negeri 1 Bandung</h2>
                <p>Unggul dalam Prestasi, Berkarakter, dan Siap Kerja</p>
            </div>
        </a>

        <!-- Navigasi Menu -->
        <ul class="navbar">
            <!-- Beranda -->
            <li class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
                <a href="<?php echo $base_url; ?>index.php">Beranda</a>
            </li>
            
            <!-- Profil -->
            <li class="dropdown <?php echo (in_array($current_page, $pages_profil)) ? 'active' : ''; ?>">
                <a href="#">Profil <span class="arrow-down">▼</span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo $base_url; ?>pages/profil-sekolah.php">Profil Sekolah</a></li>
                    <li><a href="<?php echo $base_url; ?>pages/sejarah.php">Sejarah Singkat Sekolah</a></li>
                    <li><a href="<?php echo $base_url; ?>pages/visi-misi.php">Visi dan Misi</a></li>
                    <li><a href="<?php echo $base_url; ?>pages/guru.php">Data Guru & Tendik</a></li>
                    <li><a href="<?php echo $base_url; ?>pages/fasilitas.php">Fasilitas Sekolah</a></li>
                    <li><a href="<?php echo $base_url; ?>pages/program-keahlian.php">Program Keahlian</a></li>
                </ul>
            </li>

            <!-- Akademik -->
            <li class="dropdown <?php echo (in_array($current_page, $pages_akademik)) ? 'active' : ''; ?>">
                <a href="#">Akademik <span class="arrow-down">▼</span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo $base_url; ?>pages/kurikulum.php">Kurikulum yang Digunakan</a></li>
                    <li><a href="<?php echo $base_url; ?>pages/kalender.php">Kalender Akademik</a></li>
                    <li><a href="<?php echo $base_url; ?>pages/ekstrakurikuler.php">Ekstrakurikuler</a></li>
                    <li><a href="<?php echo $base_url; ?>pages/kegiatan-belajar.php">Kegiatan Belajar</a></li>
                </ul>
            </li>

            <!-- Kesiswaan -->
            <li class="dropdown <?php echo (in_array($current_page, $pages_kesiswaan)) ? 'active' : ''; ?>">
                <a href="#">Kesiswaan <span class="arrow-down">▼</span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo $base_url; ?>pages/osis.php">Informasi OSIS & MPK</a></li>
                    <li><a href="<?php echo $base_url; ?>pages/galeri.php">Galeri Kegiatan</a></li>
                    <li><a href="<?php echo $base_url; ?>pages/prestasi.php">Prestasi Siswa</a></li>
                </ul>
            </li>

            <!-- Informasi -->
            <li class="<?php echo ($current_page == 'informasi.php') ? 'active' : ''; ?>">
                <a href="<?php echo $base_url; ?>pages/informasi.php">Informasi</a>
            </li>

            <!-- Kontak -->
            <li class="<?php echo ($current_page == 'kontak.php') ? 'active' : ''; ?>">
                <a href="<?php echo $base_url; ?>pages/kontak.php">Kontak</a>
            </li>
        </ul>
    </div>
</header>