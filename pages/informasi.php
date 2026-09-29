<?php
include '../includes/header.php';

/*
 * SEMUA DATA INFORMASI DISIMPAN LANGSUNG DI FILE INI.
 * Edit array berikut untuk mengubah isi website.
 */
$pengumuman_data = [
    [
        'judul' => 'Pengumuman Libur Sekolah',
        'isi' => 'Diberitahukan kepada seluruh siswa bahwa kegiatan pembelajaran diliburkan sesuai dengan kalender pendidikan yang berlaku.',
        'tanggal_created' => '20 September 2026'
    ],
    [
        'judul' => 'Pelaksanaan Asesmen Sekolah',
        'isi' => 'Seluruh siswa diharapkan mempersiapkan diri untuk mengikuti kegiatan asesmen sekolah sesuai jadwal yang telah ditentukan.',
        'tanggal_created' => '18 September 2026'
    ],
];

$berita_data = [
    [
        'judul' => 'SMKN 1 Bandung Raih Prestasi Tingkat Kabupaten',
        'isi' => 'Siswa SMKN 1 Bandung kembali menorehkan prestasi membanggakan melalui berbagai kompetisi dan kegiatan akademik maupun nonakademik.',
        'gambar' => 'berita-1.jpg',
        'tanggal_created' => '22 September 2026'
    ],
    [
        'judul' => 'Kegiatan Pembelajaran dan Projek Siswa',
        'isi' => 'Berbagai kegiatan pembelajaran berbasis projek terus dilaksanakan untuk meningkatkan kompetensi, kreativitas, dan karakter peserta didik.',
        'gambar' => 'berita-2.jpg',
        'tanggal_created' => '15 September 2026'
    ],
];

$agenda_data = [
    [
        'judul_agenda' => 'Rapat Evaluasi Program Sekolah',
        'tgl_kegiatan' => '2026-09-28',
        'lokasi' => 'Ruang Rapat',
        'keterangan' => 'Evaluasi pelaksanaan program dan kegiatan sekolah.'
    ],
    [
        'judul_agenda' => 'Kegiatan Projek Peserta Didik',
        'tgl_kegiatan' => '2026-10-05',
        'lokasi' => 'Lingkungan Sekolah',
        'keterangan' => 'Pelaksanaan kegiatan projek dan pengembangan kompetensi siswa.'
    ],
 ];

$berita_index = isset($_GET['berita']) ? filter_var($_GET['berita'], FILTER_VALIDATE_INT) : null;
$berita_detail = ($berita_index !== null && isset($berita_data[$berita_index])) ? $berita_data[$berita_index] : null;
?>

<link rel="stylesheet" href="../css/informasi.css">

<div class="informasi-page">

<?php if ($berita_detail !== null): ?>
    <article class="berita-detail-page">
        <div class="informasi-container">
            <a href="informasi.php" class="berita-detail-back">← Kembali ke Informasi</a>
            <div class="berita-detail-date">Berita Sekolah · <?php echo htmlspecialchars($berita_detail['tanggal_created']); ?></div>
            <h1><?php echo htmlspecialchars($berita_detail['judul']); ?></h1>
            <div class="berita-detail-image">
                <img src="../assets/berita/<?php echo htmlspecialchars($berita_detail['gambar']); ?>" alt="<?php echo htmlspecialchars($berita_detail['judul']); ?>">
            </div>
            <div class="berita-detail-content">
                <?php echo nl2br(htmlspecialchars($berita_detail['isi'])); ?>
            </div>
        </div>
    </article>
