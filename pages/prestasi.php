<?php
include '../includes/header.php';

$prestasi_data = [
    [
        'judul_prestasi' => 'Juara 1 Tourism Quiz',
        'penyelenggara' => 'Politeknik Negeri Bandung (POLBAN)',
        'tingkat' => 'Nasional',
        'deskripsi' => 'SMK Negeri 1 Bandung Berhasil Meraih Juara 1 pada lomba Tourism Quiz yang di adakan Politeknik Negeri Bandung (POLBAN).',
        'foto_prestasi' => 'galeri-2.jpg'
    ],
    [
        'judul_prestasi' => 'Juara 1 Olimpiade Akuntansi',
        'penyelenggara' => 'Universitas Koperasi Indonesia (IKOPIN)',
        'tingkat' => 'SMA/SMK/MA sederajat',
        'deskripsi' => 'SMK Negeri 1 Bandung Berhasil Meraih Juara 1 pada olimpiade yang di adakan Universitas Koperasi Indonesia (IKOPIN).',
        'foto_prestasi' => 'galeri-3.jpg'
    ],
    [
        'judul_prestasi' => 'Juara 2 & 3 Kompetisi Bahasa Korea',
        'penyelenggara' => 'UNIKOM',
        'tingkat' => 'SMA/SMK/MA sederajat',
        'deskripsi' => 'SMK Negeri 1 Bandung Berhasil Meraih Juara 2 dan 3 pada kompetiis bahasa korea yang di adakan UNIKOM.',
        'foto_prestasi' => 'galeri-5.jpg'
    ],
    [
        'judul_prestasi' => 'Juara 3 Olimpiade Pariwisata',
        'penyelenggara' => 'Sekolah Vokasi Universitas Gadjah Mada.',
        'tingkat' => 'SMA/SMK/MA sederajat',
        'deskripsi' => 'SMK Negeri 1 Bandung Berhasil Meraih Juara 3 pada olimpiade yang di adakan Universitas Gadjah Mada.',
        'foto_prestasi' => 'galeri-6.jpg'
    ],
    [
        'judul_prestasi' => 'Juara 1 Paskibra',
        'penyelenggara' => 'MAN 2 Kota Bandung',
        'tingkat' => 'SMA/SMK/MA sederajat',
        'deskripsi' => 'SMK Negeri 1 Bandung Berhasil Meraih Juara 1 pada lomba baris berbaris yang di adakan MAN 2 Kota Bandung.',
        'foto_prestasi' => 'galeri-9.jpg'
    ],
        [
        'judul_prestasi' => 'Juara 1 Film Pende',
        'penyelenggara' => 'FLS3N Kab. Batang',
        'tingkat' => 'SMA/SMK/MA sederajat',
        'deskripsi' => 'SMK Negeri 1 Bandung Berhasil Meraih Juara 1 pada lomba baris berbaris yang di adakan MAN 2 Kota Bandung.',
        'foto_prestasi' => 'galeri-2.jpg'
    ],
];

$total_prestasi = count($prestasi_data);
?>

<link rel="stylesheet" href="../css/prestasi.css">

<?php
?>

