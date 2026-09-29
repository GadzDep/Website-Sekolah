CREATE DATABASE IF NOT EXISTS db_sekolah CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE db_sekolah;

CREATE TABLE IF NOT EXISTS admins (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  nama VARCHAR(100) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS school_profile (
  id TINYINT UNSIGNED PRIMARY KEY,
  nama_sekolah VARCHAR(150) NOT NULL,
  nama_singkat VARCHAR(100) NOT NULL,
  npsn VARCHAR(30) DEFAULT '',
  jenjang VARCHAR(100) DEFAULT '',
  status_sekolah VARCHAR(50) DEFAULT '',
  akreditasi VARCHAR(20) DEFAULT '',
  alamat TEXT,
  kecamatan VARCHAR(100) DEFAULT '',
  kota VARCHAR(100) DEFAULT '',
  provinsi VARCHAR(100) DEFAULT '',
  kode_pos VARCHAR(20) DEFAULT '',
  telepon VARCHAR(50) DEFAULT '',
  email VARCHAR(150) DEFAULT '',
  website VARCHAR(200) DEFAULT '',
  deskripsi TEXT,
  sambutan TEXT,
  nama_kepsek VARCHAR(150) DEFAULT '',
  jabatan_kepsek VARCHAR(100) DEFAULT ''
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS school_stats (
  id TINYINT UNSIGNED PRIMARY KEY,
  total_siswa INT UNSIGNED NOT NULL DEFAULT 0,
  total_rombel INT UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS guru (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nip VARCHAR(40) NOT NULL,
  nama VARCHAR(150) NOT NULL,
  jabatan_mapel VARCHAR(150) NOT NULL,
  foto VARCHAR(255) DEFAULT '',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS program_keahlian (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  kode VARCHAR(30) NOT NULL,
  nama VARCHAR(150) NOT NULL,
  bidang VARCHAR(150) DEFAULT '',
  deskripsi TEXT,
  urutan INT DEFAULT 0
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS fasilitas (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(150) NOT NULL,
  deskripsi TEXT,
  gambar VARCHAR(255) DEFAULT '',
  urutan INT DEFAULT 0
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS pengumuman (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  judul VARCHAR(200) NOT NULL,
  isi TEXT NOT NULL,
  tanggal DATE NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS berita (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  judul VARCHAR(220) NOT NULL,
  isi LONGTEXT NOT NULL,
  gambar VARCHAR(255) DEFAULT '',
  tanggal DATE NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS agenda (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  judul VARCHAR(220) NOT NULL,
  tanggal_kegiatan DATE NOT NULL,
  lokasi VARCHAR(150) DEFAULT '',
  keterangan TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS galeri (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  judul_kegiatan VARCHAR(200) NOT NULL,
  foto VARCHAR(255) DEFAULT '',
  deskripsi TEXT,
  tanggal DATE DEFAULT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS prestasi (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  judul_prestasi VARCHAR(220) NOT NULL,
  penyelenggara VARCHAR(180) DEFAULT '',
  tingkat VARCHAR(100) DEFAULT '',
  deskripsi TEXT,
  foto_prestasi VARCHAR(255) DEFAULT '',
  tahun YEAR DEFAULT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

INSERT INTO admins (username,password,nama) VALUES
('admin','$2y$12$E4CE7ue3aLxK/33.6kjqBe0K/F3DZVEa3mSOlDZNcirSvLIunjHxW','Administrator')
ON DUPLICATE KEY UPDATE username=username;

INSERT INTO school_profile (id,nama_sekolah,nama_singkat,npsn,jenjang,status_sekolah,akreditasi,alamat,kecamatan,kota,provinsi,kode_pos,telepon,email,website,deskripsi,sambutan,nama_kepsek,jabatan_kepsek) VALUES
(1,'SMK Negeri 1 Bandung','SMKN 1 Bandung','20219163','Sekolah Menengah Kejuruan (SMK)','Negeri','A','Jl. Wastukancana No. 3, Bandung, Jawa Barat','Sumur Bandung','Bandung','Jawa Barat','40117','(022) 4204514','info@smkn1bandung.sch.id','smkn1bandung.sch.id','SMK Negeri 1 Bandung merupakan satuan pendidikan menengah kejuruan yang menyelenggarakan pendidikan untuk mengembangkan kompetensi, keterampilan, karakter, dan kesiapan peserta didik menghadapi dunia kerja maupun pendidikan lanjutan.','Selamat datang di website resmi sekolah kami. Website ini hadir sebagai media informasi dan komunikasi bagi seluruh warga sekolah serta masyarakat umum. Semoga kehadiran website ini dapat memberikan informasi yang akurat, transparan, dan mudah diakses mengenai berbagai kegiatan serta perkembangan sekolah.','Dra. Lilis Yuyun, M.M.Pd','Kepala SMK Negeri 1 Bandung')
ON DUPLICATE KEY UPDATE nama_sekolah=VALUES(nama_sekolah);

INSERT INTO school_stats (id,total_siswa,total_rombel) VALUES (1,1524,39)
ON DUPLICATE KEY UPDATE id=id;

INSERT INTO program_keahlian (kode,nama,bidang,deskripsi,urutan) VALUES
('AKL','Akuntansi Keuangan dan Lembaga','Akuntansi & Keuangan','Program keahlian yang mempelajari pengelolaan keuangan, pencatatan transaksi, akuntansi, administrasi keuangan, serta penyusunan laporan keuangan.',1),
('MPLB','Manajemen Perkantoran dan Layanan Bisnis','Manajemen & Bisnis','Program keahlian yang membekali peserta didik dengan kemampuan administrasi perkantoran, pengelolaan dokumen, pelayanan bisnis, komunikasi, dan pengelolaan kegiatan perkantoran.',2),
('PM','Pemasaran','Pemasaran & Penjualan','Program keahlian yang mempelajari strategi pemasaran, pelayanan konsumen, penjualan, pengelolaan produk, komunikasi bisnis, serta pemasaran melalui berbagai media.',3),
('ULP','Usaha Layanan Pariwisata','Pariwisata','Program keahlian yang membekali peserta didik dengan kompetensi di bidang pariwisata, pelayanan wisata, perjalanan, komunikasi, serta pengelolaan layanan wisata.',4);

INSERT INTO pengumuman (judul,isi,tanggal) VALUES
('Pengumuman Libur Sekolah','Diberitahukan kepada seluruh siswa bahwa kegiatan pembelajaran diliburkan sesuai dengan kalender pendidikan yang berlaku.','2026-09-20'),
('Pelaksanaan Asesmen Sekolah','Seluruh siswa diharapkan mempersiapkan diri untuk mengikuti kegiatan asesmen sekolah sesuai jadwal yang telah ditentukan.','2026-09-18');

INSERT INTO berita (judul,isi,gambar,tanggal) VALUES
('SMKN 1 Bandung Raih Prestasi Tingkat Kabupaten','Siswa SMKN 1 Bandung kembali menorehkan prestasi membanggakan melalui berbagai kompetisi dan kegiatan akademik maupun nonakademik.','berita-1.jpg','2026-09-22'),
('Kegiatan Pembelajaran dan Projek Siswa','Berbagai kegiatan pembelajaran berbasis projek terus dilaksanakan untuk meningkatkan kompetensi, kreativitas, dan karakter peserta didik.','berita-2.jpg','2026-09-15');

INSERT INTO agenda (judul,tanggal_kegiatan,lokasi,keterangan) VALUES
('Rapat Evaluasi Program Sekolah','2026-09-28','Ruang Rapat','Evaluasi pelaksanaan program dan kegiatan sekolah.'),
('Kegiatan Projek Peserta Didik','2026-10-05','Lingkungan Sekolah','Pelaksanaan kegiatan projek dan pengembangan kompetensi siswa.');

INSERT INTO galeri (judul_kegiatan,foto,deskripsi,tanggal) VALUES
('ANGGOTA PASKIBRAKA','galeri-1.jpg','Anggota Paskibraka SMK Negeri 1 Bandung.','2026-09-01'),
('JUARA 1 TOURISM QUIZ','galeri-2.jpg','Meraih Juara 1 pada ajang lomba tourism quiz.','2026-09-02'),
('JUARA 1 OLIMPIADE AKUNTANSI','galeri-3.jpg','Meraih Juara 1 pada ajang olimpiade akuntansi.','2026-09-03'),
('LOMBA PASKIBRA TINGKAT PROVINSI','galeri-4.jpg','Mengikuti ajang lomba paskibra tingkat provinsi.','2026-09-04'),
('JUARA 2 & 3 KOMPETISI BAHASA KOREA','galeri-5.jpg','Meraih Juara 2 & 3 pada kompetisi bahasa korea.','2026-09-05'),
('JUARA 3 NASIONAL OLIMPIADE PARIWISATA','galeri-6.jpg','Meraih Juara 3 olimpiade pariwisata tingkat nasional.','2026-09-06'),
('LABSCHOOL UPI CHAMPIONSHIP','galeri-7.jpg','Mengikuti ajang LABSCHOOL UPI CHAMPIONSHIP.','2026-09-07'),
('PENCAK SILAT TOURNAMENT','galeri-8.jpg','Mengikuti ajang Pencak Silat Tournament.','2026-09-08'),
('JUARA 1 PASKIBRA PORVINSI','galeri-9.jpg','Meraih Juara 1 pada ajang lomba Paskibra Provinsi.','2026-09-09');

INSERT INTO prestasi (judul_prestasi,penyelenggara,tingkat,deskripsi,foto_prestasi,tahun) VALUES
('Juara 1 Tourism Quiz','Politeknik Negeri Bandung (POLBAN)','Nasional','SMK Negeri 1 Bandung Berhasil Meraih Juara 1 pada lomba Tourism Quiz yang di adakan Politeknik Negeri Bandung (POLBAN).','galeri-2.jpg',2026),
('Juara 1 Olimpiade Akuntansi','Universitas Koperasi Indonesia (IKOPIN)','SMA/SMK/MA sederajat','SMK Negeri 1 Bandung Berhasil Meraih Juara 1 pada olimpiade yang di adakan Universitas Koperasi Indonesia (IKOPIN).','galeri-3.jpg',2026),
('Juara 2 & 3 Kompetisi Bahasa Korea','UNIKOM','SMA/SMK/MA sederajat','SMK Negeri 1 Bandung Berhasil Meraih Juara 2 dan 3 pada kompetisi bahasa korea yang di adakan UNIKOM.','galeri-5.jpg',2026),
('Juara 3 Olimpiade Pariwisata','Sekolah Vokasi Universitas Gadjah Mada.','SMA/SMK/MA sederajat','SMK Negeri 1 Bandung Berhasil Meraih Juara 3 pada olimpiade yang di adakan Universitas Gadjah Mada.','galeri-6.jpg',2026),
('Juara 1 Paskibra','MAN 2 Kota Bandung','SMA/SMK/MA sederajat','SMK Negeri 1 Bandung Berhasil Meraih Juara 1 pada lomba baris berbaris yang di adakan MAN 2 Kota Bandung.','galeri-9.jpg',2026),
('Juara 1 Film Pende','FLS3N Kab. Batang','SMA/SMK/MA sederajat','SMK Negeri 1 Bandung Berhasil Meraih Juara 1 pada lomba baris berbaris yang di adakan MAN 2 Kota Bandung.','galeri-2.jpg',2026);
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('198501012010011001','Dra. Lilis Yuyun, M.M.Pd','Kepala Sekolah','kepsek.jpg');
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('196909141994121001','Rahmat Riyadi, M.Pd, M.Pd','Wakasek Sarpras','rahmat.jpg');
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('197806172009021001','Hendi Susanto, M.Pd','Wakasek Hubinmas','hendi.jpg');
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('197309212014081001','Enjang Maman, M.Ag','Wakasek Kurikulum','enjang.jpg');
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('198112302009021001','Roni Suryana Saputra, M.Pd','Wakasek Kesiswaan','roni.jpg');
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('197904102006042012','Anni Supriatini, M.M.Pd','Koordinator TEFA','anni.jpg');
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('197211152006042009','Nine Novianti, S.Pd','Koordinator TPMPS','nine.jpg');
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('197403142005012012','Risya Fahrisa, SE','Kepala Program AKL','risya.jpg');
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('197410031998022001','Yosi Andriani,SST.Par','Kepala Program ULP','yosi.jpg');
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('197005031997022002','Teti Heryati, M.Pd','Kepala Program Pemasaran','teti.jpg');
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('198702102010012005','Wini Guswiani, M.Pd','Kepala Program MPLB','winni.jpg');
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('196805041992032006','Dra. Pupung Pursita','Staff BLU','pupung.jpg');
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('197308112008011003','Widdy Maryodia, S.Pd.M.M','Guru Kejuruan AKL','widdy.jpg');
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('198210022024212011','Yati Sumiati, S.Pd','Staff Kesiswaan','yati.jpg');
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('199707052024212030','Tri Yuliningsih, S.Pd.','Guru Kejuruan AKL','tri.jpg');
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('199608062024212031','Alustia Sri Fadhilah, S.Pd.','Staff BLU','alustia.jpg');
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('199606252024212025','Gilang Rossalinda, S.Pd','Guru Kejuruan AKL','gilang.jpg');
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('198803212023212008','Nunung Nurjanah , S.Pd','Guru Kejuruan AKL','nunung.jpg');
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('199105232023212021','Sri Mulyati, S.Pd','Staff Hubinmas','sri.jpg');
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('199008032024212015','Geni Gurnisa, S.Pd.','Guru Kejuruan AKL','geni.jpg');
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('198512182024212022','Rika Sartika, S.Pd','Guru Kejuruan AKL','rika.jpg');
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('197806172009021001','Hendi Susanto, M.Pd','Wakasek Hubinmas','hendi.jpg');
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('197810042009022004','Rohanni Wulandari, S.Pd','Guru Kejuruan PM','rohanni.jpg');
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('197803082009022001','Iis Neni Suryani, S.Pd','Guru Kejuruan PM','iis.jpg');
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('1980070320100012008','Yuli Sugiantini, S. Pd., M.Pd','Guru Kejuruan PM','yuli.jpg');
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('197211202022212005','Eri Setiawati,S.Pd','Staff Kurikulum','eri.jpg');
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('198205302009022001','Heni Nurhaeni, S.Pd','Guru Kejuruan PM','heni.jpg');
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('197411301999032004','Yuliati, SE.Par, MM','Guru Kejuruan ULP','yuliati.jpg');
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('199208142019031018','Damar Wicaksana, S.Par','Guru Kejuruan ULP','damar.jpg');
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('197506132024212002','Shanty Yuwartanty','Guru Kejuruan MPLB','shanty.jpg');
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('199311182024212018','Novi Hermawati, S.Pd','Guru Kejuruan MPLB','novi.jpg');
INSERT INTO guru (nip,nama,jabatan_mapel,foto) VALUES ('199606022022212004','Linda Roudhotus S, S.Pd','Staff TPMPS','linda.jpg');
INSERT INTO fasilitas (nama,deskripsi,gambar,urutan) VALUES ('Aula Bawah / Kelas','Ruang serbaguna yang luas dan fleksibel,
                            dapat digunakan untuk kegiatan pembelajaran
                            bersama, rapat, maupun acara pertemuan siswa.','https://cdn.smkn1bandung.sch.id/uploads/fasilitas/1760606971_img-20230713-071111.jpg',1);
INSERT INTO fasilitas (nama,deskripsi,gambar,urutan) VALUES ('Laboratorium Digital Marketing','Laboratorium komputer modern yang dilengkapi
                            dengan perangkat lunak pendukung analisis pasar,
                            strategi pemasaran digital, dan pengelolaan
                            media sosial.','https://cdn.smkn1bandung.sch.id/uploads/fasilitas/1760606714_img-20230712-080049.jpg',2);
INSERT INTO fasilitas (nama,deskripsi,gambar,urutan) VALUES ('Lapangan Sekolah','Area terbuka yang luas untuk menunjang kegiatan
                            olahraga, upacara bendera, serta berbagai
                            aktivitas ekstrakurikuler outdoor.','https://cdn.smkn1bandung.sch.id/uploads/fasilitas/1760606560_img-20230713-070539.jpg',3);
INSERT INTO fasilitas (nama,deskripsi,gambar,urutan) VALUES ('Laboratorium ULP (Unit Layanan Pariwisata)','Ruang simulasi usaha perjalanan wisata untuk
                            melatih siswa dalam perencanaan tur, reservasi
                            tiket, dan layanan pemanduan wisata.','https://cdn.smkn1bandung.sch.id/uploads/fasilitas/1761899061_travel.jpg',4);
INSERT INTO fasilitas (nama,deskripsi,gambar,urutan) VALUES ('Ruang Video Conference','Ruang rapat interaktif berbasis teknologi tinggi
                            untuk menunjang kegiatan pembelajaran jarak jauh,
                            seminar hybrid, dan komunikasi dengan mitra industri.','https://cdn.smkn1bandung.sch.id/uploads/fasilitas/1761899454_vicon.jpg',5);
INSERT INTO fasilitas (nama,deskripsi,gambar,urutan) VALUES ('Laboratorium AKL (Akuntansi dan Keuangan Lembaga)','Ruang praktik akuntansi yang dilengkapi perangkat
                            komputer dan perangkat lunak pembukuan keuangan
                            standar industri.','https://cdn.smkn1bandung.sch.id/uploads/fasilitas/1761899255_lab-akl.jpg',6);
INSERT INTO fasilitas (nama,deskripsi,gambar,urutan) VALUES ('Teaching Factory','Sarana pembelajaran berbasis produksi nyata
                            yang menyelaraskan standar industri dengan
                            proses belajar mengajar siswa di sekolah.','https://cdn.smkn1bandung.sch.id/uploads/fasilitas/1761898984_teaching-factory.jpg',7);
INSERT INTO fasilitas (nama,deskripsi,gambar,urutan) VALUES ('Mesjid','Sarana ibadah yang bersih dan nyaman untuk
                            menunjang kegiatan keagamaan serta pembinaan
                            karakter spiritual seluruh warga sekolah.','https://cdn.smkn1bandung.sch.id/uploads/fasilitas/1761898922_mesjid.jpg',8);
INSERT INTO fasilitas (nama,deskripsi,gambar,urutan) VALUES ('Ruang Podcast','Studio rekam audio-visual profesional yang
                            dilengkapi peralatan mutakhir untuk pembuatan
                            konten kreatif, wawancara, dan media informasi sekolah.','https://cdn.smkn1bandung.sch.id/uploads/fasilitas/1761898886_r-podcast.jpg',9);
INSERT INTO fasilitas (nama,deskripsi,gambar,urutan) VALUES ('Laboratorium Ritel','Ruang simulasi minimarket atau toko ritel untuk
                            melatih keterampilan manajemen persediaan,
                            kasir, dan penataan produk.','https://cdn.smkn1bandung.sch.id/uploads/fasilitas/1762142855_lab-ritel-edit.jpg',10);
INSERT INTO fasilitas (nama,deskripsi,gambar,urutan) VALUES ('Travel','Unit praktikum usaha layanan biro perjalanan
                            wisata yang dikelola langsung oleh siswa untuk
                            memberikan pengalaman kerja nyata.','https://cdn.smkn1bandung.sch.id/uploads/fasilitas/1761899061_travel.jpg',11);
INSERT INTO fasilitas (nama,deskripsi,gambar,urutan) VALUES ('Ruang UKS','Fasilitas kesehatan sekolah yang bersih dan
                            nyaman untuk memberikan pertolongan pertama
                            serta perawatan medis dasar bagi siswa dan staf.','https://cdn.smkn1bandung.sch.id/uploads/fasilitas/1761898731_ruks.jpg',12);
INSERT INTO fasilitas (nama,deskripsi,gambar,urutan) VALUES ('Ruang Kebugaran','Area khusus yang dilengkapi dengan berbagai
                            peralatan olahraga untuk menjaga kesehatan fisik
                            dan kebugaran civitas akademika.','https://cdn.smkn1bandung.sch.id/uploads/fasilitas/1761898668_rkebugaran.jpg',13);
INSERT INTO fasilitas (nama,deskripsi,gambar,urutan) VALUES ('Kantin','Area bersih dan higienis yang menyediakan
                            aneka makanan serta minuman sehat untuk kebutuhan
                            konsumsi seluruh warga sekolah.','https://cdn.smkn1bandung.sch.id/uploads/fasilitas/1761898577_kantin.jpg',14);
INSERT INTO fasilitas (nama,deskripsi,gambar,urutan) VALUES ('Pendopo','Area bersantai berarsitektur tradisional yang
                            asri, cocok untuk tempat diskusi, kegiatan
                            ekstrakurikuler, atau sekadar beristirahat.','https://cdn.smkn1bandung.sch.id/uploads/fasilitas/1761898500_pendopo.jpg',15);
INSERT INTO fasilitas (nama,deskripsi,gambar,urutan) VALUES ('MICE','Ruang simulasi pengelolaan acara, rapat,
                            dan pameran profesional sesuai standar
                            industri MICE.','https://cdn.smkn1bandung.sch.id/uploads/fasilitas/1762212359_mice.jpg',16);
INSERT INTO fasilitas (nama,deskripsi,gambar,urutan) VALUES ('Bank Pundi','Sarana praktik perbankan dan transaksi keuangan
                            bagi siswa untuk memahami operasional dasar
                            perbankan secara langsung.','https://cdn.smkn1bandung.sch.id/uploads/fasilitas/1761898212_bank-pundi.jpg',17);
INSERT INTO fasilitas (nama,deskripsi,gambar,urutan) VALUES ('Aula','Gedung pertemuan berkapasitas besar yang
                            ditunjang dengan sistem pencahayaan dan tata
                            suara memadai untuk acara pertunjukan,
                            wisuda, atau seminar.','https://cdn.smkn1bandung.sch.id/uploads/fasilitas/1775025250_aula-atas-pembaharuan.png',18);
INSERT INTO fasilitas (nama,deskripsi,gambar,urutan) VALUES ('Toilet','Fasilitas sanitasi yang bersih, terawat,
                            dan terpisah untuk menjaga kenyamanan
                            seluruh warga sekolah.','https://cdn.smkn1bandung.sch.id/uploads/fasilitas/1760606971_img-20230713-071111.jpg',19);
INSERT INTO fasilitas (nama,deskripsi,gambar,urutan) VALUES ('Coworking Space','Area kerja kolaboratif yang nyaman dan modern
                            untuk mendukung kerja kelompok, diskusi proyek,
                            atau belajar mandiri secara kreatif.','https://cdn.smkn1bandung.sch.id/uploads/fasilitas/1760606714_img-20230712-080049.jpg',20);
INSERT INTO fasilitas (nama,deskripsi,gambar,urutan) VALUES ('Lab Digital Marketing','Laboratorium komputer modern yang dilengkapi dengan perangkat lunak pendukung analisis pasar, strategi pemasaran digital, dan pengelolaan media sosial.','https://cdn.smkn1bandung.sch.id/uploads/fasilitas/1760606560_img-20230713-070539.jpg',21);
