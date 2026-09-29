<?php
require_once __DIR__ . '/../config/auth.php';
admin_login_required();

$modules = [
 'guru'=>['title'=>'Data Guru & Tendik','table'=>'guru','order'=>'id DESC','fields'=>[
   'nip'=>['label'=>'NIP','type'=>'text','required'=>true], 'nama'=>['label'=>'Nama Guru/Tendik','type'=>'text','required'=>true], 'jabatan_mapel'=>['label'=>'Jabatan / Mata Pelajaran','type'=>'text','required'=>true], 'foto'=>['label'=>'Foto','type'=>'image','folder'=>'guru']]],
 'program'=>['title'=>'Program Keahlian','table'=>'program_keahlian','order'=>'urutan ASC, id ASC','fields'=>[
   'kode'=>['label'=>'Kode','type'=>'text','required'=>true], 'nama'=>['label'=>'Nama Program Keahlian','type'=>'text','required'=>true], 'bidang'=>['label'=>'Bidang','type'=>'text'], 'deskripsi'=>['label'=>'Deskripsi','type'=>'textarea'], 'urutan'=>['label'=>'Urutan','type'=>'number']]],
 'fasilitas'=>['title'=>'Fasilitas Sekolah','table'=>'fasilitas','order'=>'urutan ASC, id ASC','fields'=>[
   'nama'=>['label'=>'Nama Fasilitas','type'=>'text','required'=>true], 'deskripsi'=>['label'=>'Deskripsi','type'=>'textarea'], 'gambar'=>['label'=>'Gambar / URL','type'=>'image_or_text','folder'=>'fasilitas'], 'urutan'=>['label'=>'Urutan','type'=>'number']]],
 'pengumuman'=>['title'=>'Pengumuman','table'=>'pengumuman','order'=>'tanggal DESC, id DESC','fields'=>[
   'judul'=>['label'=>'Judul','type'=>'text','required'=>true], 'isi'=>['label'=>'Isi Pengumuman','type'=>'textarea','required'=>true], 'tanggal'=>['label'=>'Tanggal','type'=>'date','required'=>true]]],
 'berita'=>['title'=>'Berita','table'=>'berita','order'=>'tanggal DESC, id DESC','fields'=>[
   'judul'=>['label'=>'Judul Berita','type'=>'text','required'=>true], 'isi'=>['label'=>'Isi Berita','type'=>'textarea','required'=>true], 'gambar'=>['label'=>'Gambar','type'=>'image','folder'=>'berita'], 'tanggal'=>['label'=>'Tanggal','type'=>'date','required'=>true]]],
 'agenda'=>['title'=>'Agenda','table'=>'agenda','order'=>'tanggal_kegiatan ASC, id ASC','fields'=>[
   'judul'=>['label'=>'Judul Agenda','type'=>'text','required'=>true], 'tanggal_kegiatan'=>['label'=>'Tanggal Kegiatan','type'=>'date','required'=>true], 'lokasi'=>['label'=>'Lokasi','type'=>'text'], 'keterangan'=>['label'=>'Keterangan','type'=>'textarea']]],
 'galeri'=>['title'=>'Galeri Kegiatan','table'=>'galeri','order'=>'id DESC','fields'=>[
   'judul_kegiatan'=>['label'=>'Judul Kegiatan','type'=>'text','required'=>true], 'foto'=>['label'=>'Foto','type'=>'image','folder'=>'galeri'], 'deskripsi'=>['label'=>'Deskripsi','type'=>'textarea'], 'tanggal'=>['label'=>'Tanggal','type'=>'date']]],
 'prestasi'=>['title'=>'Prestasi Siswa','table'=>'prestasi','order'=>'tahun DESC, id DESC','fields'=>[
   'judul_prestasi'=>['label'=>'Judul Prestasi','type'=>'text','required'=>true], 'penyelenggara'=>['label'=>'Penyelenggara','type'=>'text'], 'tingkat'=>['label'=>'Tingkat','type'=>'text'], 'deskripsi'=>['label'=>'Deskripsi','type'=>'textarea'], 'foto_prestasi'=>['label'=>'Foto','type'=>'image','folder'=>'prestasi'], 'tahun'=>['label'=>'Tahun','type'=>'number']]],
];

