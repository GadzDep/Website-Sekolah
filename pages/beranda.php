<?php
require_once __DIR__ . '/../config/database.php';
include __DIR__ . '/../includes/header.php';

$profile = $conn->query('SELECT * FROM school_profile WHERE id=1')->fetch_assoc() ?: [];
$stats = $conn->query('SELECT * FROM school_stats WHERE id=1')->fetch_assoc() ?: ['total_siswa'=>0,'total_rombel'=>0];
$total_guru = (int)$conn->query('SELECT COUNT(*) c FROM guru')->fetch_assoc()['c'];
$total_program = (int)$conn->query('SELECT COUNT(*) c FROM program_keahlian')->fetch_assoc()['c'];
$pengumuman_home = $conn->query('SELECT * FROM pengumuman ORDER BY tanggal DESC,id DESC LIMIT 2')->fetch_all(MYSQLI_ASSOC);
$berita_home = $conn->query('SELECT * FROM berita ORDER BY tanggal DESC,id DESC LIMIT 3')->fetch_all(MYSQLI_ASSOC);
$galeri_home = $conn->query('SELECT * FROM galeri ORDER BY id DESC LIMIT 3')->fetch_all(MYSQLI_ASSOC);
?>

<section class="hero-slider">
    <div class="hero-slide hero-slide-1"><div class="hero-overlay"></div><div class="hero-slide-content"><span class="hero-eyebrow">— WEBSITE RESMI SEKOLAH —</span><h1><?= e($profile['nama_sekolah'] ?? 'SMKN 1 Bandung') ?></h1><p>"Unggul dalam Prestasi, Berkarakter, dan Siap Kerja"</p></div></div>
    <div class="hero-slide hero-slide-2"><div class="hero-overlay"></div><div class="hero-slide-content"><span class="hero-eyebrow">— SEKOLAH UNGGULAN —</span><h1>TERUJI TERPUJI</h1><p>Mencetak Lulusan Teruji dalam Kompetensi, Terpuji dalam Karakter</p></div></div>
    <div class="hero-slide hero-slide-3"><div class="hero-overlay"></div><div class="hero-slide-content"><span class="hero-eyebrow">— SMK NEGERI 1 BANDUNG —</span><h1>T H E F I R S T</h1><p>(Trusty, Humble, Empower, Futuristic, Inspiring, Responsive, Satisfying, Tolerant)</p></div></div>
    <div class="hero-dots"><span class="hero-dot hero-dot-1"></span><span class="hero-dot hero-dot-2"></span><span class="hero-dot hero-dot-3"></span></div>
</section>

<section class="stats-modern"><div class="home-container"><div class="stats-box">
<div class="stat-modern"><div class="stat-icon">👨‍🏫</div><div><h3><?= $total_guru ?></h3><p>Guru & Tendik</p></div></div>
<div class="stat-modern"><div class="stat-icon">🎓</div><div><h3><?= (int)$stats['total_siswa'] ?></h3><p>Siswa Aktif</p></div></div>
<div class="stat-modern"><div class="stat-icon">⚙</div><div><h3><?= $total_program ?></h3><p>Program Keahlian</p></div></div>
</div></div></section>

<section class="home-section principal-section"><div class="home-container"><div class="principal-grid">
<div class="principal-photo"><img src="assets/images/kepsek.jpg" alt="Kepala Sekolah"></div>
<div class="principal-content"><div class="section-heading"><span class="eyebrow">Kepala Sekolah</span><h2>Sambutan Kepala Sekolah</h2></div><div class="quote"><p><i>“Assalamu’alaikum Warahmatullahi Wabarakatuh.”</i></p><p><?= nl2br(e($profile['sambutan'] ?? 'Selamat datang di website resmi sekolah kami.')) ?></p></div><div class="principal-name"><h3><?= e($profile['nama_kepsek'] ?? 'Kepala Sekolah') ?></h3><p><?= e($profile['jabatan_kepsek'] ?? 'Kepala Sekolah') ?></p></div></div>
</div></div></section>

<section class="home-section information-section"><div class="home-container"><div class="information-header"><div class="section-heading"><span class="eyebrow">Informasi Sekolah</span><h2>Pengumuman</h2><p>Informasi penting dan pengumuman terbaru untuk seluruh warga sekolah.</p></div><a href="pages/informasi.php" class="view-all">Lihat Semua →</a></div>
<div class="information-grid"><?php if($pengumuman_home): foreach($pengumuman_home as $p): ?><article class="info-card"><span class="info-label">PENGUMUMAN</span><h3><?= e($p['judul']) ?></h3><span class="info-date"><?= date('d M Y',strtotime($p['tanggal'])) ?></span><p><?= e(mb_strimwidth(strip_tags($p['isi']),0,120,'...')) ?></p></article><?php endforeach; else: ?><div class="empty-info">Belum ada pengumuman terbaru.</div><?php endif; ?></div></div></section>

<section class="home-section news-section"><div class="home-container"><div class="information-header"><div class="section-heading"><span class="eyebrow">Kegiatan Sekolah</span><h2>Berita Terbaru</h2><p>Ikuti berbagai berita dan kegiatan terbaru dari SMKN 1 Bandung.</p></div><a href="pages/informasi.php" class="view-all">Lihat Semua →</a></div>
<div class="information-grid"><?php if($berita_home): foreach($berita_home as $b): ?><article class="info-card news"><a href="pages/informasi.php?berita=<?= (int)$b['id'] ?>" class="home-news-link"><div class="home-news-image"><img src="assets/berita/<?= e($b['gambar']) ?>" alt="<?= e($b['judul']) ?>" loading="lazy"></div><span class="info-label">BERITA</span><h3><?= e($b['judul']) ?></h3><span class="info-date"><?= date('d M Y',strtotime($b['tanggal'])) ?></span><p><?= e(mb_strimwidth(strip_tags($b['isi']),0,120,'...')) ?></p><div class="home-news-read"><span>Baca selengkapnya</span><span>→</span></div></a></article><?php endforeach; else: ?><div class="empty-info">Belum ada berita terbaru.</div><?php endif; ?></div></div></section>

<section class="home-gallery-section"><div class="home-container"><div class="home-gallery-heading"><div class="section-heading"><span class="eyebrow">DOKUMENTASI SEKOLAH</span><h2>Galeri Kegiatan</h2><p>Lihat beberapa dokumentasi kegiatan dan aktivitas yang berlangsung di sekolah.</p></div><a href="pages/galeri.php" class="view-all">Lihat Semua →</a></div><div class="home-gallery-grid"><?php foreach($galeri_home as $g): ?><article class="home-gallery-card"><div class="home-gallery-image"><img src="assets/galeri/<?= e($g['foto']) ?>" alt="<?= e($g['judul_kegiatan']) ?>" loading="lazy"></div><div class="home-gallery-content"><span>GALERI SEKOLAH</span><h3><?= e($g['judul_kegiatan']) ?></h3><a href="pages/galeri.php">Lihat Galeri →</a></div></article><?php endforeach; ?></div></div></section>

<section class="cta-section"><div class="home-container"><div class="cta-box"><h2>Temukan Informasi Sekolah</h2><p>Jelajahi berbagai informasi mengenai sekolah, program keahlian, guru dan tendik, kegiatan, prestasi, serta berbagai agenda sekolah.</p><a href="pages/informasi.php" class="cta-btn">Jelajahi Informasi →</a></div></div></section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
