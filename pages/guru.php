<?php
include '../includes/header.php';

$guru_data = [
    [
        'nip' => '198501012010011001',
        'nama_guru' => 'Dra. Lilis Yuyun, M.M.Pd',
        'jabatan_mapel' => 'Kepala Sekolah',
        'foto' => 'kepsek.jpg'
    ],
    [
        'nip' => '196909141994121001',
        'nama_guru' => 'Rahmat Riyadi, M.Pd, M.Pd',
        'jabatan_mapel' => 'Wakasek Sarpras',
        'foto' => 'rahmat.jpg'
    ],
    [
        'nip' => '197806172009021001',
        'nama_guru' => 'Hendi Susanto, M.Pd',
        'jabatan_mapel' => 'Wakasek Hubinmas',
        'foto' => 'hendi.jpg'
    ],
    [
        'nip' => '197309212014081001',
        'nama_guru' => 'Enjang Maman, M.Ag',
        'jabatan_mapel' => 'Wakasek Kurikulum',
        'foto' => 'enjang.jpg'
    ],
    [
        'nip' => '198112302009021001',
        'nama_guru' => 'Roni Suryana Saputra, M.Pd',
        'jabatan_mapel' => 'Wakasek Kesiswaan',
        'foto' => 'roni.jpg'
    ],
    [
        'nip' => '197904102006042012',
        'nama_guru' => 'Anni Supriatini, M.M.Pd',
        'jabatan_mapel' => 'Koordinator TEFA',
        'foto' => 'anni.jpg'
    ],
    [
        'nip' => '197211152006042009',
        'nama_guru' => 'Nine Novianti, S.Pd',
        'jabatan_mapel' => 'Koordinator TPMPS',
        'foto' => 'nine.jpg'
    ],
    [
        'nip' => '197403142005012012',
        'nama_guru' => 'Risya Fahrisa, SE',
        'jabatan_mapel' => 'Kepala Program AKL',
        'foto' => 'risya.jpg'
    ],
    [
        'nip' => '197410031998022001',
        'nama_guru' => 'Yosi Andriani,SST.Par',
        'jabatan_mapel' => 'Kepala Program ULP',
        'foto' => 'yosi.jpg'
    ],
    [
        'nip' => '197005031997022002',
        'nama_guru' => 'Teti Heryati, M.Pd',
        'jabatan_mapel' => 'Kepala Program Pemasaran',
        'foto' => 'teti.jpg'
    ],
    [
        'nip' => '198702102010012005',
        'nama_guru' => 'Wini Guswiani, M.Pd',
        'jabatan_mapel' => 'Kepala Program MPLB',
        'foto' => 'winni.jpg'
    ],
    [
        'nip' => '196805041992032006',
        'nama_guru' => 'Dra. Pupung Pursita',
        'jabatan_mapel' => 'Staff BLU',
        'foto' => 'pupung.jpg'
    ],
    [
        'nip' => '197308112008011003',
        'nama_guru' => 'Widdy Maryodia, S.Pd.M.M',
        'jabatan_mapel' => 'Guru Kejuruan AKL',
        'foto' => 'widdy.jpg'
    ],
    [
        'nip' => '198210022024212011',
        'nama_guru' => 'Yati Sumiati, S.Pd',
        'jabatan_mapel' => 'Staff Kesiswaan',
        'foto' => 'yati.jpg'
    ],
    [
        'nip' => '199707052024212030',
        'nama_guru' => 'Tri Yuliningsih, S.Pd.',
        'jabatan_mapel' => 'Guru Kejuruan AKL',
        'foto' => 'tri.jpg'
    ],
    [
        'nip' => '199608062024212031',
        'nama_guru' => 'Alustia Sri Fadhilah, S.Pd.',
        'jabatan_mapel' => 'Staff BLU',
        'foto' => 'alustia.jpg'
    ],
    [
        'nip' => '199606252024212025',
        'nama_guru' => 'Gilang Rossalinda, S.Pd',
        'jabatan_mapel' => 'Guru Kejuruan AKL',
        'foto' => 'gilang.jpg'
    ],
    [
        'nip' => '198803212023212008',
        'nama_guru' => 'Nunung Nurjanah , S.Pd',
        'jabatan_mapel' => 'Guru Kejuruan AKL',
        'foto' => 'nunung.jpg'
    ],
    [
        'nip' => '199105232023212021',
        'nama_guru' => 'Sri Mulyati, S.Pd',
        'jabatan_mapel' => 'Staff Hubinmas',
        'foto' => 'sri.jpg'
    ],
    [
        'nip' => '199008032024212015',
        'nama_guru' => 'Geni Gurnisa, S.Pd.',
        'jabatan_mapel' => 'Guru Kejuruan AKL',
        'foto' => 'geni.jpg'
    ],
    [
        'nip' => '198512182024212022',
        'nama_guru' => 'Rika Sartika, S.Pd',
        'jabatan_mapel' => 'Guru Kejuruan AKL',
        'foto' => 'rika.jpg'
    ],
    [
        'nip' => '197806172009021001',
        'nama_guru' => 'Hendi Susanto, M.Pd',
        'jabatan_mapel' => 'Wakasek Hubinmas',
        'foto' => 'hendi.jpg'
    ],
    [
        'nip' => '197810042009022004',
        'nama_guru' => 'Rohanni Wulandari, S.Pd',
        'jabatan_mapel' => 'Guru Kejuruan PM',
        'foto' => 'rohanni.jpg'
    ],
    [
        'nip' => '197803082009022001',
        'nama_guru' => 'Iis Neni Suryani, S.Pd',
        'jabatan_mapel' => 'Guru Kejuruan PM',
        'foto' => 'iis.jpg'
    ],
    [
        'nip' => '1980070320100012008',
        'nama_guru' => 'Yuli Sugiantini, S. Pd., M.Pd',
        'jabatan_mapel' => 'Guru Kejuruan PM',
        'foto' => 'yuli.jpg'
    ],
    [
        'nip' => '197211202022212005',
        'nama_guru' => 'Eri Setiawati,S.Pd',
        'jabatan_mapel' => 'Staff Kurikulum',
        'foto' => 'eri.jpg'
    ],
    [
        'nip' => '198205302009022001',
        'nama_guru' => 'Heni Nurhaeni, S.Pd',
        'jabatan_mapel' => 'Guru Kejuruan PM',
        'foto' => 'heni.jpg'
    ],
    [
        'nip' => '197411301999032004',
        'nama_guru' => 'Yuliati, SE.Par, MM',
        'jabatan_mapel' => 'Guru Kejuruan ULP',
        'foto' => 'yuliati.jpg'
    ],
    [
        'nip' => '199208142019031018',
        'nama_guru' => 'Damar Wicaksana, S.Par',
        'jabatan_mapel' => 'Guru Kejuruan ULP',
        'foto' => 'damar.jpg'
    ],
    [
        'nip' => '197506132024212002',
        'nama_guru' => 'Shanty Yuwartanty',
        'jabatan_mapel' => 'Guru Kejuruan MPLB',
        'foto' => 'shanty.jpg'
    ],
    [
        'nip' => '199311182024212018',
        'nama_guru' => 'Novi Hermawati, S.Pd',
        'jabatan_mapel' => 'Guru Kejuruan MPLB',
        'foto' => 'novi.jpg'
    ],
    [
        'nip' => '199606022022212004',
        'nama_guru' => 'Linda Roudhotus S, S.Pd',
        'jabatan_mapel' => 'Staff TPMPS',
        'foto' => 'linda.jpg'
    ]
];

$total_guru = count($guru_data);
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