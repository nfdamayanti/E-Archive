<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Krub%3A700"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C700"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lilita+One%3A400"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login2.css" media="screen" title="Tambah Data Pegawai">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./styles/form-dtpegawai.css"/>
    <title>Tambah Data Pegawai</title>
  </head>

  <body>
    <div class="dtpegawai">
      <h1>DATA PEGAWAI</h1>

      <form action="" method="POST" class="form-item">
        <div class="kotak-nip">NIP</div>
        <p><a class="titik-dua-1">:</a></p>
        <input type="text" name="nip" class="nip-pegawai"></input>

        <div class="kotak-nama">NAMA</div>
        <p><a class="titik-dua-2">:</a></p>
        <input type="text" name="nama_pegawai" class="nama-pegawai"></input>

        <div class="kotak-unit-kerja">UNIT KERJA</div>
        <p><a class="titik-dua-3">:</a></p>
        <select name="id_uk" class="unit-kerja-pegawai">
          <option>Pilih Bidang</option>
              <?php
                include "koneksi.php";
                $query = mysqli_query($conn,"SELECT * FROM unit_kerja") or die (mysqli_error($conn));
                while($data = mysqli_fetch_array($query)){
                echo "<option value=$data[id_uk]> $data[kd_uk] - $data[eselon_3] - $data[eselon_4]</option>";
                }
              ?>
            </select>

        <div class="kotak-status">STATUS</div>
        <p><a class="titik-dua-4">:</a></p>
        <select name="status_pegawai" id="skpd" class="status-pegawai">
          <option value="Aktif">Aktif</option>
          <option value="Tidak Aktif">Tidak Aktif</option>
        </select>

        <div class="kotak-jabatan">JABATAN</div>
        <p><a class="titik-dua-5">:</a></p>
        <input type="text" name="jabatan" class="jabatan"></input>

        <div class="kotak-skpd">SKPD</div>
        <p><a class="titik-dua-6">:</a></p>
        <input type="text" name="skpd" class="skpd-pegawai"></input>

        <a href="data-pegawai.php">
          <button type="submit" name="simpan" class="btn-simpan">SIMPAN</button>
        </a>

        <a href="data-pegawai.php">
          <button type="submit" name="batal" class="btn-batal">BATAL</button>
        </a>
      </form>
    </div>
  </body>
</html>
<?php
if(isset($_POST['simpan'])){

    $nip = $_POST['nip'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $id_uk = $_POST['id_uk'];
    $status_pegawai = $_POST['status_pegawai'];
    $jabatan = $_POST['jabatan'];
    $skpd = $_POST['skpd'];

    mysqli_query($conn,"INSERT INTO tbl_pegawai VALUES('','$nip','$nama_pegawai','$id_uk','$status_pegawai','$jabatan','$skpd')
    ") OR die(mysqli_error($conn));

?>

<script type="text/javascript">
alert("Data Berhasil Ditambahkan");
window.location='data-pegawai.php';
</script>

<?php
}  if(isset($_POST['batal'])){
?>

<script type="text/javascript">
alert("Tambah Data Dibatalkan");
window.location='data-pegawai.php';
</script>

<?php
}
?>