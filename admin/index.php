<?php
require_once __DIR__ . '/../config/auth.php';
admin_login_required();
$page_title = 'Dashboard';

$items = [
    ['table'=>'guru', 'label'=>'Guru & Tendik', 'module'=>'guru', 'icon'=>'GT'],
    ['table'=>'program_keahlian', 'label'=>'Program Keahlian', 'module'=>'program', 'icon'=>'PK'],
    ['table'=>'fasilitas', 'label'=>'Fasilitas', 'module'=>'fasilitas', 'icon'=>'FS'],
    ['table'=>'pengumuman', 'label'=>'Pengumuman', 'module'=>'pengumuman', 'icon'=>'PG'],
    ['table'=>'berita', 'label'=>'Berita', 'module'=>'berita', 'icon'=>'BR'],
    ['table'=>'agenda', 'label'=>'Agenda', 'module'=>'agenda', 'icon'=>'AG'],
    ['table'=>'galeri', 'label'=>'Galeri Kegiatan', 'module'=>'galeri', 'icon'=>'GK'],
    ['table'=>'prestasi', 'label'=>'Prestasi Siswa', 'module'=>'prestasi', 'icon'=>'PS'],
];

$counts = [];
foreach ($items as $item) {
    $res = $conn->query("SELECT COUNT(*) AS c FROM `{$item['table']}`");
    $counts[$item['module']] = (int)($res->fetch_assoc()['c'] ?? 0);
}

$guru = $counts['guru'];
$program = $counts['program'];
$berita = $counts['berita'];
$galeri = $counts['galeri'];
$totalKonten = $counts['pengumuman'] + $counts['berita'] + $counts['agenda'] + $counts['galeri'] + $counts['prestasi'];

require __DIR__ . '/_layout_top.php';
?>

<section class="dashboard-hero">
    <div class="dashboard-hero-copy">
        <span class="eyebrow">DASHBOARD ADMIN</span>
        <h2>Selamat datang, <?= e($current_admin) ?>.</h2>
        <p>Kelola data sekolah dari satu tempat. Perubahan pada data yang terhubung database akan langsung digunakan oleh website.</p>
        <div class="dashboard-hero-actions">
            <a class="dashboard-btn dashboard-btn-primary" href="kelola.php?modul=berita">Kelola Berita</a>
            <a class="dashboard-btn dashboard-btn-light" href="../index.php" target="_blank" rel="noopener">Lihat Website <span>↗</span></a>
        </div>
    </div>
    <div class="dashboard-hero-badge">
        <div class="status-dot"></div>
        <strong>Database aktif</strong>
        <span>Panel siap digunakan</span>
    </div>
</section>

<section class="dashboard-section">
    <div class="section-heading-admin">
        <div>
            <span class="eyebrow">RINGKASAN DATA</span>
            <h2>Ikhtisar Website</h2>
        </div>
        <span class="section-note">Data diperbarui dari database</span>
    </div>

    <div class="dashboard-stats">
        <a class="dashboard-stat stat-purple" href="kelola.php?modul=guru">
            <span class="stat-icon">GT</span>
            <span class="stat-label">Guru & Tendik</span>
            <strong><?= $guru ?></strong>
            <small>Data tenaga sekolah</small>
        </a>
        <a class="dashboard-stat stat-blue" href="kelola.php?modul=program">
            <span class="stat-icon">PK</span>
            <span class="stat-label">Program Keahlian</span>
            <strong><?= $program ?></strong>
            <small>Program tersedia</small>
        </a>
        <a class="dashboard-stat stat-orange" href="kelola.php?modul=berita">
            <span class="stat-icon">BR</span>
            <span class="stat-label">Berita</span>
            <strong><?= $berita ?></strong>
            <small>Artikel tersimpan</small>
        </a>
        <a class="dashboard-stat stat-green" href="kelola.php?modul=galeri">
            <span class="stat-icon">GK</span>
            <span class="stat-label">Galeri Kegiatan</span>
            <strong><?= $galeri ?></strong>
            <small>Dokumentasi tersimpan</small>
        </a>
    </div>
</section>

<section class="dashboard-columns">
    <div class="admin-panel dashboard-panel">
        <div class="section-heading-admin compact">
            <div>
                <span class="eyebrow">MENU UTAMA</span>
                <h2>Kelola Data</h2>
            </div>
            <span class="section-note"><?= $totalKonten ?> data konten</span>
        </div>
        <div class="dashboard-menu-grid">
            <?php foreach ($items as $item): ?>
                <a class="dashboard-menu-card" href="kelola.php?modul=<?= e($item['module']) ?>">
                    <span class="menu-card-icon"><?= e($item['icon']) ?></span>
                    <span class="menu-card-copy">
                        <strong><?= e($item['label']) ?></strong>
                        <small><?= $counts[$item['module']] ?> data tersimpan</small>
                    </span>
                    <span class="menu-card-arrow">→</span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

    <aside class="admin-panel dashboard-side-panel">
        <div class="section-heading-admin compact">
            <div>
                <span class="eyebrow">AKSES CEPAT</span>
                <h2>Yang Bisa Kamu Lakukan</h2>
            </div>
        </div>
        <div class="quick-action-list">
            <a href="kelola.php?modul=guru"><span>01</span><div><strong>Tambah Guru</strong><small>Masukkan data guru & tendik baru</small></div><b>→</b></a>
            <a href="kelola.php?modul=berita"><span>02</span><div><strong>Tambah Berita</strong><small>Publikasikan berita sekolah</small></div><b>→</b></a>
            <a href="kelola.php?modul=galeri"><span>03</span><div><strong>Tambah Galeri</strong><small>Tambahkan dokumentasi kegiatan</small></div><b>→</b></a>
            <a href="kelola.php?modul=prestasi"><span>04</span><div><strong>Tambah Prestasi</strong><small>Catat prestasi siswa terbaru</small></div><b>→</b></a>
        </div>
    </aside>
</section>

<div class="dashboard-footer-note">
    <span>Tips</span>
    <p>Gunakan menu di sebelah kiri untuk mengelola data. Setelah menyimpan perubahan, buka website untuk melihat hasilnya.</p>
</div>

<?php require __DIR__ . '/_layout_bottom.php'; ?>
