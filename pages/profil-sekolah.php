<?php
require_once __DIR__ . '/../config/database.php';
include '../includes/header.php';
$profile=$conn->query('SELECT * FROM school_profile WHERE id=1')->fetch_assoc() ?: [];
$stats=$conn->query('SELECT * FROM school_stats WHERE id=1')->fetch_assoc() ?: ['total_siswa'=>0,'total_rombel'=>0];
$total_guru=(int)$conn->query('SELECT COUNT(*) c FROM guru')->fetch_assoc()['c'];
$total_program=(int)$conn->query('SELECT COUNT(*) c FROM program_keahlian')->fetch_assoc()['c'];
?>
<div class="profile-page">
<section class="profile-hero"><div class="container"><span class="profile-label">PROFIL SEKOLAH</span><h1><?= e($profile['nama_sekolah']??'SMK Negeri 1 Bandung') ?></h1><p><?= e($profile['deskripsi']??'Mengenal lebih dekat identitas, informasi, dan karakteristik sekolah.') ?></p></div></section>
<section class="profile-intro"><div class="container"><div class="profile-intro-grid"><div class="profile-intro-heading"><span>TENTANG SEKOLAH</span><h2>Mengenal Sekolah<br>Lebih Dekat</h2></div><div class="profile-intro-text"><p><?= nl2br(e($profile['deskripsi']??'')) ?></p><p>Halaman profil ini menyajikan informasi umum mengenai identitas sekolah, alamat, kontak, serta data pendidikan sebagai gambaran sekolah.</p></div></div></div></section>
<section class="profile-data-section"><div class="container"><div class="profile-section-heading"><div><span>IDENTITAS SEKOLAH</span><h2>Informasi Profil Sekolah</h2></div><p>Informasi umum mengenai identitas dan data dasar sekolah.</p></div><div class="profile-table-wrapper"><div class="profile-table-header"><div><span>DATA SEKOLAH</span><strong>Identitas Satuan Pendidikan</strong></div><div class="profile-table-badge">PROFIL</div></div><div class="profile-table-container"><table class="profile-table"><tbody>
<?php $rows=[['Nama Sekolah','nama_sekolah'],['Nama Singkat','nama_singkat'],['NPSN','npsn'],['Jenjang Pendidikan','jenjang'],['Status Sekolah','status_sekolah'],['Akreditasi','akreditasi'],['Alamat Sekolah','alamat'],['Kecamatan','kecamatan'],['Kota','kota'],['Provinsi','provinsi'],['Kode Pos','kode_pos'],['Telepon','telepon'],['Email','email'],['Website','website']]; foreach($rows as [$label,$field]): ?><tr><th><?= e($label) ?></th><td><?= e($profile[$field]??'') ?></td></tr><?php endforeach; ?>
</tbody></table></div></div></div></section>
<section class="profile-statistics"><div class="container"><div class="profile-statistics-heading"><span>DATA SEKOLAH</span><h2>Sekilas dalam Angka</h2><p>Gambaran singkat mengenai sumber daya dan lingkungan pendidikan sekolah.</p></div><div class="profile-statistics-grid">
<?php $cards=[['01',$total_guru,'Guru','Tenaga pendidik yang mendukung proses pembelajaran dan pengembangan peserta didik.'],['02',$stats['total_siswa'],'Siswa','Peserta didik yang mengikuti kegiatan pendidikan di sekolah.'],['03',$stats['total_rombel'],'Rombel','Rombongan belajar yang menjadi bagian dari kegiatan pembelajaran sekolah.'],['04',$total_program,'Program Keahlian','Program keahlian yang diselenggarakan sesuai bidang pendidikan kejuruan.']]; foreach($cards as $c): ?><div class="profile-stat-card"><div class="profile-stat-top"><span><?= e($c[0]) ?></span><span>◉</span></div><strong><?= e($c[1]) ?></strong><h3><?= e($c[2]) ?></h3><p><?= e($c[3]) ?></p></div><?php endforeach; ?>
</div></div></section>
<section class="profile-additional"><div class="container"><div class="profile-additional-box"><div class="profile-additional-intro"><span>KARAKTER SEKOLAH</span><h2>Pendidikan yang Berorientasi pada Kompetensi</h2></div><div class="profile-additional-list"><div class="profile-additional-item"><div class="profile-additional-number">01</div><div><h3>Pendidikan Kejuruan</h3><p>Menyelenggarakan pendidikan yang mengembangkan pengetahuan dan keterampilan sesuai bidang keahlian peserta didik.</p></div></div><div class="profile-additional-item"><div class="profile-additional-number">02</div><div><h3>Pengembangan Kompetensi</h3><p>Mendorong peserta didik untuk mengembangkan kompetensi melalui pembelajaran teori, praktik, dan pengalaman kerja.</p></div></div><div class="profile-additional-item"><div class="profile-additional-number">03</div><div><h3>Pembentukan Karakter</h3><p>Membentuk peserta didik yang memiliki tanggung jawab, kedisiplinan, etika, dan karakter positif.</p></div></div></div></div></div></section>
<section class="profile-closing"><div class="container"><div class="profile-closing-inner"><span>PROFIL SEKOLAH</span><h2>Mengenal Sekolah Lebih Dekat</h2><p>Informasi profil sekolah memberikan gambaran mengenai identitas, data, dan karakteristik sekolah sebagai bagian dari lingkungan pendidikan kejuruan.</p></div></div></section></div>
<style>

