<?php
include 'includes/header.php';

$total_guru = 32;
$total_siswa = 1524;
$jurusan = 4;

$pengumuman = [

    [
        'judul' => 'Pengumuman Libur Sekolah',
        'tanggal' => '20 September 2026',
        'isi' => 'Diberitahukan kepada seluruh siswa bahwa kegiatan pembelajaran diliburkan sesuai dengan kalender pendidikan yang berlaku.'
    ],

    [
        'judul' => 'Pelaksanaan Asesmen Sekolah',
        'tanggal' => '18 September 2026',
        'isi' => 'Seluruh siswa diharapkan mempersiapkan diri untuk mengikuti kegiatan asesmen sekolah sesuai jadwal yang telah ditentukan.'
    ],

    [
        'judul' => 'Informasi Kegiatan Sekolah',
        'tanggal' => '15 September 2026',
        'gambar' => 'berita-2.jpg',
        'isi' => 'Seluruh warga sekolah diharapkan memperhatikan informasi mengenai kegiatan sekolah yang akan dilaksanakan.'
    ]

];

$berita = [

    [
        'judul' => 'SMKN 1 Bandung Raih Prestasi Tingkat Kabupaten',
        'tanggal' => '22 September 2026',
        'gambar' => 'berita-1.jpg',
        'isi' => 'Siswa SMKN 1 Bandung kembali menorehkan prestasi membanggakan melalui berbagai kompetisi dan kegiatan akademik maupun nonakademik.'
    ],

    [
        'judul' => 'Kegiatan Pembelajaran dan Projek Siswa',
        'gambar' => 'berita-3.jpg',
        'tanggal' => '15 September 2026',
        'isi' => 'Berbagai kegiatan pembelajaran berbasis projek terus dilaksanakan untuk meningkatkan kompetensi, kreativitas, dan karakter peserta didik.'
    ],

    [
        'judul' => 'Siswa Mengikuti Kegiatan Pengembangan Kompetensi',
        'gambar' => 'berita-2.jpg',
        'tanggal' => '10 September 2026',
        'isi' => 'Kegiatan pengembangan kompetensi siswa menjadi bagian dari upaya sekolah dalam mempersiapkan lulusan yang kompeten dan siap menghadapi dunia kerja.'
    ]

];


$pengumuman_home = array_slice($pengumuman, 0, 2);

$berita_home = array_slice($berita, 0, 3);

?>


<section class="hero-slider">


    <!-- SLIDE 1 -->

    <div class="hero-slide hero-slide-1">

        <div class="hero-overlay"></div>

        <div class="hero-slide-content">

            <span class="hero-eyebrow">
                — WEBSITE RESMI SEKOLAH —
            </span>

            <h1>
                SMKN 1 BANDUNG
            </h1>

            <p>
                "Unggul dalam Prestasi, Berkarakter, dan Siap Kerja"
            </p>

        </div>

    </div>


    <!-- SLIDE 2 -->

    <div class="hero-slide hero-slide-2">

        <div class="hero-overlay"></div>

        <div class="hero-slide-content">

            <span class="hero-eyebrow">
                — SEKOLAH UNGGULAN —
            </span>

            <h1>
                TERUJI TERPUJI
            </h1>

            <p>
                Mencetak Lulusan Teruji dalam Kompetensi, Terpuji dalam Karakter
            </p>

        </div>

    </div>


    <!-- SLIDE 3 -->

    <div class="hero-slide hero-slide-3">

        <div class="hero-overlay"></div>

        <div class="hero-slide-content">

            <span class="hero-eyebrow">
                — SMK NEGERI 1 BANDUNG —
            </span>

            <h1>
                T H E F I R S T
            </h1>

            <p>
                (Trusty, Humble, Empower, Futuristic, Inspiring, Responsive, Satisfying, Tolerant)
            </p>

        </div>

    </div>


    <!-- DOT INDICATOR -->

    <div class="hero-dots">

        <span class="hero-dot hero-dot-1"></span>

        <span class="hero-dot hero-dot-2"></span>

        <span class="hero-dot hero-dot-3"></span>

    </div>

</section>



<!-- =====================================================
     STATISTIK
===================================================== -->

