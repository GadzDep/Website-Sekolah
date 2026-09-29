<?php
include '../includes/header.php';

$galeri_data = [
    [
        'judul_kegiatan' => 'ANGGOTA PASKIBRAKA',
        'foto' => 'galeri-1.jpg',
        'deskripsi' => 'Anggota Paskibraka SMK Negeri 1 Bandung.'
    ],
    [
        'judul_kegiatan' => 'JUARA 1 TOURISM QUIZ',
        'foto' => 'galeri-2.jpg',
        'deskripsi' => 'Meraih Juara 1 pada ajang lomba tourism quiz.'
    ],
    [
        'judul_kegiatan' => 'JUARA 1 OLIMPIADE AKUNTANSI',
        'foto' => 'galeri-3.jpg',
        'deskripsi' => 'Meraih Juara 1 pada ajang olimpiade akuntansi.'
    ],
    [
        'judul_kegiatan' => 'LOMBA PASKIBRA TINGKAT PROVINSI',
        'foto' => 'galeri-4.jpg',
        'deskripsi' => 'Mengikuti ajang lomba paskibra tingkat provinsi.'
    ],
    [
        'judul_kegiatan' => 'JUARA 2 & 3 KOMPETISI BAHASA KOREA',
        'foto' => 'galeri-5.jpg',
        'deskripsi' => 'Meraih Juara 2 & 3 pada kompetisi bahasa korea.'
    ],
    [
        'judul_kegiatan' => 'JUARA 3 NASIONAL OLIMPIADE PARIWISATA',
        'foto' => 'galeri-6.jpg',
        'deskripsi' => 'Meraih Juara 3 olimpiade pariwisata tingkat nasional.'
    ],
    [
        'judul_kegiatan' => 'LABSCHOOL UPI CHAMPIONSHIP',
        'foto' => 'galeri-7.jpg',
        'deskripsi' => 'Mengikuti ajang LABSCHOOL UPI CHAMPIONSHIP.'
    ],
    [
        'judul_kegiatan' => 'PENCAK SILAT TOURNAMENT',
        'foto' => 'galeri-8.jpg',
        'deskripsi' => 'Mengikuti ajang Pencak Silat Tournament.'
    ],
    [
        'judul_kegiatan' => 'JUARA 1 PASKIBRA PORVINSI',
        'foto' => 'galeri-9.jpg',
        'deskripsi' => 'Meraih Juara 1 pada ajang lomba Paskibra Provinsi.'
    ]
];

$total_galeri = count($galeri_data);
?>

<div class="gallery-page">

    <!-- HERO -->
    <section class="gallery-hero">
        <div class="container">
            <span class="gallery-label">KESISWAAN</span>
            <h1>Galeri Kegiatan</h1>
            <p>
                Dokumentasi berbagai kegiatan dan aktivitas sekolah sebagai
                bagian dari perjalanan, pengalaman, dan momen kebersamaan
                peserta didik di lingkungan sekolah.
            </p>
        </div>
    </section>


    <!-- INTRO -->
    <section class="gallery-intro">
        <div class="container">
            <div class="gallery-intro-grid">

                <div class="gallery-intro-text">
                    <span>DOKUMENTASI SEKOLAH</span>

                    <h2>
                        Mengabadikan Setiap
                        Momen dan Pengalaman
                    </h2>

                    <p>
                        Galeri kegiatan menjadi ruang dokumentasi berbagai
                        aktivitas yang berlangsung di lingkungan sekolah.
                        Setiap foto menyimpan cerita dan pengalaman yang
                        menjadi bagian dari kehidupan sekolah.
                    </p>

                    <p>
                        Mulai dari kegiatan pembelajaran, organisasi,
                        perlombaan, hingga berbagai kegiatan sekolah lainnya
                        dapat dilihat melalui dokumentasi berikut.
                    </p>
                </div>


                <div class="gallery-highlight">

                    <div class="gallery-highlight-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <rect x="3" y="4" width="18" height="16" rx="2"></rect>
                            <circle cx="8.5" cy="9" r="1.5"></circle>
                            <path d="M3 17l5-5 4 4 3-3 6 5"></path>
                        </svg>
                    </div>

                    <span>DOKUMENTASI</span>

                    <strong>
                        <?php echo $total_galeri; ?><br>
                        Foto Kegiatan
                    </strong>

                    <p>
                        Dokumentasi kegiatan sekolah yang tersimpan dalam
                        galeri.
                    </p>

                </div>

            </div>
        </div>
    </section>


    <!-- GALLERY -->
    <section class="gallery-section">
        <div class="container">

            <div class="gallery-section-heading">
                <div>
                    <span>KOLEKSI FOTO</span>
                    <h2>Aktivitas Sekolah</h2>
                </div>

                <p>
                    Lihat berbagai dokumentasi kegiatan yang telah
                    dilaksanakan oleh sekolah dan peserta didik.
                </p>
            </div>


            <?php if ($total_galeri > 0): ?>

                <div class="gallery-grid">

                    <?php 
                    $nomor = 1;

                    foreach ($galeri_data as $row): 

                        $judul = htmlspecialchars($row['judul_kegiatan']);
                        $foto  = htmlspecialchars($row['foto']);
                        $deskripsi = htmlspecialchars($row['deskripsi']);
                    ?>

                        <article class="gallery-card">

                            <div class="gallery-image">

                                <img 
                                    src="../assets/galeri/<?php echo $foto; ?>"
                                    alt="<?php echo $judul; ?>"
                                    loading="lazy"
                                >

                                <div class="gallery-overlay">
                                    <span>DOKUMENTASI</span>
                                </div>

                            </div>

                            <div class="gallery-card-content">

                                <div class="gallery-card-number">
                                    <?php echo str_pad($nomor, 2, '0', STR_PAD_LEFT); ?>
                                </div>

                                <div class="gallery-card-info">
                                    <h3>
                                        <?php echo $judul; ?>
                                    </h3>

                                    <span>
                                        <?php echo $deskripsi; ?>
                                    </span>
                                </div>

                            </div>

                        </article>

                    <?php 
                        $nomor++;
                    endforeach;
                    ?>

                </div>

            <?php else: ?>

                <div class="gallery-empty">

                    <div class="gallery-empty-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <rect x="3" y="4" width="18" height="16" rx="2"></rect>
                            <circle cx="8.5" cy="9" r="1.5"></circle>
                            <path d="M3 17l5-5 4 4 3-3 6 5"></path>
                        </svg>
                    </div>

                    <h3>Belum Ada Foto Kegiatan</h3>

                    <p>
                        Dokumentasi kegiatan sekolah belum tersedia.
                    </p>

                </div>

            <?php endif; ?>

        </div>
    </section>


    <!-- CLOSING -->
    <section class="gallery-closing">
        <div class="container">

            <div class="gallery-closing-inner">

                <span>KESISWAAN</span>

                <h2>
                    Setiap Kegiatan,
                    Menjadi Bagian dari Cerita
                </h2>

                <p>
                    Dokumentasi kegiatan sekolah menjadi bagian dari perjalanan
                    peserta didik dalam belajar, berkarya, berorganisasi,
                    berprestasi, dan tumbuh bersama.
                </p>

            </div>

        </div>
    </section>

</div>

<?php include '../includes/footer.php'; ?>