/* =============================================================
   HERO
============================================================= */

.profile-hero {
    padding: 130px 0 110px;
    background: #071b33;
}

.profile-label {
    display: inline-block;

    margin-bottom: 18px;

    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2px;

    color: #6f7780;
}

.profile-hero h1 {
    max-width: 900px;

    margin: 0;

    font-size: clamp(42px, 6vw, 78px);
    line-height: 1.02;

    letter-spacing: -2.5px;

    color: #ffffff;
}

.profile-hero p {
    max-width: 680px;

    margin: 28px 0 0;

    font-size: 17px;
    line-height: 1.8;

    color: #ffffff;
}


/* =============================================================
   INTRO
============================================================= */

.profile-intro {
    padding: 110px 0;

    background: #ffffff;
}

.profile-intro-grid {
    display: grid;

    grid-template-columns:
        minmax(0, 0.9fr)
        minmax(0, 1.1fr);

    gap: 90px;

    align-items: start;
}

.profile-intro-heading span,
.profile-section-heading span,
.profile-statistics-heading span,
.profile-additional-intro span {
    display: block;

    margin-bottom: 18px;

    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1.8px;

    color: #7b838b;
}

.profile-intro-heading h2 {
    max-width: 500px;

    margin: 0;

    font-size: clamp(32px, 4vw, 52px);
    line-height: 1.08;

    letter-spacing: -1.5px;

    color: #071b33;
}

.profile-intro-text {
    max-width: 680px;
}

.profile-intro-text p {
    margin: 0 0 22px;

    font-size: 16px;
    line-height: 1.9;

    color: #071b33;
}

.profile-intro-text p:last-child {
    margin-bottom: 0;
}


/* =============================================================
   DATA SEKOLAH
============================================================= */

.profile-data-section {
    padding: 110px 0;

    background: #f5f6f7;
}

.profile-section-heading {
    display: grid;

    grid-template-columns:
        minmax(0, 1fr)
        minmax(280px, 0.7fr);

    gap: 60px;

    align-items: end;

    margin-bottom: 45px;
}

.profile-section-heading h2 {
    margin: 0;

    font-size: clamp(32px, 4vw, 50px);
    line-height: 1.08;

    letter-spacing: -1.5px;

    color: #071b33;
}

.profile-section-heading p {
    margin: 0;

    font-size: 15px;
    line-height: 1.8;

    color: #071b33;
}


/* =============================================================
   TABLE
============================================================= */

.profile-table-wrapper {
    overflow: hidden;

    background: #ffffff;

    border: 1px solid #e3e6e9;

    border-radius: 22px;

    box-shadow:
        0 15px 40px rgba(0, 0, 0, 0.04);
}

.profile-table-header {
    display: flex;

    align-items: center;
    justify-content: space-between;

    gap: 20px;

    padding: 25px 30px;

    border-bottom: 1px solid #e7eaed;
}

.profile-table-header span {
    display: block;

    margin-bottom: 5px;

    font-size: 10px;
    font-weight: 700;
    letter-spacing: 1.5px;

    color: #858d95;
}

.profile-table-header strong {
    display: block;

    font-size: 18px;
    font-weight: 700;

    color: #071b33;
}

.profile-table-badge {
    padding: 8px 12px;

    border-radius: 8px;

    background: #f0f2f4;

    font-size: 10px;
    font-weight: 700;
    letter-spacing: 1px;

    color: #646d76;
}

.profile-table-container {
    width: 100%;

    overflow-x: auto;
}

.profile-table {
    width: 100%;

    border-collapse: collapse;

    font-size: 14px;
}

.profile-table tr {
    border-bottom: 1px solid #edf0f2;
}

.profile-table tr:last-child {
    border-bottom: none;
}