<section class="stats-modern">

    <div class="home-container">

        <div class="stats-box">


            <!-- GURU -->

            <div class="stat-modern">

                <div class="stat-icon">
                    👨‍🏫
                </div>

                <div>

                    <h3>
                        <?php echo $total_guru; ?>
                    </h3>

                    <p>
                        Guru & Tendik
                    </p>

                </div>

            </div>


            <!-- SISWA -->

            <div class="stat-modern">

                <div class="stat-icon">
                    🎓
                </div>

                <div>

                    <h3>
                        <?php echo $total_siswa; ?>
                    </h3>

                    <p>
                        Siswa Aktif
                    </p>

                </div>

            </div>


            <!-- PROGRAM KEAHLIAN -->

            <div class="stat-modern">

                <div class="stat-icon">
                    ⚙
                </div>

                <div>

                    <h3>
                        <?php echo $jurusan; ?>
                    </h3>

                    <p>
                        Program Keahlian
                    </p>

                </div>

            </div>


        </div>

    </div>

</section>



<!-- =====================================================
     SAMBUTAN KEPALA SEKOLAH
===================================================== -->

<section class="home-section principal-section">

    <div class="home-container">

        <div class="principal-grid">


            <!-- FOTO -->

            <div class="principal-photo">

                <img
                    src="assets/images/kepsek.jpg"
                    alt="Kepala Sekolah SMKN 1 Bandung"
                >

            </div>


            <!-- CONTENT -->

            <div class="principal-content">

                <div class="section-heading">

                    <span class="eyebrow">
                        Kepala Sekolah
                    </span>

                    <h2>
                        Sambutan Kepala Sekolah
                    </h2>

                </div>


                <div class="quote">

                    <p>
                        <i>
                            “Assalamu’alaikum Warahmatullahi Wabarakatuh.”
                        </i>
                    </p>

                    <p>
                        Selamat datang di website resmi sekolah kami.
                        Website ini hadir sebagai media informasi dan
                        komunikasi bagi seluruh warga sekolah serta
                        masyarakat umum.
                    </p>

                    <p>
                        Semoga kehadiran website ini dapat memberikan
                        informasi yang akurat, transparan, dan mudah
                        diakses mengenai berbagai kegiatan serta
                        perkembangan sekolah.
                    </p>

                </div>


                <div class="principal-name">

                    <h3>
                        Dra. Lilis Yuyun, M.M.Pd
                    </h3>

                    <p>
                        Kepala SMK Negeri 1 Bandung
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     SECTION PENGUMUMAN
===================================================== -->

<section class="home-section information-section">

    <div class="home-container">


        <!-- HEADER PENGUMUMAN -->

        <div class="information-header">

            <div class="section-heading">

                <span class="eyebrow">
                    Informasi Sekolah
                </span>

                <h2>
                    Pengumuman
                </h2>

                <p>
                    Informasi penting dan pengumuman terbaru
                    untuk seluruh warga sekolah.
                </p>

            </div>


            <a
                href="pages/informasi.php"
                class="view-all"
            >
                Lihat Semua →
            </a>

        </div>



        <!-- GRID PENGUMUMAN -->

        <div class="information-grid">


            <?php if (!empty($pengumuman_home)): ?>


                <?php foreach ($pengumuman_home as $p): ?>


                    <article class="info-card">


                        <span class="info-label">
                            PENGUMUMAN
                        </span>


                        <h3>

                            <?php

                            echo htmlspecialchars(
                                $p['judul'],
                                ENT_QUOTES,
                                'UTF-8'
                            );

                            ?>

                        </h3>


                        <span class="info-date">

                            <?php

                            echo htmlspecialchars(
                                $p['tanggal'],
                                ENT_QUOTES,
                                'UTF-8'
                            );

                            ?>

                        </span>


                        <p>

                            <?php

                            $isi = strip_tags($p['isi']);

                            echo htmlspecialchars(
                                mb_substr($isi, 0, 120),
                                ENT_QUOTES,
                                'UTF-8'
                            );

                            if (mb_strlen($isi) > 120) {
                                echo '...';
                            }

                            ?>

                        </p>


                        </a>
                    </article>


                <?php endforeach; ?>


            <?php else: ?>


                <div class="empty-info">

                    Belum ada pengumuman terbaru.

                </div>


            <?php endif; ?>


        </div>

    </div>

</section>



<!-- =====================================================
     SECTION BERITA
===================================================== -->