$module=$_GET['modul']??'guru';
if (!isset($modules[$module]) && !in_array($module,['profil','statistik'],true)) { header('Location: index.php'); exit; }

if ($module==='profil') {
 $page_title='Profil Sekolah';
 $row=$conn->query('SELECT * FROM school_profile WHERE id=1')->fetch_assoc();
 if($_SERVER['REQUEST_METHOD']==='POST'){verify_csrf(); $sql='UPDATE school_profile SET nama_sekolah=?,nama_singkat=?,npsn=?,jenjang=?,status_sekolah=?,akreditasi=?,alamat=?,kecamatan=?,kota=?,provinsi=?,kode_pos=?,telepon=?,email=?,website=?,deskripsi=?,sambutan=?,nama_kepsek=?,jabatan_kepsek=? WHERE id=1'; $st=$conn->prepare($sql); $st->bind_param('ssssssssssssssssss',$_POST['nama_sekolah'],$_POST['nama_singkat'],$_POST['npsn'],$_POST['jenjang'],$_POST['status_sekolah'],$_POST['akreditasi'],$_POST['alamat'],$_POST['kecamatan'],$_POST['kota'],$_POST['provinsi'],$_POST['kode_pos'],$_POST['telepon'],$_POST['email'],$_POST['website'],$_POST['deskripsi'],$_POST['sambutan'],$_POST['nama_kepsek'],$_POST['jabatan_kepsek']); $st->execute(); header('Location: kelola.php?modul=profil&ok=1'); exit; }
 require __DIR__.'/_layout_top.php';
 ?>
 <div class="admin-panel"><div class="panel-heading"><div><span>DATABASE</span><h2>Informasi Profil Sekolah</h2></div></div><form method="post" class="admin-form"><input type="hidden" name="csrf" value="<?= csrf_token() ?>"><?php $profileFields=['nama_sekolah'=>'Nama Sekolah','nama_singkat'=>'Nama Singkat','npsn'=>'NPSN','jenjang'=>'Jenjang Pendidikan','status_sekolah'=>'Status Sekolah','akreditasi'=>'Akreditasi','alamat'=>'Alamat Sekolah','kecamatan'=>'Kecamatan','kota'=>'Kota','provinsi'=>'Provinsi','kode_pos'=>'Kode Pos','telepon'=>'Telepon','email'=>'Email','website'=>'Website','nama_kepsek'=>'Nama Kepala Sekolah','jabatan_kepsek'=>'Jabatan Kepala Sekolah']; foreach($profileFields as $f=>$label): ?><label><?= e($label) ?><input name="<?= $f ?>" value="<?= e($row[$f]??'') ?>"></label><?php endforeach; ?><label>Deskripsi Sekolah<textarea name="deskripsi"><?= e($row['deskripsi']??'') ?></textarea></label><label>Sambutan Kepala Sekolah<textarea name="sambutan"><?= e($row['sambutan']??'') ?></textarea></label><button class="btn-primary" type="submit">Simpan Profil</button></form></div>
 <?php require __DIR__.'/_layout_bottom.php'; exit;
}
if ($module==='statistik') {
 $page_title='Statistik Sekolah'; $row=$conn->query('SELECT * FROM school_stats WHERE id=1')->fetch_assoc(); $guruCount=(int)$conn->query('SELECT COUNT(*) c FROM guru')->fetch_assoc()['c']; $programCount=(int)$conn->query('SELECT COUNT(*) c FROM program_keahlian')->fetch_assoc()['c'];
 if($_SERVER['REQUEST_METHOD']==='POST'){verify_csrf(); $s=(int)($_POST['total_siswa']??0);$r=(int)($_POST['total_rombel']??0);$st=$conn->prepare('UPDATE school_stats SET total_siswa=?,total_rombel=? WHERE id=1');$st->bind_param('ii',$s,$r);$st->execute();header('Location: kelola.php?modul=statistik&ok=1');exit;}
 require __DIR__.'/_layout_top.php'; ?>
 <div class="admin-grid stats-admin"><div class="admin-stat"><span>Guru & Tendik (otomatis dari data guru)</span><strong><?= $guruCount ?></strong></div><div class="admin-stat"><span>Program Keahlian (otomatis dari data program)</span><strong><?= $programCount ?></strong></div><div class="admin-stat"><span>Siswa Aktif</span><strong><?= e($row['total_siswa']) ?></strong></div><div class="admin-stat"><span>Rombel</span><strong><?= e($row['total_rombel']) ?></strong></div></div>
 <div class="admin-panel"><div class="panel-heading"><div><span>DATABASE</span><h2>Ubah Statistik</h2></div></div><form method="post" class="admin-form two-col"><input type="hidden" name="csrf" value="<?= csrf_token() ?>"><label>Total Siswa<input type="number" min="0" name="total_siswa" value="<?= e($row['total_siswa']) ?>" required></label><label>Total Rombel<input type="number" min="0" name="total_rombel" value="<?= e($row['total_rombel']) ?>" required></label><div><button class="btn-primary" type="submit">Simpan Statistik</button></div></form></div>
 <?php require __DIR__.'/_layout_bottom.php'; exit;
}