<div class="prestasi-page">

    <!-- HERO -->
    <section class="prestasi-hero">
        <div class="prestasi-container">

            <span class="prestasi-eyebrow">KESISWAAN</span>

            <h1>Karya & Prestasi Siswa</h1>

            <p>
                Dokumentasi berbagai pencapaian dan karya peserta didik
                sebagai bagian dari perjalanan sekolah dalam mengembangkan
                potensi, kreativitas, dan kemampuan siswa.
            </p>

        </div>
    </section>


    <!-- INTRO -->
    <section class="prestasi-intro">
        <div class="prestasi-container">

            <div class="prestasi-intro-grid">

                <div class="prestasi-intro-text">

                    <span class="prestasi-section-label">
                        PRESTASI SISWA
                    </span>

                    <h2>
                        Berkarya, Berprestasi,
                        dan Terus Berkembang
                    </h2>

                    <p>
                        Setiap pencapaian merupakan bagian dari proses belajar
                        dan pengalaman peserta didik. Prestasi yang diraih
                        menjadi dokumentasi atas berbagai kegiatan dan
                        kompetisi yang diikuti oleh siswa.
                    </p>

                </div>


                <div class="prestasi-stat">

                    <div class="prestasi-stat-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M8 4h8v3a4 4 0 0 1-8 0V4z"></path>
                            <path d="M8 6H4v1a4 4 0 0 0 4 4"></path>
                            <path d="M16 6h4v1a4 4 0 0 1-4 4"></path>
                            <path d="M12 11v5"></path>
                            <path d="M9 20h6"></path>
                            <path d="M10 16h4"></path>
                        </svg>
                    </div>

                    <span>Total Prestasi</span>

                    <strong>
                        <?php echo $total_prestasi; ?>
                    </strong>

                    <small>
                        Pencapaian siswa
                    </small>

                </div>

            </div>

        </div>
    </section>


    <!-- DAFTAR PRESTASI -->
    <section class="prestasi-content">

        <div class="prestasi-container">

            <div class="prestasi-heading">

                <div>
                    <span class="prestasi-section-label">
                        DAFTAR PRESTASI
                    </span>

                    <h2>Pencapaian Siswa</h2>
                </div>

                <p>
                    Berbagai karya dan prestasi yang telah diraih
                    peserta didik dalam berbagai bidang.
                </p>

            </div>


            <?php if($total_prestasi > 0): ?>

                <div class="prestasi-grid">

                    <?php foreach($prestasi_data as $row): ?>

                        <article class="prestasi-card">

                            <!-- FOTO -->
                            <?php if(!empty($row['foto_prestasi'])): ?>

                                <div class="prestasi-image">

                                    <img
                                        src="../assets/galeri/<?php echo htmlspecialchars($row['foto_prestasi']); ?>"
                                        alt="<?php echo htmlspecialchars($row['judul_prestasi']); ?>"
                                        loading="lazy"
                                    >

                                    <span class="prestasi-level">
                                        Tingkat
                                        <?php echo htmlspecialchars($row['tingkat']); ?>
                                    </span>

                                </div>

                            <?php else: ?>

                                <div class="prestasi-image prestasi-no-image">

                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 3l2.1 4.5L19 9l-3.5 3.4.8 4.8L12 15l-4.3 2.2.8-4.8L5 9l4.9-1.5L12 3z"></path>
                                    </svg>

                                    <span class="prestasi-level">
                                        Tingkat
                                        <?php echo htmlspecialchars($row['tingkat']); ?>
                                    </span>

                                </div>

                            <?php endif; ?>


                            <!-- INFORMASI -->
                            <div class="prestasi-card-body">

                                <h3>
                                    <?php echo htmlspecialchars($row['judul_prestasi']); ?>
                                </h3>


                                <div class="prestasi-organizer">

                                    <svg viewBox="0 0 24 24">
                                        <path d="M4 5h16v14H4z"></path>
                                        <path d="M8 9h8M8 13h6M8 17h4"></path>
                                    </svg>

                                    <div>
                                        <span>Penyelenggara</span>

                                        <strong>
                                            <?php echo htmlspecialchars($row['penyelenggara']); ?>
                                        </strong>
                                    </div>

                                </div>


                                <?php if(!empty($row['deskripsi'])): ?>

                                    <p class="prestasi-description">
                                        <?php
                                        echo nl2br(
                                            htmlspecialchars($row['deskripsi'])
                                        );
                                        ?>
                                    </p>

                                <?php endif; ?>

                            </div>

                        </article>

                    <?php endforeach; ?>

                </div>


            <?php else: ?>

                <div class="prestasi-empty">

                    <svg viewBox="0 0 24 24">
                        <path d="M12 3l2.1 4.5L19 9l-3.5 3.4.8 4.8L12 15l-4.3 2.2.8-4.8L12 15l-4.3 2.2.8-4.8L5 9l4.9-1.5L12 3z"></path>
                    </svg>

                    <h3>Belum Ada Data Prestasi</h3>

                    <p>
                        Data prestasi siswa belum tersedia.
                    </p>

                </div>

            <?php endif; ?>

        </div>

    </section>


    <!-- CLOSING -->
    <section class="prestasi-closing">

        <div class="prestasi-container">

            <div class="prestasi-closing-box">

                <span>KESISWAAN</span>

                <h2>
                    Setiap Prestasi Dimulai
                    dari Sebuah Proses
                </h2>

                <p>
                    Belajar, mencoba, berlatih, dan terus berkembang menjadi
                    bagian dari perjalanan siswa dalam meraih pencapaian.
                </p>

            </div>

        </div>

    </section>

</div>


<?php include '../includes/footer.php'; ?>