<section class="home-section news-section">

    <div class="home-container">


        <!-- HEADER BERITA -->

        <div class="information-header">

            <div class="section-heading">

                <span class="eyebrow">
                    Kegiatan Sekolah
                </span>

                <h2>
                    Berita Terbaru
                </h2>

                <p>
                    Ikuti berbagai berita dan kegiatan terbaru
                    dari SMKN 1 Bandung.
                </p>

            </div>


            <a
                href="pages/informasi.php"
                class="view-all"
            >
                Lihat Semua →
            </a>

        </div>



        <!-- GRID BERITA -->

        <div class="information-grid">


            <?php if (!empty($berita_home)): ?>


                <?php foreach ($berita_home as $index => $b): ?>


                    <article class="info-card news">

                        <a href="pages/informasi.php?berita=<?php echo $index; ?>" class="home-news-link">
                        <div class="home-news-image">
                            <img src="assets/berita/<?php echo htmlspecialchars($b['gambar'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($b['judul'], ENT_QUOTES, 'UTF-8'); ?>" loading="lazy">
                        </div>

                        <span class="info-label">
                            BERITA
                        </span>


                        <h3>

                            <?php

                            echo htmlspecialchars(
                                $b['judul'],
                                ENT_QUOTES,
                                'UTF-8'
                            );

                            ?>

                        </h3>


                        <span class="info-date">

                            <?php

                            echo htmlspecialchars(
                                $b['tanggal'],
                                ENT_QUOTES,
                                'UTF-8'
                            );

                            ?>

                        </span>


                        <p>

                            <?php

                            $isi = strip_tags($b['isi']);

                            echo htmlspecialchars(
                                mb_substr($isi, 0, 120),
                                ENT_QUOTES,
                                'UTF-8'
                            );

                            if (mb_strlen($isi) > 120) {
                                echo '...';
                            }

                            ?>

                        </p>

                        <div class="home-news-read">
                            <span>Baca selengkapnya</span>
                            <span>→</span>
                        </div>

                        </a>
                    </article>


                <?php endforeach; ?>


            <?php else: ?>


                <div class="empty-info">

                    Belum ada berita terbaru.

                </div>


            <?php endif; ?>


        </div>

    </div>

</section>



<!-- =====================================================
     GALERI KEGIATAN
===================================================== -->

<section class="home-gallery-section">
    <div class="home-container">

        <div class="home-gallery-heading">
            <div class="section-heading">
                <span class="eyebrow">DOKUMENTASI SEKOLAH</span>
                <h2>Galeri Kegiatan</h2>
                <p>
                    Lihat beberapa dokumentasi kegiatan dan aktivitas
                    yang berlangsung di SMKN 1 Bandung.
                </p>
            </div>

            <a href="pages/galeri.php" class="view-all">
                Lihat Semua →
            </a>
        </div>

        <?php
        $galeri_home = [
            [
                'judul' => 'ANGGOTA PASKIBRAKA',
                'foto' => 'galeri-1.jpg'
            ],
            [
                'judul' => 'JUARA 1 TOURISM QUIZ',
                'foto' => 'galeri-2.jpg'
            ],
            [
                'judul' => 'JUARA 1 OLIMPIADE AKUNTANSI',
                'foto' => 'galeri-3.jpg'
            ]
        ];
        ?>

        <div class="home-gallery-grid">
            <?php foreach ($galeri_home as $foto): ?>
                <article class="home-gallery-card">
                    <div class="home-gallery-image">
                        <img
                            src="assets/galeri/<?php echo htmlspecialchars($foto['foto'], ENT_QUOTES, 'UTF-8'); ?>"
                            alt="<?php echo htmlspecialchars($foto['judul'], ENT_QUOTES, 'UTF-8'); ?>"
                            loading="lazy"
                        >
                    </div>
                    <div class="home-gallery-content">
                        <span>GALERI SEKOLAH</span>
                        <h3><?php echo htmlspecialchars($foto['judul'], ENT_QUOTES, 'UTF-8'); ?></h3>
                        <a href="pages/galeri.php">Lihat Galeri →</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

    </div>
</section>


<!-- =====================================================
     CTA
===================================================== -->

<section class="cta-section">

    <div class="home-container">

        <div class="cta-box">


            <h2>
                Temukan Informasi Sekolah
            </h2>


            <p>
                Jelajahi berbagai informasi mengenai sekolah,
                program keahlian, guru dan tendik, kegiatan,
                prestasi, serta berbagai agenda sekolah.
            </p>


            <a
                href="pages/informasi.php"
                class="cta-btn"
            >
                Jelajahi Informasi →
            </a>


        </div>

    </div>

</section>



<?php
include 'includes/footer.php';
?>