$cfg=$modules[$module]; $page_title=$cfg['title']; $table=$cfg['table']; $editId=(int)($_GET['edit']??0); $editing=null;
if($editId){$st=$conn->prepare("SELECT * FROM `$table` WHERE id=?");$st->bind_param('i',$editId);$st->execute();$editing=$st->get_result()->fetch_assoc();}
function save_uploaded_image(string $field,string $folder): ?string {
    if (empty($_FILES[$field]['name']) || $_FILES[$field]['error'] !== UPLOAD_ERR_OK) return null;
    $allowed=['jpg','jpeg','png','webp','gif']; $ext=strtolower(pathinfo($_FILES[$field]['name'],PATHINFO_EXTENSION));
    if(!in_array($ext,$allowed,true)) return null;
    if($_FILES[$field]['size']>5*1024*1024) return null;
    $dir=dirname(__DIR__).'/assets/'.$folder; if(!is_dir($dir)) mkdir($dir,0755,true);
    $name=time().'_'.bin2hex(random_bytes(4)).'.'.$ext; move_uploaded_file($_FILES[$field]['tmp_name'],$dir.'/'.$name); return $name;
}

if($_SERVER['REQUEST_METHOD']==='POST'){
 verify_csrf();
 if(isset($_POST['delete_id'])){
   $id=(int)$_POST['delete_id']; $st=$conn->prepare("DELETE FROM `$table` WHERE id=?");$st->bind_param('i',$id);$st->execute();header('Location: kelola.php?modul='.urlencode($module).'&ok=deleted');exit;
 }
 $id=(int)($_POST['id']??0); $data=[];
 foreach($cfg['fields'] as $field=>$meta){$data[$field]=trim($_POST[$field]??''); if($meta['type']==='number') $data[$field]=(int)$data[$field];}
 foreach($cfg['fields'] as $field=>$meta){if($meta['type']==='image'){ $up=save_uploaded_image($field.'_upload',$meta['folder']); if($up!==null) $data[$field]=$up; elseif($id && $editing) $data[$field]=$editing[$field]??''; } elseif($meta['type']==='image_or_text'){ $up=save_uploaded_image($field.'_upload',$meta['folder']); if($up!==null)$data[$field]=$up; }}
 $columns=array_keys($cfg['fields']);
 if($id){$sets=implode(',',array_map(fn($c)=>"`$c`=?",$columns));$types='';$vals=[];foreach($columns as $c){$types.=(is_int($data[$c])?'i':'s');$vals[]=$data[$c];}$types.='i';$vals[]=$id;$st=$conn->prepare("UPDATE `$table` SET $sets WHERE id=?");$st->bind_param($types,...$vals);$st->execute();}
 else {$cols='`'.implode('`,`',$columns).'`';$ph=implode(',',array_fill(0,count($columns),'?'));$types='';$vals=[];foreach($columns as $c){$types.=(is_int($data[$c])?'i':'s');$vals[]=$data[$c];}$st=$conn->prepare("INSERT INTO `$table` ($cols) VALUES ($ph)");$st->bind_param($types,...$vals);$st->execute();}
 header('Location: kelola.php?modul='.urlencode($module).'&ok=1');exit;
}
$rows=$conn->query("SELECT * FROM `$table` ORDER BY {$cfg['order']}")->fetch_all(MYSQLI_ASSOC);
require __DIR__.'/_layout_top.php';
?>
<div class="admin-panel"><div class="panel-heading"><div><span>DATABASE</span><h2><?= $editId ? 'Edit Data' : 'Tambah Data' ?></h2></div><a class="btn-secondary" href="kelola.php?modul=<?= e($module) ?>">Reset Form</a></div>
<form method="post" enctype="multipart/form-data" class="admin-form"><input type="hidden" name="csrf" value="<?= csrf_token() ?>"><input type="hidden" name="id" value="<?= $editId ?>"><div class="form-grid">
<?php foreach($cfg['fields'] as $field=>$meta): $val=$editing[$field]??''; ?><label><?= e($meta['label']) ?><?php if($meta['type']==='textarea'): ?><textarea name="<?= e($field) ?>" <?= !empty($meta['required'])?'required':'' ?>><?= e($val) ?></textarea><?php elseif($meta['type']==='image' || $meta['type']==='image_or_text'): ?><input type="text" name="<?= e($field) ?>" value="<?= e($val) ?>" placeholder="Nama file atau URL"><input type="file" name="<?= e($field) ?>_upload" accept="image/*"><?php else: ?><input type="<?= e($meta['type']) ?>" name="<?= e($field) ?>" value="<?= e($val) ?>" <?= !empty($meta['required'])?'required':'' ?>><?php endif; ?></label><?php endforeach; ?></div><button class="btn-primary" type="submit"><?= $editId ? 'Update Data' : 'Tambah Data' ?></button></form></div>
<div class="admin-panel"><div class="panel-heading"><div><span>DATA TERSIMPAN</span><h2><?= e($cfg['title']) ?></h2></div><span class="count-badge"><?= count($rows) ?> data</span></div><div class="table-wrap"><table class="admin-table"><thead><tr><th>#</th><?php foreach($cfg['fields'] as $field=>$meta): ?><th><?= e($meta['label']) ?></th><?php endforeach; ?><th>Aksi</th></tr></thead><tbody><?php foreach($rows as $i=>$row): ?><tr><td><?= $i+1 ?></td><?php foreach($cfg['fields'] as $field=>$meta): ?><td><?php if($meta['type']==='image' || $meta['type']==='image_or_text'): ?><?php if($row[$field]): ?><div class="table-image"><img src="<?= str_starts_with($row[$field],'http') ? e($row[$field]) : '../assets/'.e($meta['folder']).'/'.e($row[$field]) ?>" alt=""></div><?php else: ?>—<?php endif; ?><?php else: ?><?= nl2br(e($row[$field])) ?><?php endif; ?></td><?php endforeach; ?><td><div class="action-row"><a class="btn-edit" href="kelola.php?modul=<?= e($module) ?>&edit=<?= (int)$row['id'] ?>">Edit</a><form method="post"><input type="hidden" name="csrf" value="<?= csrf_token() ?>"><input type="hidden" name="delete_id" value="<?= (int)$row['id'] ?>"><button class="btn-delete" type="submit">Hapus</button></form></div></td></tr><?php endforeach; ?></tbody></table></div></div>
<?php require __DIR__.'/_layout_bottom.php'; ?>