.profile-table th,
.profile-table td {
    padding: 20px 30px;

    text-align: left;
    vertical-align: top;
}

.profile-table th {
    width: 34%;

    font-weight: 600;

    color: #4e565e;

    background: #fafbfc;
}

.profile-table td {
    color: #071b33;

    line-height: 1.6;
}


/* =============================================================
   STATISTICS
============================================================= */

.profile-statistics {
    padding: 110px 0;

    background: #ffffff;
}

.profile-statistics-heading {
    max-width: 680px;

    margin-bottom: 50px;
}

.profile-statistics-heading h2 {
    margin: 0 0 18px;

    font-size: clamp(32px, 4vw, 50px);
    line-height: 1.08;

    letter-spacing: -1.5px;

    color: #071b33;
}

.profile-statistics-heading p {
    margin: 0;

    font-size: 15px;
    line-height: 1.8;

    color: #071b33;
}

.profile-statistics-grid {
    display: grid;

    grid-template-columns:
        repeat(4, minmax(0, 1fr));

    gap: 18px;
}

.profile-stat-card {
    min-height: 300px;

    padding: 28px;

    background: #f6f7f8;

    border: 1px solid #e7eaed;

    border-radius: 20px;

    transition:
        transform 0.25s ease,
        box-shadow 0.25s ease;
}

.profile-stat-card:hover {
    transform: translateY(-4px);

    box-shadow:
        0 15px 35px rgba(0, 0, 0, 0.06);
}

.profile-stat-top {
    display: flex;

    align-items: center;
    justify-content: space-between;

    margin-bottom: 45px;
}

.profile-stat-top span {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1.5px;

    color: #071b33;
}

.profile-stat-top svg {
    width: 24px;
    height: 24px;

    fill: none;

    stroke: #4e565e;

    stroke-width: 1.5;

    stroke-linecap: round;
    stroke-linejoin: round;
}

.profile-stat-card strong {
    display: block;

    margin-bottom: 5px;

    font-size: 42px;
    line-height: 1;

    letter-spacing: -1.5px;

    color: #071b33;
}

.profile-stat-card h3 {
    margin: 0 0 15px;

    font-size: 18px;

    color: #30363c;
}

.profile-stat-card p {
    margin: 0;

    font-size: 13px;
    line-height: 1.7;

    color: #737c84;
}


/* =============================================================
   ADDITIONAL
============================================================= */

.profile-additional {
    padding: 110px 0;

    background: #f5f6f7;
}

.profile-additional-box {
    display: grid;

    grid-template-columns:
        minmax(0, 0.75fr)
        minmax(0, 1.25fr);

    gap: 80px;

    padding: 55px;

    background: #ffffff;

    border: 1px solid #e4e7ea;

    border-radius: 24px;
}

.profile-additional-intro h2 {
    margin: 0;

    font-size: clamp(32px, 4vw, 48px);
    line-height: 1.08;

    letter-spacing: -1.5px;

    color: #071b33;
}

.profile-additional-list {
    display: flex;

    flex-direction: column;
}

.profile-additional-item {
    display: grid;

    grid-template-columns: 55px 1fr;

    gap: 20px;

    padding: 25px 0;

    border-bottom: 1px solid #edf0f2;
}

.profile-additional-item:first-child {
    padding-top: 0;
}

.profile-additional-item:last-child {
    padding-bottom: 0;

    border-bottom: none;
}

.profile-additional-number {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1px;

    color: #8a9299;
}

.profile-additional-item h3 {
    margin: 0 0 8px;

    font-size: 18px;

    color: #30363c;
}

.profile-additional-item p {
    margin: 0;

    font-size: 14px;
    line-height: 1.75;

    color: #737c84;
}


/* =============================================================
   CLOSING
============================================================= */

.profile-closing {
    padding: 120px 0;

    background: #071b33;

    color: #ffffff;
}

.profile-closing-inner {
    max-width: 800px;
}

.profile-closing-inner span {
    display: block;

    margin-bottom: 20px;

    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2px;

    color: #aeb4ba;
}

.profile-closing-inner h2 {
    margin: 0 0 25px;

    font-size: clamp(38px, 5vw, 64px);
    line-height: 1.05;

    letter-spacing: -2px;

    color: #ffffff;
}

.profile-closing-inner p {
    max-width: 650px;

    margin: 0;

    font-size: 16px;
    line-height: 1.8;

    color: #b8bdc2;
}


/* =============================================================
   TABLET
============================================================= */




/* =============================================================
   MOBILE
============================================================= */




/* =============================================================
   SMALL MOBILE
============================================================= */



</style>


<?php include '../includes/footer.php'; ?>