<?php else: ?>

    <!-- HERO -->
    <section class="informasi-hero">
        <div class="informasi-container">
            <div class="informasi-hero-content">
                <span class="informasi-eyebrow">INFORMASI SEKOLAH</span>

                <h1>
                    Informasi & Kabar<br>
                    <span>Terkini Sekolah</span>
                </h1>

                <p>
                    Temukan pengumuman resmi, berita terbaru, dan agenda
                    kegiatan sekolah dalam satu halaman.
                </p>
            </div>

            <div class="informasi-hero-decoration">
                <div class="info-circle info-circle-one"></div>
                <div class="info-circle info-circle-two"></div>
                <div class="info-circle info-circle-three"></div>

                <div class="info-hero-card">
                    <span>UPDATE</span>
                    <strong>Informasi<br>Sekolah</strong>
                    <small>Selalu diperbarui</small>
                </div>
            </div>
        </div>
    </section>


    <!-- PENGUMUMAN -->
    <section class="informasi-section informasi-announcement">
        <div class="informasi-container">

            <div class="informasi-section-heading">
                <div>
                    <span class="informasi-label">PENGUMUMAN</span>
                    <h2>Pengumuman Resmi</h2>
                    <p>
                        Informasi penting dan pemberitahuan resmi dari sekolah
                        untuk seluruh warga sekolah.
                    </p>
                </div>

                <div class="informasi-heading-line"></div>
            </div>

            <?php if (count($pengumuman_data) > 0): ?>

                <div class="informasi-announcement-grid">

                    <?php foreach ($pengumuman_data as $p): ?>

                        <article class="informasi-announcement-card">

                            <div class="informasi-announcement-icon">
                                <svg viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M4 5.5C4 4.67 4.67 4 5.5 4H18.5C19.33 4 20 4.67 20 5.5V18.5C20 19.33 19.33 20 18.5 20H5.5C4.67 20 4 19.33 4 18.5V5.5Z"
                                        stroke="currentColor"
                                        stroke-width="1.7"
                                    />
                                    <path
                                        d="M8 8H16M8 12H16M8 16H13"
                                        stroke="currentColor"
                                        stroke-width="1.7"
                                        stroke-linecap="round"
                                    />
                                </svg>
                            </div>

                            <div class="informasi-card-date">
                                Diposting ·
                                <?php echo date('d M Y', strtotime($p['tanggal_created'])); ?>
                            </div>

                            <h3>
                                <?php echo htmlspecialchars($p['judul']); ?>
                            </h3>

                            <p>
                                <?php echo nl2br(htmlspecialchars($p['isi'])); ?>
                            </p>

                        </article>
                        </a>

                    <?php endforeach; ?>

                </div>

            <?php else: ?>

                <div class="informasi-empty">
                    <span>Tidak ada pengumuman</span>
                    <p>Belum ada pengumuman resmi saat ini.</p>
                </div>

            <?php endif; ?>

        </div>
    </section>


    <!-- BERITA -->
    <section class="informasi-section informasi-news">
        <div class="informasi-container">

            <div class="informasi-section-heading">
                <div>
                    <span class="informasi-label">BERITA</span>
                    <h2>Berita Terkini</h2>
                    <p>
                        Kabar terbaru mengenai kegiatan, pencapaian, dan
                        berbagai aktivitas sekolah.
                    </p>
                </div>

                <div class="informasi-heading-line"></div>
            </div>

            <?php if (count($berita_data) > 0): ?>

                <div class="informasi-news-grid">

                    <?php foreach ($berita_data as $index => $b): ?>

                        <a href="informasi.php?berita=<?php echo $index; ?>" class="informasi-news-card-link">
                        <article class="informasi-news-card">

                            <div class="informasi-news-image">

                                <?php if (
                                    !empty($b['gambar']) &&
                                    file_exists('../assets/berita/' . $b['gambar'])
                                ): ?>

                                    <img
                                        src="../assets/berita/<?php echo htmlspecialchars($b['gambar']); ?>"
                                        alt="<?php echo htmlspecialchars($b['judul']); ?>"
                                    >

                                <?php else: ?>

                                    <div class="informasi-news-placeholder">
                                        <svg viewBox="0 0 24 24" fill="none">
                                            <rect
                                                x="3"
                                                y="4"
                                                width="18"
                                                height="16"
                                                rx="2"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                            />
                                            <circle
                                                cx="8"
                                                cy="9"
                                                r="1.5"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                            />
                                            <path
                                                d="M3 16L8 12L11 15L14 12L21 18"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                        </svg>

                                        <span>Belum ada gambar</span>
                                    </div>

                                <?php endif; ?>

                            </div>

                            <div class="informasi-news-content">

                                <div class="informasi-card-date">
                                    Diposting ·
                                    <?php echo date('d M Y', strtotime($b['tanggal_created'])); ?>
                                </div>

                                <h3>
                                    <?php echo htmlspecialchars($b['judul']); ?>
                                </h3>

                                <p>
                                    <?php echo nl2br(htmlspecialchars($b['isi'])); ?>
                                </p>

                            </div>

                        </article>

                    <?php endforeach; ?>

                </div>

            <?php else: ?>

                <div class="informasi-empty">
                    <span>Tidak ada berita</span>
                    <p>Belum ada berita terbaru.</p>
                </div>

            <?php endif; ?>

        </div>
    </section>


    <!-- AGENDA -->
    <section class="informasi-section informasi-agenda">
        <div class="informasi-container">

            <div class="informasi-section-heading">
                <div>
                    <span class="informasi-label">AGENDA</span>
                    <h2>Agenda Mendatang</h2>
                    <p>
                        Jadwal kegiatan sekolah yang akan berlangsung dalam
                        waktu mendatang.
                    </p>
                </div>

                <div class="informasi-heading-line"></div>
            </div>


            <?php if (count($agenda_data) > 0): ?>

                <div class="informasi-agenda-wrapper">

                    <div class="informasi-agenda-header">
                        <div>Tanggal</div>
                        <div>Agenda / Kegiatan</div>
                        <div>Lokasi</div>
                        <div>Keterangan</div>
                    </div>

                    <?php foreach ($agenda_data as $a): ?>

                        <div class="informasi-agenda-row">

                            <div class="informasi-agenda-date">

                                <strong>
                                    <?php echo date('d', strtotime($a['tgl_kegiatan'])); ?>
                                </strong>

                                <span>
                                    <?php echo date('M Y', strtotime($a['tgl_kegiatan'])); ?>
                                </span>

                            </div>

                            <div class="informasi-agenda-title">
                                <?php echo htmlspecialchars($a['judul_agenda']); ?>
                            </div>

                            <div class="informasi-agenda-location">

                                <svg viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M20 10C20 15 12 21 12 21C12 21 4 15 4 10C4 5.58 7.58 2 12 2C16.42 2 20 5.58 20 10Z"
                                        stroke="currentColor"
                                        stroke-width="1.7"
                                    />
                                    <circle
                                        cx="12"
                                        cy="10"
                                        r="2.5"
                                        stroke="currentColor"
                                        stroke-width="1.7"
                                    />
                                </svg>

                                <span>
                                    <?php echo htmlspecialchars($a['lokasi']); ?>
                                </span>

                            </div>

                            <div class="informasi-agenda-description">
                                <?php echo nl2br(htmlspecialchars($a['keterangan'])); ?>
                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>

            <?php else: ?>

                <div class="informasi-empty">
                    <span>Tidak ada agenda</span>
                    <p>Belum ada agenda kegiatan mendatang.</p>
                </div>

            <?php endif; ?>

        </div>
    </section>


    <!-- CLOSING -->
    <section class="informasi-closing">
        <div class="informasi-container">

            <div class="informasi-closing-inner">

                <span class="informasi-label">TETAP TERHUBUNG</span>

                <h2>
                    Selalu ikuti perkembangan<br>
                    kegiatan sekolah.
                </h2>

                <p>
                    Informasi terbaru akan terus diperbarui untuk memastikan
                    seluruh warga sekolah mendapatkan kabar yang relevan.
                </p>

            </div>

        </div>
    </section>

<?php endif; ?>

</div>

<?php include '../includes/footer.php'; ?>