<?php
require_once __DIR__ . '/../config/database.php';
include '../includes/header.php';
$total_guru = (int)$conn->query("SELECT COUNT(*) AS total FROM guru")->fetch_assoc()['total'];
$guru_data = $conn->query("SELECT nip,nama AS nama_guru,jabatan_mapel,foto FROM guru ORDER BY id ASC")->fetch_all(MYSQLI_ASSOC);
?>

<div class="teacher-page">

    <!-- Hero -->
    <section class="teacher-hero">
        <div class="container">

            <span class="teacher-label">PROFIL SEKOLAH</span>

            <h1>Guru & Tenaga Kependidikan</h1>

            <p>
                Mengenal para pendidik dan tenaga kependidikan yang
                menjadi bagian penting dalam mendukung proses pendidikan
                di SMK Negeri 1 Bandung.
            </p>

        </div>
    </section>


    <!-- Intro & Statistik -->
    <section class="teacher-intro">

        <div class="container">

            <div class="teacher-intro-grid">

                <div class="teacher-intro-text">

                    <span>SUMBER DAYA MANUSIA</span>

                    <h2>
                        Pendidik yang
                        Berdedikasi
                    </h2>

                    <p>
                        Guru dan tenaga kependidikan memiliki peran penting
                        dalam menciptakan lingkungan pembelajaran yang
                        berkualitas serta mendukung perkembangan potensi
                        setiap peserta didik.
                    </p>

                </div>


                <div class="teacher-stat">

                    <div class="teacher-stat-number">
                        <?php echo $total_guru; ?>
                    </div>

                    <div class="teacher-stat-info">
                        <strong>Tenaga Pendidik</strong>
                        <span>Data Guru & Tendik</span>
                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- Daftar Guru -->
    <section class="teacher-list-section">

        <div class="container">

            <div class="teacher-list-heading">

                <div>
                    <span>DAFTAR TENAGA PENDIDIK</span>

                    <h2>
                        Guru & Tenaga Kependidikan
                    </h2>
                </div>

                <p>
                    Berikut merupakan data guru dan tenaga kependidikan
                    yang terdaftar di SMK Negeri 1 Bandung.
                </p>

            </div>


            <div class="teacher-grid">

                <?php if($total_guru > 0): ?>

                    <?php foreach($guru_data as $guru): ?>

                        <?php 
                            $foto_path = !empty($guru['foto']) && 
                                file_exists('../assets/guru/' . $guru['foto']) 
                                ? '../assets/guru/' . $guru['foto'] 
                                : 'https://via.placeholder.com/400x480?text=No+Foto';
                        ?>

                        <article class="teacher-card">

                            <!-- Foto -->
                            <div class="teacher-photo">

                                <img 
                                    src="<?php echo $foto_path; ?>" 
                                    alt="<?php echo htmlspecialchars($guru['nama_guru']); ?>"
                                >

                                <div class="teacher-photo-overlay"></div>

                            </div>


                            <!-- Informasi -->
                            <div class="teacher-info">

                                <span class="teacher-role">
                                    <?php echo htmlspecialchars($guru['jabatan_mapel']); ?>
                                </span>

                                <h3>
                                    <?php echo htmlspecialchars($guru['nama_guru']); ?>
                                </h3>

                                <div class="teacher-nip">

                                    <span>NIP</span>

                                    <strong>
                                        <?php 
                                            echo !empty($guru['nip']) 
                                                ? htmlspecialchars($guru['nip']) 
                                                : '-'; 
                                        ?>
                                    </strong>

                                </div>

                            </div>

                        </article>

                    <?php endforeach; ?>

                <?php else: ?>

                    <div class="teacher-empty">

                        <div class="empty-icon">◎</div>

                        <h3>Belum Ada Data Guru</h3>

                        <p>
                            Data guru dan tenaga kependidikan belum
                            tersedia saat ini.
                        </p>

                    </div>

                <?php endif; ?>

            </div>

        </div>

    </section>

</div>

<?php include '../includes/footer.php'; ?>